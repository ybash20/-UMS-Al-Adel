<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $email = $request->input('email');
       

        if (isset ($_POST['submit'])) {
            $email = $_POST['email'];
        
            $mail = new PHPMailer(true);
          
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
                $mail->addAddress($email);
        
                //المحتوى
                $mail->isHTML(true);
                $mail->Subject = 'AL-Adel';
                $key = mt_rand (99999,999999);
                $mail->Body = 'رمز التحقق الخاص بك: ' . $key;
                $mail->AltBody = '';
                $mail->send();
        
        }
}
}