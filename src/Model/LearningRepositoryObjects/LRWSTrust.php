<?php
namespace ValenceWrapper\Model\LRWSTrust;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#Repository.LRWSTrust
 */
class LRWSTrust
{
    /**
     * @param CanViewItems
     * @type <boolean>
     */
    private $CanViewItems;

    /**
     * @param CanSeeDetails
     * @type <boolean>
     */
    private $CanSeeDetails;

    /**
     * @param CanLinkToLor
     * @type <boolean>
     */
    private $CanLinkToLor;

    /**
     * @param CanRetrieve
     * @type <boolean>
     */
    private $CanRetrieve;

    /**
     * @param CanManageAllItems
     * @type <boolean>
     */
    private $CanManageAllItems;

    /**
     * @param CanManageMyItems
     * @type <boolean>
     */
    private $CanManageMyItems;

    /**
     * @param CanSeeEventLog
     * @type <boolean>
     */
    private $CanSeeEventLog;

    /**
     * @param CanViewFiles
     * @type <boolean>
     */
    private $CanViewFiles;

    /**
     * @param CanAddReviews
     * @type <boolean>
     */
    private $CanAddReviews;

    /**
     * @param CanDeleteReviews
     * @type <boolean>
     */
    private $CanDeleteReviews;

    /**
     * @param CanManageReviews
     * @type <boolean>
     */
    private $CanManageReviews;

    /**
     * @param CanClassify
     * @type <boolean>
     */
    private $CanClassify;

    /**
     * @param CanSeeAllHiddenObjects
     * @type <boolean>
     */
    private $CanSeeAllHiddenObjects;

    /**
     * @param CanPublish
     * @type <boolean>
     */
    private $CanPublish;

    /**
     * @param CanPublishOffline
     * @type <boolean>
     */
    private $CanPublishOffline;

    /**
     * @param CanSearch
     * @type <boolean>
     */
    private $CanSearch;

    /**
     * @param CanVersionMyItems
     * @type <boolean>
     */
    private $CanVersionMyItems;

    /**
     * @param CanViewMetadata
     * @type <boolean>
     */
    private $CanViewMetadata;

    /**
     * @param CanEditMetadata
     * @type <boolean>
     */
    private $CanEditMetadata;

    /**
     * @param CanManageRepositories
     * @type <boolean>
     */
    private $CanManageRepositories;


    /**
     * Constructor for LRWSTrust
     */
    public function __construct(array $attributes = [])
    {
        $this->CanViewItems = $attributes["CanViewItems"];
        $this->CanSeeDetails = $attributes["CanSeeDetails"];
        $this->CanLinkToLor = $attributes["CanLinkToLor"];
        $this->CanRetrieve = $attributes["CanRetrieve"];
        $this->CanManageAllItems = $attributes["CanManageAllItems"];
        $this->CanManageMyItems = $attributes["CanManageMyItems"];
        $this->CanSeeEventLog = $attributes["CanSeeEventLog"];
        $this->CanViewFiles = $attributes["CanViewFiles"];
        $this->CanAddReviews = $attributes["CanAddReviews"];
        $this->CanDeleteReviews = $attributes["CanDeleteReviews"];
        $this->CanManageReviews = $attributes["CanManageReviews"];
        $this->CanClassify = $attributes["CanClassify"];
        $this->CanSeeAllHiddenObjects = $attributes["CanSeeAllHiddenObjects"];
        $this->CanPublish = $attributes["CanPublish"];
        $this->CanPublishOffline = $attributes["CanPublishOffline"];
        $this->CanSearch = $attributes["CanSearch"];
        $this->CanVersionMyItems = $attributes["CanVersionMyItems"];
        $this->CanViewMetadata = $attributes["CanViewMetadata"];
        $this->CanEditMetadata = $attributes["CanEditMetadata"];
        $this->CanManageRepositories = $attributes["CanManageRepositories"];
    }
}
