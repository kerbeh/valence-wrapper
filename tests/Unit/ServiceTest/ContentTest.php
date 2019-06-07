<?php

namespace Tests\Unit\ServiceTests;

use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;
use ValenceWrapper\Model\Content\ContentObjectData;
use ValenceWrapper\Service\Content;
use ValenceWrapper\ValenceInstance;

class ContentTest extends TestCase {

    /** @test */
    public function testCreateCopyJobRequest() {


        $ContentObjectDataArray = ["Title" => "Placeholder, Please Delete", "Url" => "/content/enforced/376743-TKS101_TRI-3_2014/file.js", "TopicType" => 1];

        $contentObjectData = new ContentObjectData($ContentObjectDataArray);



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

        $contentService = new Content($valenceInstance);

        $file = "/file.txt";
        $orgUnitId = "12345";
        $topicId = "123456";

        $contentService->getTopicFileUploadRequest($orgUnitId, $topicId, $file, $contentObjectData);




        //$this->assertInstanceOf(Request::class, $course->enqueueCourseCopy("123456", $copyJobRequest));
        //$this->assertInstanceOf(CreateCopyJobRequest::class, $copyJobRequest);
    }

}
