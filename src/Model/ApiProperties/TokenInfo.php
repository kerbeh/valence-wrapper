<?php
namespace ValenceWrapper\Model\TokenInfo;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#authentication
 */
class TokenInfo
{
    /**
     * @param Token
     * @type <string>
     */
    private $Token;


    /**
     * Constructor for TokenInfo
     */
    public function __construct(array $attributes = [])
    {
        $this->Token = $attributes["Token"];
    }
}
