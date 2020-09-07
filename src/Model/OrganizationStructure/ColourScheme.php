<?php
namespace ValenceWrapper\Model\ColourScheme;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Fundamental information for an org unit as reported by org unit service actions.
 * @see https://docs.valence.desire2learn.com#org-units
 */
class ColourScheme
{
    /**
     * @param Dark
     * @type <string>
     */
    private $Dark;

    /**
     * @param Light
     * @type <string>
     */
    private $Light;

    /**
     * @param Soft
     * @type <string>
     */
    private $Soft;


    /**
     * Constructor for ColourScheme
     */
    public function __construct(array $attributes = [])
    {
        $this->Dark = $attributes["Dark"];
        $this->Light = $attributes["Light"];
        $this->Soft = $attributes["Soft"];
    }
}
