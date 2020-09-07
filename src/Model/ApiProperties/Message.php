<?php
namespace ValenceWrapper\Model\Message;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Possible values, to describe the various levels of log message
 * inspection. Each log level includes only logged events of that level, not
 * events of any other level as well. We use the term LOGLEVEL_T to stand
 * in for an appropriate value.
 * @see https://docs.valence.desire2learn.com#logging
 */
class Message
{
    /**
     * @param LogMessageId
     * @type <string>
     */
    private $LogMessageId;

    /**
     * @param LogLevel
     * @type <string:LOGLEVEL_T>
     */
    private $LogLevel;

    /**
     * @param MessageTimestamp
     * @type <string:UTCDateTime>
     */
    private $MessageTimestamp;

    /**
     * @param ExceptionMessage
     * @type <string>
     */
    private $ExceptionMessage;

    /**
     * @param MachineName
     * @type <string>
     */
    private $MachineName;

    /**
     * @param ProcessName
     * @type <string>
     */
    private $ProcessName;

    /**
     * @param ProcessStartTime
     * @type <string:UTCDateTime>
     */
    private $ProcessStartTime;

    /**
     * @param LoggerAssembly
     * @type <string>
     */
    private $LoggerAssembly;

    /**
     * @param LoggerType
     * @type <string>
     */
    private $LoggerType;

    /**
     * @param ExceptionStackTrace
     * @type <string>
     */
    private $ExceptionStackTrace;

    /**
     * @param ExceptionType
     * @type <string>
     */
    private $ExceptionType;

    /**
     * @param DeveloperMessage
     * @type <string>
     */
    private $DeveloperMessage;

    /**
     * @param StackTrace
     * @type <string>
     */
    private $StackTrace;

    /**
     * @param MessageGroupId
     * @type <number:D2LID>
     */
    private $MessageGroupId;

    /**
     * @param UserId
     * @type <number:D2LID>
     */
    private $UserId;

    /**
     * @param OrgId
     * @type <number:D2LID>
     */
    private $OrgId;

    /**
     * @param OrgUnitId
     * @type <number:D2LID>
     */
    private $OrgUnitId;


    /**
     * Constructor for Message
     */
    public function __construct(array $attributes = [])
    {
        $this->LogMessageId = $attributes["LogMessageId"];
        $this->LogLevel = $attributes["LogLevel"];
        $this->MessageTimestamp = $attributes["MessageTimestamp"];
        $this->ExceptionMessage = $attributes["ExceptionMessage"];
        $this->MachineName = $attributes["MachineName"];
        $this->ProcessName = $attributes["ProcessName"];
        $this->ProcessStartTime = $attributes["ProcessStartTime"];
        $this->LoggerAssembly = $attributes["LoggerAssembly"];
        $this->LoggerType = $attributes["LoggerType"];
        $this->ExceptionStackTrace = $attributes["ExceptionStackTrace"];
        $this->ExceptionType = $attributes["ExceptionType"];
        $this->DeveloperMessage = $attributes["DeveloperMessage"];
        $this->StackTrace = $attributes["StackTrace"];
        $this->MessageGroupId = $attributes["MessageGroupId"];
        $this->UserId = $attributes["UserId"];
        $this->OrgId = $attributes["OrgId"];
        $this->OrgUnitId = $attributes["OrgUnitId"];
    }
}
