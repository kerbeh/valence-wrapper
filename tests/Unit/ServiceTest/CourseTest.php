<?php

namespace Tests\Unit\ServiceTests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Constraint\IsType;
use ValenceWrapper\Service\Course;
use ValenceWrapper\Model\Course\CreateCopyJobRequest;
use ValenceWrapper\ValenceInstance;
use GuzzleHttp\Psr7\Request;

class CourseTest extends TestCase {

    /** @test */
    public function testCreateCopyJobRequest() {


        $copyJob = [
            "SourceOrgUnitId" => 123456,
            "Components" => "News",
            "CallbackUrl" => NULL,
            "DaysToOffsetDates" => NULL,
            "HoursToOffsetDates" => NULL,
            "OffsetByStartDateDifference" => TRUE,
        ];

        $copyJobRequest = new CreateCopyJobRequest($copyJob);

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

        $valenceInstance = new ValenceInstance($userId, $userKey, $appId, $appKey, $host, $port, $protocol);

        $course = new Course($valenceInstance);
        $course->enqueueCourseCopy("123456", $copyJobRequest);

        $this->assertInstanceOf(Request::class, $course->enqueueCourseCopy("123456", $copyJobRequest));
        $this->assertInstanceOf(CreateCopyJobRequest::class, $copyJobRequest);
    }

}
