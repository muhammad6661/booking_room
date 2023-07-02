<?php

namespace App\Services;

use App\Core\Mail;
use PHPMailer\PHPMailer\Exception;

class SendMailService extends Mail
{
    const EMAIL_FROM = 'menoreply84@gmail.com';
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @throws Exception
     */
    public function sendToMail($email, $subject, $body)
    {
       $this->from(self::EMAIL_FROM)->to($email)->subject($subject)->body($body)->send();
    }

}