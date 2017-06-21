<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HallControllerTest extends WebTestCase
{
    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hall/edit');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hall/show');
    }

}
