<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use PHPMailer\PHPMailer\PHPMailer;  
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    public function contactBox(Request $request){

        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',
        ]);

        // email to client
        $this->composeEmailToClient($request->name, $request->email, $request->subject, $request->message );
        // email to staff


        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function composeEmailToClient($clientName, $clientMail , $clientSubject, $clientMessage) {

        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {
 
            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = "info@inflow-t.com";   //  sender username
            $mail->Password = "Inflow2023";       // sender password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465
 
            $mail->setFrom("info@inflow-t.com", "TEST-inlfow");
            $mail->AddAddress($clientMail, $clientName);

            $mail->isHTML(true);                // Set email content format to HTML
            $mail->Subject = "Received noticafication: ".$clientSubject;
            $mail->Body    = "Dear ".$clientName."\nThanks for your mail.\nWe will reply you asap.";
 
            $sendResult = $mail->Send();
            echo("\nResult: $sendResult");
 
        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }
    }
}
