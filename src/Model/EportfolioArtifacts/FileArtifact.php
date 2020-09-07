<?php
namespace ValenceWrapper\Model\FileArtifact;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * A FileArtifact EP object’s structure differs in two ways from the general
 * form of the EpObject data block:
 * @see https://docs.valence.desire2learn.com#EP.FileArtifact
 */
class FileArtifact
{
    /**
     * @param FileSize
     * @type <number>
     */
    private $FileSize;

    /**
     * @param FileName
     * @type <string>
     */
    private $FileName;

    /**
     * @param Extension
     * @type <string>
     */
    private $Extension;

    /**
     * @param UploadKey
     * @type <string>
     */
    private $UploadKey;


    /**
     * Constructor for FileArtifact
     */
    public function __construct(array $attributes = [])
    {
        $this->FileSize = $attributes["FileSize"];
        $this->FileName = $attributes["FileName"];
        $this->Extension = $attributes["Extension"];
        $this->UploadKey = $attributes["UploadKey"];
    }
}
