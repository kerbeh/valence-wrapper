<?php

namespace ValenceWrapper\Model\Basic;

/**
 * Object to define a {<composite:RichTextInput>} field in a JSON example
 * Defines the Type of text, either Plain or HTML and the text itself
 * @url https://docs.valence.desire2learn.com/basic/conventions.html#term-richtextinput
 * @author ktrist
 */
class RichTextInput {

    /**
     * Const for content type Html
     */
    const HTML = "Html";

    /**
     * Const for content type Html
     */
    const TEXT = "Text";

    /**
     * The textual content of the input either as Html or Plain text
     * @var String
     */
    private $content;

    /**
     * The type of the content either HTML:Text
     * @var String
     */
    private $type;

    /**
     * Set the content and content type if supplied or set as blank text
     * @param type $content
     * @param type $type
     */
    public function __construct($content, $type) {

        $dfaultType = self::TEXT;

        $this->content = (!empty($content)) ? $content : "";
        (!empty($type)) ? $this->setType($type) : $this->setType($dfaultType);
    }

    public function getContent() {
        return $this->content;
    }

    public function getType() {
        return $this->type;
    }

    /**
     * Checks if the content matches the declared type and assigns the content
     * Throws error is there is a mismatch
     * @param String $content
     * @throws Exception
     */
    private function setContent($content) {

        if ($this->type == HTML && ($content != strip_tags($content) ? true : false) == true) {
            $this->content = $content;
        } else {
            throw new Exception("Content is not HTML or type is not valid");
        }


        if ($this->type == Text && ($content != strip_tags($content) ? true : false) == false) {
            $this->content = $content;
        } else {
            throw new Exception("Content is not Plain Text or tpye is not valid");
        }


        $this->content = $content;
    }

    /**
     * Sanitises the type and matches it to a const
     * Assigns type if there is a match.
     * Throws an error if an invalid type is declared.
     * @param String $type
     * @throws Exception
     */
    private function setType($type) {

        $lowerType = strtolower($type);

        switch ($lowerType) {
            case "text":
                $this->type = self::TEXT;
                break;
            case "html":
                $this->type = self::HTML;
                break;
            default:
                throw new Exception("$type is not valid for RichTextInput");
        }
    }

}
