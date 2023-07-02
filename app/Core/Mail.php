<?php

namespace App\Core;

use Doctrine\DBAL\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class Mail
{

    protected PHPMailer $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);

        try {
          $config = Config::get('mail');
          $smtp = (object)$config['smtp'];
          $this->mail->SMTPDebug = false;
          $this->mail->isSMTP();
          $this->mail->Host = $smtp->host;
          $this->mail->SMTPAuth = true;
          $this->mail->Username = $smtp->username;
          $this->mail->Password = $smtp->password;
          $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
          $this->mail->Port = $smtp->port;
          $this->mail->isHTML(true);
          $this->mail->CharSet = 'UTF-8';
         } catch (Exception $e) {
            echo $e;
        }
    }

    /**
     * @throws \PHPMailer\PHPMailer\Exception
     */
    public function from($email): Mail
    {
        $this->mail->setFrom($email, '');
        return $this;
    }

    /**
     * @throws \PHPMailer\PHPMailer\Exception
     */
    public function to($email): Mail
    {
        $this->mail->addAddress($email);
        return $this;
    }

    /**
     * @throws \PHPMailer\PHPMailer\Exception
     */
    public function replyTo($email): Mail
    {
        $this->mail->addReplyTo($email);
        return $this;
    }

    public function subject($subject): Mail
    {
        $this->mail->Subject = $subject;
        return $this;
    }

    public function body($body): Mail
    {
        $this->mail->Body = $body;
        return $this;
    }

    /**
     * @throws \PHPMailer\PHPMailer\Exception
     */
    public function send()
    {
       $this->mail->send();
    }





}