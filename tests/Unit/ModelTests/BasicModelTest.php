<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use ValenceWrapper\Model\Basic\RichText;
use ValenceWrapper\Model\Basic\RichTextInput;
use ValenceWrapper\Model\Basic\UtcDateTime;

class ValenceWrapperModelBasicTest extends TestCase {

    /** @test */
    public function testRichText() {

        $textAndHtml = [
            "Text" => "Hello World",
            "Html" => "<h1>Hello World</h1>"
        ];
        $richText = new RichText($textAndHtml);
        $this->assertArrayHasKey('Text', $richText->toArray());
        $this->assertArrayHasKey('Html', $richText->toArray());
        $this->assertInstanceOf(RichText::class, $richText);
    }

    public function testRichTextEmpty() {

        $textAndHtml = [
            "Text" => null,
            "Html" => null
        ];
        $richText = new RichText($textAndHtml);
        $richTextArray = $richText->toArray();
        $this->assertEquals($richTextArray['Text'], "");
        $this->assertNull($richTextArray['Html']);
        $this->assertInstanceOf(RichText::class, $richText);
    }

}
