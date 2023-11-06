<?php

use Google\Client;
use Google\Service\Gmail;

class GetmailController extends Controller
{
    public function afficherNotifications()
    {
        $client = new Client();
        $client->setAuthConfig('../client_secret_676998499432-5duej9hqkpkcfmqfnp09s4s806rtohao.apps.googleusercontent.com');
        $client->setScopes([Gmail::GMAIL_READONLY]);
        $service = new Gmail($client);

        // Récupère la liste des messages
        $messages = $service->users_messages->listUsersMessages('me');

        // Traite les messages (à adapter selon tes besoins)
        $emails = [];
        foreach ($messages->getMessages() as $message) {
            $messageInfo = $service->users_messages->get('me', $message->getId());
            $sender = $messageInfo->getPayload()->getHeaders()[0]->value;
            $subject = $messageInfo->getPayload()->getHeaders()[1]->value;
            $content = base64_decode($messageInfo->getPayload()->getBody()->data);

            // Ajoute les informations à la liste des emails
            $emails[] = [
                'sender' => $sender,
                'subject' => $subject,
                'content' => $content,
            ];
        }

        return view('layouts.app', ['emails' => $emails]);
    }
}
