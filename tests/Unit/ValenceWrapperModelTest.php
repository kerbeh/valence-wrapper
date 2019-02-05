<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use ValenceWrapper\GuzzleAdapter;
use ValenceWrapper\ValenceInstance;
use ValenceWrapper\Model\Grade\IncomingGradeValueNumeric;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Grade\GradeObjectCategoryData;
use DateTime;
use ValenceWrapper\Model\Grade\GradeObjectNumeric;
use ValenceWrapper\Model\Grade\GradeValue;
use ValenceWrapper\Model\User\User;

class ValenceWrapperModelTest extends TestCase {

    /** @test */
    public function testGuzzleHttpClient() {
        $httpClient = new GuzzleAdapter;
        $this->assertInstanceOf(GuzzleAdapter::class, $httpClient);
    }

}
