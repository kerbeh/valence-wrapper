<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use ValenceWrapper\GuzzleAdapter;
use ValenceWrapper\ValenceApi;

class ValenceWrapperTest extends TestCase
{

/** @test */
    public function testGuzzleHttpClient()
    {
        $httpClient = new GuzzleAdapter;

        $this->assertInstanceOf(GuzzleAdapter::class, $httpClient);

    }

/** @test */
    public function testValenceApi()
    {

        $userId = "1";
        $userKey = "userKey";
        $appId = "G9nUpvbZQyiPrk3um2YAkQ";
        $appKey = "ybZu7fm_JKJTFwKEHfoZ7Q";

        $host = "lms.valence.desire2learn.com";
        $port = 443;
        $protocol = "HTTPS";

        $httpClient = new GuzzleAdapter;
        $valenceApi = new ValenceApi($httpClient, $userId, $userKey, $appId, $appKey, $host, $port, $protocol);

        $this->assertInstanceOf(GuzzleAdapter::class, $valenceApi->getClient());
        $this->assertInstanceOf(ValenceApi::class, $valenceApi);

    }

}
