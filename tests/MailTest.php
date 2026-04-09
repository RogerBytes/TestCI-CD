<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Test\MailerAssertionsTrait;

class MailTest extends WebTestCase
{
  use MailerAssertionsTrait;
  public function testMailEnvoi(): void
  {
    $client = static::createClient();
    $client->request('GET', '/send-mail');

    // $this->assertResponseIsSuccessful();
    $this->assertEmailCount(1);
  }
}
