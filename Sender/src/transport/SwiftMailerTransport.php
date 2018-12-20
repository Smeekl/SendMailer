<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 17.12.18
 * Time: 16:46
 */

namespace transport;
require_once '../../../vendor/autoload.php';

class SwiftMailerTransport implements TransoptInterface
{
    private $mailer;
    private $message;

    public function __construct($settings,  $messageSettings)
    {
        $transport = (new \Swift_SmtpTransport($settings['host'], $settings['port']))
            ->setUsername($settings['email'])
            ->setPassword($settings['pass'])
            ->setEncryption($settings['encryption']);

        $mailer = new \Swift_Mailer($transport);
        $this->mailer = $mailer;


        $messsage = (new \Swift_Message($messageSettings['title']))
            ->setFrom([$messageSettings['ownerEmail'] => $messageSettings['owner']])
            ->setTo([$messageSettings['users']])
            ->setBody($messageSettings['data']);
        $this->message = $messsage;
    }



    public function sendData()
    {
        $this->mailer->send($this->message);
    }
}