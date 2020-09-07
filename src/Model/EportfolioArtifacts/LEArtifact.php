<?php
namespace ValenceWrapper\Model\LEArtifact;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * An LEArtifact EP object’s structure does not differ from the general form
 * of the EpObject, except it has an appropriate
 * EPOBJ_T value for the ObjectTypeId property ("<number:EPOBJ_T:LEArtifact>").
 * @see https://docs.valence.desire2learn.com#EP.LEArtifact
 */
class LEArtifact
{
    /**
     * Constructor for LEArtifact
     */
    public function __construct(array $attributes = [])
    {
    }
}
