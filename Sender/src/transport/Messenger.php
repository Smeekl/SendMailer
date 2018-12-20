<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 18.12.2018
 * Time: 22:27
 */

namespace transport;
require_once '../../../vendor/autoload.php';
require_once '../../config.php';

class Messenger
{

    public static function getAction(){
        switch ($_POST['action']){
            case "registration" :
                return array(
                    'title' => 'Thanks for registration!',
                    'data' => 'basic.php',
                );
                break;
            case "forgotPassword" :
                return array(
                    'title' => 'Changing password!',
                    'data' => 'pwdChangin.php'
                );
                break;
        }
    }

    static function send($action, $users){
        $messageSettitngs = array(
            'title' => $action['title'],
            'users' => array($users),
            'data' => include 'Sender/src/templates/registrationApprove/basic.php',
            'ownerEmail' => $settings['app_email'],
            'owner' => $settings['app_owner']
        );

        $sender = new SwiftMailerTransport($settings, $messageSettitngs);
    }
}