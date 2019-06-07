<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use ValenceWrapper\Model\Content\ContentObjectData;

class ContentModelTest extends TestCase
{

    /** @test */
    public function testContentObjectData()
    {

        $ContentObjectDataArray =
            ["Title" => "Placeholder, Please Delete", "Url" => "/content/enforced/376743-TKS101_TRI-3_2014/file.js", "TopicType" => 1];

        $contentObjectData = new ContentObjectData($ContentObjectDataArray);

        $this->assertInstanceOf(ContentObjectData::class, $contentObjectData);
    }

}
