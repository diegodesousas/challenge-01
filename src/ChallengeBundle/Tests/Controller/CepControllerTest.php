<?php

namespace ChallengeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CepControllerTest extends WebTestCase
{
    public function testFind()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/find');
    }

}
