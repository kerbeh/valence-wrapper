<?php

namespace Tests\Unit\ServiceTests;

use PHPUnit\Framework\TestCase;
use ValenceWrapper\Service\Grades;
use ValenceWrapper\GuzzleAdapter;
use ValenceWrapper\ValenceInstance;

class GradesTests extends TestCase {

    /** @test */
    public function testGradeService() {
        /**
         * Prepare a HTTP Client
         */
        $httpClient = new GuzzleAdapter;

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

        $valenceInstance = new ValenceInstance($httpClient, $userId, $userKey, $appId, $appKey, $host, $port, $protocol);


        $gradeService = new Grades($valenceInstance);

        var_dump($gradeService->getGrades(376743, 156716));

        $this->assertInstanceOf(Grades::class, $gradeService);
    }

}
