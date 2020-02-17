<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Data Hub and Data Export Framework — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/dataExport.html
 */
class DataHubAndDataExportFramework
{
    /**
     * Lists all available data sets.
     * @see https://docs.valence.desire2learn.com/res/dataExport.html#get--d2l-api-lp-(version)-dataExport-list
     * @return /PSR7 (Request)
     * Return. This action retrieves a JSON array of DataSetData
     * blocks.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getDataexportList($version)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/dataExport/list";
=======
        $uri = "/d2l/api/lp/$version/dataExport/list";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a data set.
     * @see https://docs.valence.desire2learn.com/res/dataExport.html#get--d2l-api-lp-(version)-dataExport-list-(dataSetId)
     * @return /PSR7 (Request)
     * Return. This action retrieves a DataSetData JSON
     * block containing the information for the requested data set.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $dataSetId Data set identifier.
     */
    public function getDataexportListDataSetId($version, $dataSetId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/dataExport/list/$dataSetId";
=======
        $uri = "/d2l/api/lp/$version/dataExport/list/$dataSetId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Create an export job for the requested data set.
     * @see https://docs.valence.desire2learn.com/res/dataExport.html#post--d2l-api-lp-(version)-dataExport-create
     * @return /PSR7 (Request)
     * Return. This action retrieves a ExportJobData
     * JSON block containing the information for the requested export job.
     *
     * @param [D2LVERSION] $version API version.
     * @param [DataExport.CreateExportJobData] $createExportJobData Properties of the export job request
     */
    public function postDataexportCreate($version, $createExportJobData)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/dataExport/create";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/dataExport/create";
        $body = $createExportJobData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Lists all available export jobs that you have previously submitted.
     * @see https://docs.valence.desire2learn.com/res/dataExport.html#get--d2l-api-lp-(version)-dataExport-jobs
     * @return /PSR7 (Request)
     * Return. This action retrieves a JSON array of ExportJobData
     * blocks, sorted by most recent SubmitDate. By default, only the first 100 records are retrieved.
     * Additional records can be retrieved by specifying the optional page query string parameter.
     *
     * @param [D2LVERSION] $version API version.
     * @param [integer] $page Optional. Page number to retrieve (page size is 100 records).
     * page
     */
    public function getDataexportJobs($version, $page = null)
    {
        $queryParrams = [
                            "page" => $page

        ];
        $queryString = http_build_query($queryParrams);
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/dataExport/jobs?$queryString";
=======
        $uri = "/d2l/api/lp/$version/dataExport/jobs?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieves information about a data export job that you have previously submitted.
     * @see https://docs.valence.desire2learn.com/res/dataExport.html#get--d2l-api-lp-(version)-dataExport-jobs-(exportJobId)
     * @return /PSR7 (Request)
     * Return. This action retrieves a ExportJobData
     * JSON block with the export job’s information.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $exportJobId Export job identifier.
     */
    public function getDataexportJobsExportJobId($version, $exportJobId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/dataExport/jobs/$exportJobId";
=======
        $uri = "/d2l/api/lp/$version/dataExport/jobs/$exportJobId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieves a ZIP file containing a CSV file with the data of the requested
     * export job that you previously submitted.
     * @see https://docs.valence.desire2learn.com/res/dataExport.html#get--d2l-api-lp-(version)-dataExport-download-(exportJobId)
     * @return /PSR7 (Request)
     * Return. This action retrieves a ZIP file containing a CSV file that
     * contains the data of the export job that you requested.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $exportJobId Export job identifier.
     */
    public function getDataexportDownloadExportJobId($version, $exportJobId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/dataExport/download/$exportJobId";
=======
        $uri = "/d2l/api/lp/$version/dataExport/download/$exportJobId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieves a list of Brightspace Data Sets plugins that you have permission to see.
     * @see https://docs.valence.desire2learn.com/res/dataExport.html#get--d2l-api-lp-(version)-dataExport-bds-list
     * @return /PSR7 (Request)
     * Return. This action retrieves a DataSetsReportinfo
     * JSON block with a list of plugins that you have permission to see.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getDataexportBdsList($version)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/dataExport/bds/list";
=======
        $uri = "/d2l/api/lp/$version/dataExport/bds/list";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieves a file stream for the requested Brightspace Data Sets plugin.
     * @see https://docs.valence.desire2learn.com/res/dataExport.html#get--d2l-api-lp-(version)-dataExport-bds-download-(pluginid)
     * @return /PSR7 (Request)
     * Return. This action retrieves a file stream for the requested Brightspace Data Sets plugin.
     * If your request exceeds your quota, resulting in a 403 Forbidden,
     * the Retry-After response header contains the length of time you must wait,
     * in seconds, before your quota is refreshed
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $pluginId Plugin identifier.
     */
    public function getDataexportBdsDownloadPluginId($version, $pluginId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/dataExport/bds/download/$pluginid";
=======
        $uri = "/d2l/api/lp/$version/dataExport/bds/download/$pluginid";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieves a list of Brightspace Data Sets plugins that you have permission to see.
     * @see https://docs.valence.desire2learn.com/res/dataExport.html#get--d2l-api-lp-(version)-dataExport-bds
     * @return /PSR7 (Request)
     * Return. This action retrieves a paged result set containing
     * a PagedBrightspaceDataSetsReportInfo
     * JSON block with a list of plugins that you have permission to see.
     *
     * @param [D2LVERSION] $version API version.
     * @param [number] $pageSize Optional. Number of entries to return in each data page.
     * pageSize
     */
    public function getDataexportBds($version, $pageSize = null)
    {
        $queryParrams = [
                            "pageSize" => $pageSize

        ];
        $queryString = http_build_query($queryParrams);
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/dataExport/bds?$queryString";
=======
        $uri = "/d2l/api/lp/$version/dataExport/bds?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieves a file stream for the requested Brightspace Data Sets plugin.
     * @see https://docs.valence.desire2learn.com/res/dataExport.html#get--d2l-api-lp-(version)-dataExport-bds-(pluginid)-(identifier)
     * @return /PSR7 (Request)
     * Return. This action retrieves a file stream for the requested Brightspace Data Sets plugin.
     * If your request exceeds your quota, resulting in a 403 Forbidden,
     * the Retry-After response header contains the length of time you must wait,
     * in seconds, before your quota is refreshed
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $pluginId Plugin identifier.
     * @param [string] $identifier Scheduled export identifier.
     */
    public function getDataexportBdsPluginIdIdentifier($version, $pluginId, $identifier)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/dataExport/bds/$pluginid/$identifier";
=======
        $uri = "/d2l/api/lp/$version/dataExport/bds/$pluginid/$identifier";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieves a list of schema identifiers and related plugin identifiers.
     * @see https://docs.valence.desire2learn.com/res/dataExport.html#get--d2l-api-lp-(version)-dataExport-schema-bds
     * @return /PSR7 (Request)
     * Return. This action retrieves a result set containing
     * BrightspaceDataSetSchemaInfo JSON blocks.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getDataexportSchemaBds($version)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/dataExport/schema/bds";
=======
        $uri = "/d2l/api/lp/$version/dataExport/schema/bds";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }
}
