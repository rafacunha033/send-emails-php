<?php 

namespace App\Support;

use Exception;
use stdClass;
use PHPMailer\PHPMailer\PHPMailer;

class Email 
{
    /** @var PHPMailer */
    private $mail;

    /** @var stdClass */
    private $data;

    /** @var Exception */
    private $error;

    public function __construct()
    {
        $this->mail = new PHPMailer();
        $this->data = new stdClass();

        $this->mail->isSMTP();
        $this->mail->isHTML();
        $this->mail->setLanguage("br");

        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = "tls";
        $this->mail->CharSet = "utf-8";

        $this->mail->Host = MAIL["host"];
        $this->mail->Port = MAIL["port"];
        $this->mail->Username = MAIL["username"];
        $this->mail->Password = MAIL["password"];
    }
}