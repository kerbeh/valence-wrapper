<?php
namespace ValenceWrapper\Model\DataSetReportInfo;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * This composite contains information about the plugins that are available
 * for you to use with Brightspace Data Sets.
 * @see https://docs.valence.desire2learn.com#brightspace-data-sets
 * The GUID for the requested Brightspace Data Sets plugin. This is the ID of
 * the server-side plugin that creates the data set and refreshes the data.
 *
 * An absolute APIURL you can use to directly download this data set.
 */
class DataSetReportInfo
{
    /**
     * @param PluginId
     * @type <string:GUID>
     */
    private $PluginId;

    /**
     * @param Name
     * @type <string>
     */
    private $Name;

    /**
     * @param Description
     * @type <string>
     */
    private $Description;

    /**
     * @param CreatedDate
     * @type <string:UTCDateTime>
     */
    private $CreatedDate;

    /**
     * @param DownloadLink
     * @type <string:APIURL>
     */
    private $DownloadLink;

    /**
     * @param DownloadSize
     * @type <number>
     */
    private $DownloadSize;


    /**
     * Constructor for DataSetReportInfo
     */
    public function __construct(array $attributes = [])
    {
        $this->PluginId = $attributes["PluginId"];
        $this->Name = $attributes["Name"];
        $this->Description = $attributes["Description"];
        $this->CreatedDate = $attributes["CreatedDate"];
        $this->DownloadLink = $attributes["DownloadLink"];
        $this->DownloadSize = $attributes["DownloadSize"];
    }
}
