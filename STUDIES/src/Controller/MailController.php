<?php
// src/Controller/MailController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MailController extends AbstractController
{
    #[Route("/send", name:"send_email")]
    public function sendEmail(MailerInterface $mailer): Response
    {
        // Criar o e-mail
        $email = new Email();
        $email
            ->from('matheusviaira160@gmail.com')
            ->to('e4832406@gmail.com')
            ->subject('Assunto do e-mail')
            ->text('Este é um e-mail de teste enviado pelo Symfony.');

        // Enviar o e-mail
        $mailer->send($email);

        return new Response('E-mail enviado com sucesso!');
    }
}



