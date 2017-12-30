<?php

declare(strict_types=1);

/*
 * This file is part of Laravel YouTrack SDK.
 *
 * (c) Anton Komarev <a.komarev@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cog\Tests\Laravel\YouTrack\Unit\Providers;

use Cog\Contracts\YouTrack\Rest\Client\Client as ClientContract;
use Cog\Tests\Laravel\YouTrack\TestCase;
use Cog\YouTrack\Rest\Client\YouTrackClient;

/**
 * Class YouTrackServiceProviderTest.
 *
 * @package Cog\Tests\Laravel\YouTrack\Unit\Providers
 */
class YouTrackServiceProviderTest extends TestCase
{
    /** @test */
    public function it_can_instantiate_youtrack_client_from_container()
    {
        $client = $this->app->make(ClientContract::class);

        $this->assertInstanceOf(YouTrackClient::class, $client);
    }
}
