<?php

namespace App\Services;

class Notification
{
    private $email;

    public function __construct($email, FileUploader $fileUploader)
    {
        dd($fileUploader);
        $this->email = $email;
    }

    public function sendNotification()
    {

    }
}