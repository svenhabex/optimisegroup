<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'assets/mail/vendor/autoload.php';

class Contact extends CI_Controller {


    public function index()
    {
        $title['title'] = 'Optimise Group | CONTACT';

        $this->load->view('templates/head', $title);
        $this->load->view('pages/contact');
        $this->load->view('templates/footer');
    }

    public function sendmail()
    {
        $naam = $this->input->post('name', TRUE);
        $email = $this->input->post('email', TRUE);
        $onderwerp = $this->input->post('subject', TRUE);
        $bericht = $this->input->post('message', TRUE);

        //verstuur mail naar lid
        $transporter = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
            ->setUsername('antwerpstpforum@gmail.com')
            ->setPassword('ATPforum12');
        $mailer = Swift_Mailer::newInstance($transporter);
        $message = Swift_Message::newInstance()
            ->setSubject($onderwerp)
            ->setFrom(array('antwerpstpforum@gmail.com' => 'Antwerps Transportforum'))
            ->setTo(array('sven.habex@hotmail.com'))
            ->setBody(
                '<html>'
                . ' <head></head>'
                . ' <body>'
                . '<p>Beste</p><p>Contactformulier optimise group:'
                . '<p>Van: '. $naam .', '. $email .'</p>'
                . '<p>'. $bericht .'</p>'
                . '<p>Met vriendelijke groeten, <br /> <br /> Optimise group contact </p>'
                . ' </body>'
                . '</html>',
                'text/html'
            );
        $mailer->send($message);
    }
}
