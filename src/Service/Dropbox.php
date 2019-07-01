<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;
use ValenceWrapper\ValenceVersion;

/**
 * Description of Grades
 *
 * @author ktrist
 */
Class Dropbox extends ValenceVersion {

    public function __construct() {

    }

    /**
     * Retrieve all the submissions for a specific dropbox folder.
     * activeOnly (boolean) Optional. Include only submissions from actively enrolled users.
     * @param Int $orgUnitId
     * @param Int $folderId
     * @param Bool $activeOnly Optional. Include only submissions from actively enrolled users.
     * @return Request
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-submissions-
     */
    public function getSubmissionsRequest($orgUnitId, $folderId, $activeOnly = TRUE) {

        $uri = "/d2l/api/le/$this->le_version/$orgUnitId/dropbox/folders/$folderId/submissions/?activeOnly=$activeOnly";
        return new Request('GET', $uri);
    }

    /**
     * Retrieve all dropbox folders for an org unit.
     * $onlyCurrentStudentsAndGroups Optional. If true, show only currently enrolled students and active groups.
     * @param Int $orgUnitId
     * @param Int $folderId
     * @param Bool $onlyCurrentStudentsAndGroups Optional. If true, show only currently enrolled students and active groups.
     * @return Request
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-
     */
    public function getDropboxFoldersRequest($orgUnitId, $onlyCurrentStudentsAndGroups = TRUE) {
        $uri = "/d2l/api/le/$this->le_version/$orgUnitId/dropbox/folders/?onlyCurrentStudentsAndGroups=$onlyCurrentStudentsAndGroups";
        return new Request('GET', $uri);
    }

    /**
     * Retrive a single dropbox by d2l id
     *
     * @param [type] $orgUnitId
     * @param [type] $folderId
     * @return Request
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)
     *      */
    public function getDropboxFolderRequest($orgUnitId, $folderId) {
        $uri = "/d2l/api/le/$this->le_version/$orgUnitId/dropbox/folders/$folderId";
        return new Request('GET', $uri);
    }

}
