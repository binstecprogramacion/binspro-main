<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Gmail;
use Google_Service_Gmail_Message;
use Illuminate\Support\Facades\File;


class GmailController extends Controller
{
    public function sendGmail($to, $subject, $htmlContent)
    {
        // Crear cliente de Google
        $client = new Google_Client();
        $client->setScopes([Google_Service_Gmail::GMAIL_SEND]);
        $client->setAuthConfig(json_decode(File::get(storage_path(env('GOOGLE_SERVICE_ACCOUNT_JSON'))), true));
        $client->setSubject(env('GOOGLE_SERVICE_ACCOUNT_EMAIL'));

        // Crear instancia de Gmail
        $service = new Google_Service_Gmail($client);

        // Crear mensaje de correo electrónico
        $mailBody = "To: {$to}\r\n";
        $mailBody .= "Subject: {$subject}\r\n";
        $mailBody .= "Content-Type: text/html; charset=utf-8\r\n";
        $mailBody .= "\r\n";
        $mailBody .= $htmlContent;

        // Codificar el mensaje en base64
        $gmailMessage = new Google_Service_Gmail_Message();
        $gmailMessage->setRaw(base64_encode($mailBody));
        // Enviar correo electrónico
        $service->users_messages->send('me', $gmailMessage);
    }
}
