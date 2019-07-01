<?php

namespace Tests\Unit\ServiceTests;

use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;
use ValenceWrapper\Service\Assessments;
use ValenceWrapper\ValenceInstance;
use ValenceWrapper\OauthValenceInstance;

class AssessmentsTest extends TestCase {

    /** @test */
    public function testCreateAssessmentsService() {

        $assessmentsService = new Assessments();

        $this->assertInstanceOf(Assessments::class, $assessmentsService);
        $this->assertTrue(is_string($assessmentsService->getLe_version()), "Returned" . gettype($assessmentsService->getLe_version()) . " instead of a string");
    }

    /** @test */
    public function testGetRubricRequest() {

        $assessmentsService = new Assessments();

        $orgUnitId = "12345";
        $objectType = "Dropbox";
        $objectId = "12345";

        $rubricRequest = $assessmentsService->getRubricRequest($orgUnitId, $objectType, $objectId);

        $this->assertInstanceOf(Assessments::class, $assessmentsService);
        $this->assertInstanceOf(Request::class, $rubricRequest);
    }

    /**
     * @test
     * Test that the IDKey auth method returns a psr7 request with validated uri query params
     *
     */
    public function testGetRubricRequestValidatesIdKey() {

        /**
         * Create an instance of the api wrapper
         */
        $userId = "1";
        $userKey = "userKey";
        $appId = "G9nUpvbZQyiPrk3um2YAkQ";
        $appKey = "ybZu7fm_JKJTFwKEHfoZ7Q";

        $host = "lms.valence.desire2learn.com";
        $port = 443;
        $protocol = "HTTPS";

        $orgUnitId = "12345";
        $objectType = "Dropbox";
        $objectId = "12345";

        $valenceInstance = new ValenceInstance($userId, $userKey, $appId, $appKey, $host, $port, $protocol);

        $assessmentsService = new Assessments();
        $rubricRequest = $assessmentsService->getRubricRequest($orgUnitId, $objectType, $objectId);


        $authedRequest = $valenceInstance->authenticateRequest($rubricRequest);

        $authedQueryParams = [];
        parse_str($authedRequest->getUri()->getQuery(), $authedQueryParams);

        $this->assertArrayHasKey("x_a", $authedQueryParams, "Token Id not present"); //tokenID
        $this->assertArrayHasKey("x_b", $authedQueryParams, "Token Key not present"); //tokenKey
        $this->assertArrayHasKey("x_c", $authedQueryParams, "Token Sig not present");  //tokenSig
    }

    /**
     * @test
     * Test that the Oath auth method returns a psr7 request with auth header attached to request
     *
     */
    public function testGetRubricRequestValidatesOauth() {

        $host = "lms.valence.desire2learn.com";
        $port = 443;
        $protocol = "HTTPS";
        $token = "reallylongfaketoken==";

        $assessmentsService = new Assessments();

        $orgUnitId = "12345";
        $objectType = "Dropbox";
        $objectId = "12345";

        $rubricRequest = $assessmentsService->getRubricRequest($orgUnitId, $objectType, $objectId);


        $oAuthValenceInstance = new OauthValenceInstance($host, $port, $protocol, $token);

        $authedRequest = $oAuthValenceInstance->authenticateRequest($rubricRequest);

        $this->assertArrayHasKey("Authorization", $authedRequest->getHeaders(), "Authorisation header missing");  //tokenSig
    }

}
