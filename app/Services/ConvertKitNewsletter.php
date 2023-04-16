<?php


namespace App\Services;

class ConvertKitNewsletter implements NewsletterInterface
{

    public function __construct()
    {
        //
    }

    public function subscribe(string $email, string $list = null)
    {
        //subscribe the user with ConvertKit SDK

    }
}