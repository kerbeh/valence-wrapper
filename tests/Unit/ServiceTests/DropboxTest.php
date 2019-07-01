<?php

namespace Tests\Unit\ServiceTests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Constraint\IsType;
use ValenceWrapper\Service\Grades;
use ValenceWrapper\GuzzleAdapter;
use ValenceWrapper\ValenceInstance;
use ValenceWrapper\Service\Dropbox;
use GuzzleHttp\Psr7\Request;

class DropboxTests extends TestCase {

    /**
     * @test
     */
    public function testGetSubmissionRequest() {

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



        $gradeObjectNumericArray = [
            "MaxPoints" => 100,
            "CanExceedMaxPoints" => FALSE,
            "IsBonus" => FALSE,
            "ExcludeFromFinalGradeCalculation" => TRUE,
            "GradeSchemeId" => NULL,
            "Name" => "Test Grade Object",
            "ShortName" => "Short Name Test Grade Object",
            "CategoryId" => NULL,
            "Description" => NULL,
            "Weight" => 100,
            "AssociatedTool" => NULL
        ];

        $valenceInstance = new ValenceInstance($userId, $userKey, $appId, $appKey, $host, $port, $protocol);

        $orgUnitId = "635104";
        $folderId = "112554";

        $dropboxService = new Dropbox($valenceInstance);

        $dropboxSubmissions = $dropboxService->getSubmissionsRequest($orgUnitId, $folderId);

        $this->assertInstanceOf(Request::class, $dropboxSubmissions);
    }

}
