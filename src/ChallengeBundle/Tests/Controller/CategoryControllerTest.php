<?php

namespace ChallengeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategoryControllerTest extends WebTestCase
{
    public function testFindall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/findAll');
    }

}
