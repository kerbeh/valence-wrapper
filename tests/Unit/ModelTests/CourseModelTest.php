<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use ValenceWrapper\Model\Course\CreateCopyJobRequest;

class CreateCopyJobRequestModelTest extends TestCase {

    /** @test */
    public function testCopyJobRequestModel() {


        $copyJob = [
            "SourceOrgUnitId" => 123456,
            "Components" => "News",
            "CallbackUrl" => NULL,
            "DaysToOffsetDates" => NULL,
            "HoursToOffsetDates" => NULL,
            "OffsetByStartDateDifference" => TRUE,
        ];

        $copyJobRequest = new CreateCopyJobRequest($copyJob);

        $this->assertInstanceOf(CreateCopyJobRequest::class, $copyJobRequest);
    }

}
