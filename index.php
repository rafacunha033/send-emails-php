<?php

//Load Composer's autoloader
require 'vendor/autoload.php';

use App\Support\Email;

$recipient_email = '';
$recipient_name = '';

$email = new Email();
$email->add('Hello there', '<h1>Some messsage</h1>', $recipient_name, $recipient_email);
$email->send();

