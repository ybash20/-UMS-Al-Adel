<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');
        
        $mail = new PHPMailer(true);

        try {
            // إعدادات الخادم
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'bilal14Hasil14@gmail.com';
            $mail->Password = 'dkagorcvfjnkkkuv'; // استخدم كلمات مرور التطبيقات أو OAuth2 لتأمين الحساب
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            // المستلمين
            $mail->setFrom('bilal14Hasil14@gmail.com');
            $mail->addAddress($email);

            // المحتوى
            $mail->isHTML(true);
            $mail->Subject = 'AL-Adel';
            $key = mt_rand(99999, 999999);
            $mail->Body = 'رمز التحقق الخاص بك: ' . $key;
            $mail->AltBody = '';

            $mail->send();

            return response()->json(['message' => 'تم إرسال البريد الإلكتروني بنجاح!']);
        } catch (Exception $e) {
            return response()->json(['message' => "لم يتم إرسال البريد الإلكتروني. خطأ: {$mail->ErrorInfo}"], 500);
        }
    }
}
