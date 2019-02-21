<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use ValenceWrapper\Model\Dropbox\DropboxFolder;

class DropboxModelTest extends TestCase {

    /** @test */
    public function testRubric() {

        $dropboxFolderArray = json_decode(
                '[{"Id":124885,"CategoryId":null,"Name":"Test","CustomInstructions":{"Text":"No Description","Html":"<p>No Description</p>"},"Attachments":[],"TotalFiles":0,"UnreadFiles":0,"FlaggedFiles":0,"TotalUsers":1481,"TotalUsersWithSubmissions":0,"TotalUsersWithFeedback":0,"Availability":null,"Assessment":{"ScoreDenominator":10.000000000,"Rubrics":[]},"GroupTypeId":null,"DueDate":null,"DisplayInCalendar":false}]'
                , true);
        $dropboxFolder = new DropboxFolder($dropboxFolderArray[0]);

        $this->assertInstanceOf(DropboxFolder::class, $dropboxFolder);
    }

}
