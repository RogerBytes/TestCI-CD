<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;

final class MailController extends AbstractController
{
    #[Route('/send-mail', name: 'send_mail')]
    public function sendMail(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('demo@example.com')
            ->to('test@exemple')
            ->subject('Bonjour depuis Symfo')
            ->text('Ceci est un email de test');

        $mailer->send($email);

        return new Response("Mail envoyé");
    }
}
