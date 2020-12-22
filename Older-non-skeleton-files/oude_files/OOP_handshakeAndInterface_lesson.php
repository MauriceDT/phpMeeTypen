<?php

interface Newsletter
{
    public function subscribe($email);
}
class CampaignMonitor implements Newsletter
{

    public function subscribe($email)
    {
        die('subscribing with Campaign Monitor');
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with Drip');
    }
}

class NewsLetterSubscriptionController
{
    public function store(Newsletter $newsletter)
    {
        $email = 'joe@example.com';
        $newsletter->subscribe($email);
    }
}

$controller = new NewsLetterSubscriptionController();

$controller->store(new Drip());
