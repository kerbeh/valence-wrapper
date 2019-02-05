<?php

namespace ValenceWrapper\Model\Basic;

use ValenceWrapper\Model\BaseValenceModel;

/**
 * Object to define a {<composite:RichText>} field
 * Immutable representation of Html and Sanatized Rich Text equivalent.
 * Only used for API responses for requests use RichTextInput
 * @url https://docs.valence.desire2learn.com/basic/conventions.html?highlight=richtext%20input#commonly-used-fields
 * @author ktrist
 */
class RichText extends BaseValenceModel {

    protected $text;
    protected $html;

    /**
     * Setup a Ruch Text Object
     * @param type $text
     * @param type $html
     */
    public function __construct(array $richtext = []) {

        $this->text = (!empty($richtext["Text"])) ? $richtext["Text"] : "";
        $this->html = (!empty($richtext["Html"])) ? $richtext["Html"] : NULL;
    }

    public function getText() {
        return $this->text;
    }

    public function getHtml() {
        return $this->html;
    }

    public function toArray() {

        return [
            "Text" => $this->text,
            "Html" => $this->html
        ];
    }

}
