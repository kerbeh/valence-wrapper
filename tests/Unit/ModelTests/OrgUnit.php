<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use ValenceWrapper\Model\Dropbox\DropboxFolder;

class OrgUnitTypeModelTest extends TestCase {

    /** @test */
    public function testRubric() {

        $dropboxFolderArray = json_decode(
                '[
    {
        "Id": 102,
        "Code": "Faculty",
        "Name": "Faculty",
        "Description": "",
        "SortOrder": 0,
        "Permissions": {
            "CanEdit": true,
            "CanDelete": true
        }
    },
    {
        "Id": 103,
        "Code": "Teaching Period",
        "Name": "Teaching Period",
        "Description": "Teaching Period ORG type encompassing standard and non-standard teaching periods",
        "SortOrder": 1,
        "Permissions": {
            "CanEdit": true,
            "CanDelete": true
        }
    },
    {
        "Id": 101,
        "Code": "Department",
        "Name": "Department",
        "Description": "",
        "SortOrder": 2,
        "Permissions": {
            "CanEdit": true,
            "CanDelete": true
        }
    },
    {
        "Id": 5,
        "Code": "Semester",
        "Name": "Semester",
        "Description": "Semester",
        "SortOrder": 3,
        "Permissions": {
            "CanEdit": false,
            "CanDelete": false
        }
    },
    {
        "Id": 2,
        "Code": "Course Template",
        "Name": "Site Template",
        "Description": "A template for offering sites",
        "SortOrder": 4,
        "Permissions": {
            "CanEdit": false,
            "CanDelete": false
        }
    },
    {
        "Id": 3,
        "Code": "Course Offering",
        "Name": "Site Offering",
        "Description": "An instance of a site",
        "SortOrder": 5,
        "Permissions": {
            "CanEdit": false,
            "CanDelete": false
        }
    },
    {
        "Id": 4,
        "Code": "Group",
        "Name": "Group",
        "Description": "A grouping of users within a parent org unit",
        "SortOrder": 6,
        "Permissions": {
            "CanEdit": false,
            "CanDelete": false
        }
    }
]'
                , true);
        $dropboxFolder = new DropboxFolder($dropboxFolderArray[0]);


        var_dump($dropboxFolder);


        $this->assertInstanceOf(DropboxFolder::class, $dropboxFolder);
    }

}
