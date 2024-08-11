<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\User;

class ForgotConroller extends Controller
{
    public function sendVerificationEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($user->email_verified_at !== null) {
                return redirect()->back()->with('error', 'The email address you provided is already verified. If you need to reset your password, please use the password reset feature.');
            }

            $verificationCode = Str::random(6);
            $user->verification_code = $verificationCode;
            $user->save();

            $mail = new PHPMailer(true);

            try {
                //إعدادات الخادم
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'bilal14Hasil14@gmail.com';
                $mail->Password = 'dkagorcvfjnkkkuv';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                //المستلمين
                $mail->setFrom('bilal14Hasil14@gmail.com');
                $mail->addAddress($user->email);

                //المحتوى
                $mail->isHTML(true);
                $mail->Subject = 'Verify Your Email';
                $mail->Body = 'Please click the following link to verify your email: <a href="' . route('verify-email', ['code' => $verificationCode]) . '">Verify Email</a>';
                $mail->AltBody = 'Your verification code is: ' . $verificationCode;
                $mail->send();

                return redirect()->route('verify-email')
                                 ->with('success', 'A verification link has been sent to your email.');
            } catch (Exception $e) {
                Log::error('Email sending error: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Failed to send verification email.');
            }
        }
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'code' => 'required|string|min:6|max:6',
        ]);

        $code = $request->input('code');

        $user = User::where('verification_code', $code)->first();

        if ($user && $code == $user->verification_code) {
            // Verification successful, do something here
            $user->email_verified_at = now();
            $user->verification_code = null;
            $user->save(); // Save the updated user model
            return redirect()->route('dashboard')->with('success', 'Email verified');
        } else {
            return redirect()->back()->with('error', 'Invalid verification code');
        }
    }
}
