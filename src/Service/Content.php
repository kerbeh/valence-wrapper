<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use ValenceWrapper\Model\Content\ContentObjectData;
use ValenceWrapper\ValenceInstance;

/**
 * Description of Grades
 *
 * @author ktrist
 */
class Content {

    protected $le_version;
    protected $valenceInstance;

    const BOUNDARY = 'xxBOUNDARYxx';

    public function __construct(ValenceInstance $valenceInstance) {
        $this->valenceInstance = $valenceInstance;
        $this->le_version = $valenceInstance->le_version;

        $this->le_version = 1.24;
    }

    /**
     * Undocumented function
     *
     * @param [type] $orgUnitId
     * @param [type] $topicId
     * @param boolean $activeOnly
     * @return void
     * @see https://docs.valence.desire2learn.com/res/content.html#put--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)-file
     */
    public function getTopicFileUploadRequest($orgUnitId, $topicId, $file, ContentObjectData $contentObjectData) {

        $boundary = $this::BOUNDARY;
        $multipart_form = [
            [
                'name' => 'file',
                'contents' => $file,
            ],
        ];

        $params = [
            'headers' => [
                'Connection' => 'close',
                'Content-Type' => 'multipart/form-data; boundary=' . $boundary,
            ],
            'body' => new MultipartStream($multipart_form, $boundary), // here is all the magic
        ];


        $uri = $this->valenceInstance->authenticateUri("/d2l/api/le/$this->le_version/$orgUnitId/content/topics/$topicId/file", 'PUT');
        return new Request('GET', $uri);
    }

    /**
     * Undocumented function
     *
     * @param [type] $orgUnitId
     * @param [type] $topicId
     * @param boolean $activeOnly
     * @return void
     * @see https://docs.valence.desire2learn.com/res/content.html#post--d2l-api-le-(version)-(orgUnitId)-content-modules-(moduleId)-structure-
     */
    public function getTopicUploadRequest($orgUnitId, $moduleId, $file, $fileName, ContentObjectData $contentObjectData) {


        $boundary = $this::BOUNDARY;
        $multipart_mixed = [
            [
                'name' => "",
                'headers' => [
                    'Content-Type' => "application/json",
                ],
                'contents' => json_encode($contentObjectData->toArray())
            ],
            [
                'name' => "files",
                'headers' => [
                    'Content-Type' => mime_content_type($file),
                    'Content-Disposition' => "form-data; name=\"\"; filename=\"$fileName\""
                ],
                'contents' => file_get_contents($file)
            ]
        ];

        $headers = ['Content-Type' => 'multipart/mixed; boundary=' . $this::BOUNDARY];

        $body = new MultipartStream($multipart_mixed, $boundary);

        $uri = $this->valenceInstance->authenticateUri("/d2l/api/le/$this->le_version/$orgUnitId/content/modules/$moduleId/structure/", "POST");

        return new Request("POST", $uri, $headers, $body);
    }

}
