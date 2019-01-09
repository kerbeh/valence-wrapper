<?php

namespace Tests\Unit\ServiceTests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Constraint\IsType;
use ValenceWrapper\Service\Grades;
use ValenceWrapper\GuzzleAdapter;
use ValenceWrapper\ValenceInstance;
use ValenceWrapper\Model\Grade\GradeValue;
use ValenceWrapper\Model\Grade\IncomingGradeValueNumeric;
use ValenceWrapper\Model\Grade\GradeObjectNumeric;

class GradesTests extends TestCase {

    public function GetIndividualGrade() {
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


        $userId = "237486";
        $orgUnitId = "376743";
        $gradeObjectId = "156716";

        $gradeService = new Grades($valenceInstance);

        $gradeResponse = $gradeService->getUserGrade($orgUnitId, $gradeObjectId, $userId);

        $this->assertInstanceOf(GradeValue::class, $gradeResponse);
        $this->assertInstanceOf(Grades::class, $gradeService);
    }

    public function GetAllGradesForGradeObject() {
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

        $userId = "237486";
        $orgUnitId = "376743";
        $gradeObjectId = "156716";

        $gradeService = new Grades($valenceInstance);
        $gradeResponse = $gradeService->getGrades($orgUnitId, $gradeObjectId);
        $this->assertInternalType(IsType::TYPE_ARRAY, $gradeResponse);
        $this->assertInstanceOf(Grades::class, $gradeService);
    }

    public function SetUserGradesForGradeObject() {
        /**
         * Prepare a HTTP Client
         */
        $httpClient = new GuzzleAdapter;
        $incomingGradeValue = new IncomingGradeValueNumeric([
//            "PointsNumerator" => 8,
        ]);

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


        $userId = "237486";
        $orgUnitId = "376743";
        $gradeObjectId = "156716";

        $gradeService = new Grades($valenceInstance);
        $gradeResponse = $gradeService->setGradeNumeric($orgUnitId, $gradeObjectId, $userId, $incomingGradeValue);

        $this->assertInternalType(IsType::TYPE_BOOL, $gradeResponse);
        $this->assertInstanceOf(Grades::class, $gradeService);
    }

    public function testCreateGradeObjectNumeric() {
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

        $gradeObjectNumeric = new GradeObjectNumeric($gradeObjectNumericArray);


        $valenceInstance = new ValenceInstance($httpClient, $userId, $userKey, $appId, $appKey, $host, $port, $protocol);

        $userId = "237486";
        $orgUnitId = "376743";
        $gradeObjectId = "156716";

        $gradeService = new Grades($valenceInstance);

        $gradeObject = $gradeService->createGradeObjectNumeric($orgUnitId, $gradeObjectNumeric);

        Var_dump($gradeObject);

        $this->assertInternalType(IsType::TYPE_BOOL, TRUE);
    }

}
