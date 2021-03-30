<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * This test produces different results than when adding a local web server and doing a request.
 * The following curl command will return a 500:
 *
 * php -S 0.0.0.0:8000 -t public
 * curl -i -H "Host: evil.com" -X GET http://127.0.0.1:8000/
 */
class ReproductionTest extends WebTestCase
{
    public function test(): void
    {
        $client = self::createClient();
        $client->catchExceptions(false);

        $client->request('GET', '/', [], [], ['HTTP_HOST' => 'evil.com']);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
