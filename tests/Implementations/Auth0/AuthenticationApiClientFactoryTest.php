<?php

declare(strict_types=1);

namespace EonX\EasyIdentity\Tests\Implementations\Auth0;

use EonX\EasyIdentity\Implementations\Auth0\AuthenticationApiClientFactory;
use EonX\EasyIdentity\Implementations\Auth0\Config;
use EonX\EasyIdentity\Tests\AbstractTestCase;

/**
 * @covers \EonX\EasyIdentity\Implementations\Auth0\AuthenticationApiClientFactory
 */
final class AuthenticationApiClientFactoryTest extends AbstractTestCase
{
    public function testCreate(): void
    {
        $config = new Config([
            'client_id' => 'client_id',
            'client_secret' => 'client_secret',
            'domain' => 'domain',
        ]);

        $factory = new AuthenticationApiClientFactory($config);
        $factory->create();

        // If no exception was thrown test is good.
        $this->addToAssertionCount(1);
    }
}
