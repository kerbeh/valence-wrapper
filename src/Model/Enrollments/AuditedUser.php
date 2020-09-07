<?php
namespace ValenceWrapper\Model\AuditedUser;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Auditors are users that have permission to audit the presence of other users
 * (auditees). In these structures, the properties AuditorId and AuditeeId are
 * actually just the User ID values for the users involved: we use the Auditor and
 * Auditee terms to make it clear which position the user occupies in this
 * relationship.
 * @see https://docs.valence.desire2learn.com#auditors
 */
class AuditedUser
{
    /**
     * @param AuditeeId
     * @type <number:D2LID>
     */
    private $AuditeeId;

    /**
     * @param DisplayName
     * @type <string>
     */
    private $DisplayName;


    /**
     * Constructor for AuditedUser
     */
    public function __construct(array $attributes = [])
    {
        $this->AuditeeId = $attributes["AuditeeId"];
        $this->DisplayName = $attributes["DisplayName"];
    }
}
