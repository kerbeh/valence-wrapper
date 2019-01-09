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

class ValenceWrapperTest extends TestCase {

    /** @test */
    public function testGuzzleHttpClient() {
        $httpClient = new GuzzleAdapter;

        $this->assertInstanceOf(GuzzleAdapter::class, $httpClient);
    }

    /** @test */
    public function testValenceInstance() {

        $userId = "1";
        $userKey = "userKey";
        $appId = "G9nUpvbZQyiPrk3um2YAkQ";
        $appKey = "ybZu7fm_JKJTFwKEHfoZ7Q";

        $host = "lms.valence.desire2learn.com";
        $port = 443;
        $protocol = "HTTPS";

        $httpClient = new GuzzleAdapter;
        $valenceInstance = new ValenceInstance($httpClient, $userId, $userKey, $appId, $appKey, $host, $port, $protocol);

        $this->assertInstanceOf(GuzzleAdapter::class, $valenceInstance->getClient());
        $this->assertInstanceOf(ValenceInstance::class, $valenceInstance);
    }

    /** @test */
    public function testIncomingGradeValueNumericModel() {
        $gradeObjectType = "1";
        $pointsNumerator = "10";
        $comments = "";
        $privateComments = "";

        $incomingGradeValueNumericArray = [
            "GradeObjectType" => $gradeObjectType,
            "PointsNumerator" => $pointsNumerator,
            "Comments" => $comments,
            "PrivateComments" => $privateComments,
        ];

        $incomingGradeValueNumeric = new IncomingGradeValueNumeric($incomingGradeValueNumericArray);
        $this->assertInstanceOf(IncomingGradeValueNumeric::class, $incomingGradeValueNumeric);

        $this->assertEquals($pointsNumerator, $incomingGradeValueNumeric->getPointsNumerator());
        $this->assertEquals(1, $incomingGradeValueNumeric->getGradeObjectType());
    }

    /** @test */
    public function testUtcDateTime() {

        $testDate = "2046-05-20T13:05:30.067Z";
        $currentDate = new DateTime();

        $testCurrentDate = new UtcDateTime($currentDate->format("Y-m-d H:i:s"));
        $utcDateTime = new UtcDateTime($testDate);

        $this->assertRegExp('/\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}.\d{3}Z/', $testCurrentDate->getUtcDateTime());
        $this->assertEquals($testDate, $utcDateTime->getUtcDateTime());
    }

    /** @test */
    public function testGradeObjectCategoryData() {
        $currentDate = new DateTime();


        $gradeObjectCategoryDateTestArray = [
            "Name" => "Test Name",
            "ShortName" => "Test Short Name",
            "CanExceedMax" => FALSE,
            "ExcludeFromFinalGrade" => TRUE,
            "StartDate" => "2019-01-03T03:23:19.000Z",
            "EndDate" => "2019-01-03T03:23:19.000Z",
            "Weight" => NULL,
            "MaxPoints" => 100,
            "AutoPoints" => NULL,
            "WeightDistributionType" => NULL,
            "NumberOfHighestToDrop" => NULL,
            "NumberOfLowestToDrop" => NULL,
        ];

        $gradeObjectCategoryDataTestObject = new GradeObjectCategoryData($gradeObjectCategoryDateTestArray);
        $this->assertJsonStringEqualsJsonString($gradeObjectCategoryDataTestObject->toJson(), '{"Name":"Test Name","ShortName":"Test Short Name","CanExceedMax":true,"ExcludeFromFinalGrade":true,"StartDate":"2019-01-03T03:23:19.000Z","EndDate":"2019-01-03T03:23:19.000Z","Weight":0,"MaxPoints":100,"AutoPoints":null,"WeightDistributionType":0,"NumberOfHighestToDrop":0,"NumberOfLowestToDrop":0}');
        $this->assertInstanceOf(GradeObjectCategoryData::class, $gradeObjectCategoryDataTestObject);
    }

    public function testGradeObjectNumeric() {

        $gradeObjectNumericTestArray = [
            "MaxPoints" => 100,
            "CanExceedMaxPoints" => FALSE,
            "IsBonus" => FALSE,
            "ExcludeFromFinalGradeCalculation" => TRUE,
            "GradeSchemeId" => NULL,
            "Name" => "Test Grade Object",
            "ShortName" => "Short Name Test Grade Object",
            "CategoryId" => NULL,
            "Description" => NULL,
            "Weight" => 10,
            "AssociatedTool" => NULL
        ];

        $GradeObjectNumericTestObject = new GradeObjectNumeric($gradeObjectNumericTestArray);

        $this->assertJsonStringEqualsJsonString($GradeObjectNumericTestObject->toJson(), '{"MaxPoints": 100,"CanExceedMaxPoints": true,"IsBonus": false,"ExcludeFromFinalGradeCalculation": true,"GradeSchemeId": null,"Id": null,"Name": "Test Grade Object","ShortName": "Short Name Test Grade Object","GradeType": "Numeric","CategoryId": 0,"Description": null,"Weight": 10,"ActivityId": null,"AssociatedTool": null}');
        $this->assertInstanceOf(GradeObjectNumeric::class, $GradeObjectNumericTestObject);
    }

    public function testGradeValue() {

        $gradeValueTestArray = [
            "UserId" => "",
            "OrgUnitId" => "",
            "DisplayedGrade" => "10 %",
            "GradeObjectIdentififier" => "236276",
            "GradeObjectName" => "Test Grade Object",
            "GradeObjectType" => "1",
            "GradeObjectTypeName" => "Numeric",
            "Comments" => Null,
            "PrivateComments" => Null,
            "PointsNumerator" => 10,
            "PointsDenominator" => 100,
            "WeightedDenominator" => 10,
            "WeightedNumerator" => 1
        ];
        $gradeValueTestObject = new GradeValue($gradeValueTestArray);


        $this->assertInstanceOf(GradeValue::class, $gradeValueTestObject);

        $this->assertJsonStringEqualsJsonString($gradeValueTestObject->toJson(), '{"UserId":null,"OrgUnitId":null,"DisplayedGrade":"10 %","GradeObjectIdentififier":"236276","GradeObjectName":"Test Grade Object","GradeObjectType":"1","GradeObjectTypeName":"Numeric","Comments":null,"PrivateComments":null,"PointsNumerator":10,"PointsDenominator":100,"WeightedDenominator":10,"WeightedNumerator":1}');
    }

    public function testIncomingGradeItemNumeric() {

        $testIncomingGradeItemNumericTestArray = [
            'Comments' => Null,
            'PrivateComments' => Null,
            'PointsNumerator' => 10
        ];

        $incomingGradeValueNumericTestObject = new IncomingGradeValueNumeric($testIncomingGradeItemNumericTestArray);

        $this->assertJsonStringEqualsJsonString($incomingGradeValueNumericTestObject->toJson(), '{"GradeObjectType":1,"PointsNumerator":10,"Comments":{"Content":"","Type":"Text"},"PrivateComments":{"Content":"","Type":"Text"}}');
        $this->assertInstanceOf(IncomingGradeValueNumeric::class, $incomingGradeValueNumericTestObject);
    }

    public function testUser() {

        $userTestArray = [
            "Identifier" => 12345,
            "DisplayName" => "Bob User",
            "emailAddress" => "bob@example.com",
            "orgDefinedId" => 12345,
            "profileBadgeUrl" => null,
            "profileIdentifier" => null,
        ];

        $UserTestObject = new User($userTestArray);
        $this->assertInstanceOf(User::class, $UserTestObject);
    }

}
