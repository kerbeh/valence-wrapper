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

        $contentService = new Content();

        $file = "/file.txt";
        $orgUnitId = "12345";
        $topicId = "123456";

        $uploadRequest = $contentService->getTopicFileUploadRequest($orgUnitId, $topicId, $file, $contentObjectData);


        $this->assertInstanceOf(Request::class, $uploadRequest);
    }

}
