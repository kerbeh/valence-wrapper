<?php
namespace ValenceWrapper\Model\Comment;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Users can attach comments to EP objects. The service provides them to clients
 * like this:
 * @see https://docs.valence.desire2learn.com#EP.Comment
 */
class Comment
{
    /**
     * @param ObjectId
     * @type <number:D2LID>
     */
    private $ObjectId;

    /**
     * @param CommentId
     * @type <number:D2LID>
     */
    private $CommentId;

    /**
     * @param UserId
     * @type <number:D2LID>
     */
    private $UserId;

    /**
     * @param CreatedDate
     * @type <string:UTCDateTime>
     */
    private $CreatedDate;

    /**
     * @param Body
     * @type <string>
     */
    private $Body;


    /**
     * Constructor for Comment
     */
    public function __construct(array $attributes = [])
    {
        $this->ObjectId = $attributes["ObjectId"];
        $this->CommentId = $attributes["CommentId"];
        $this->UserId = $attributes["UserId"];
        $this->CreatedDate = $attributes["CreatedDate"];
        $this->Body = $attributes["Body"];
    }
}
