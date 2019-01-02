<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use ValenceWrapper\GuzzleAdapter;
use ValenceWrapper\ValenceApi;
use ValenceWrapper\Model\Grade\IncomingGradeValueNumeric;

class ValenceWrapperTest extends TestCase {

    /** @test */
    public function testGuzzleHttpClient() {
        $httpClient = new GuzzleAdapter;

        $this->assertInstanceOf(GuzzleAdapter::class, $httpClient);
    }

    /** @test */
    public function testValenceApi() {

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

    /** @test */
    public function testIncomingGradeValueNumericModel() {
        $gradeObjectType = "1";
        $pointsNumerator = "10";
        $comments = "";
        $privateComments = "";

        $incomingGradeValueNumericArray = [
            "GradeObjectType" => $gradeObjectType,
            "PointsNumerator" => $pointsNumerator,
            "Comments" => $comments,
            "PrivateComments" => $privateComments,
        ];

        $incomingGradeValueNumeric = new IncomingGradeValueNumeric($incomingGradeValueNumericArray);
        $this->assertInstanceOf(IncomingGradeValueNumeric::class, $incomingGradeValueNumeric);

        $this->assertEquals(10, $incomingGradeValueNumeric->getPointsNumerator());
        $this->assertEquals(1, $incomingGradeValueNumeric->getGradeObjectType());
    }

}
