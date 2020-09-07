<?php
namespace ValenceWrapper\Model\UserActivationData;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#User.UserActivationData
 */
class UserActivationData
{
    /**
     * @param IsActive
     * @type <boolean>
     */
    private $IsActive;


    /**
     * Constructor for UserActivationData
     */
    public function __construct(array $attributes = [])
    {
        $this->IsActive = $attributes["IsActive"];
    }
}
