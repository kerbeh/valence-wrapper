<?php
namespace ValenceWrapper\Model\CreateCopyJobRequest;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Course offering copy jobs can selectively copy distinct course
 * components. These string labels identify the various course components:
 * @see https://docs.valence.desire2learn.com#copying-courses
 *
 * If you provide a valid URL for this property, when the back-end service
 * completes its copy job, it will issue a POST with the provided URL
 * (including any query parameters you provided) with a
 * CopyJobComplete JSON block in the
 * posted body.
 * The back-end service expects that your service will respond to that POST
 * with a 200 OK, and respond in a timely fashion (by
 * default, five seconds or less).
 *
 *
 * DaysToOffsetDatesIf you provide a number (max: 5000) here, all the dates copied into your
 * destination course (e.g. due dates, start dates, and end dates on
 * activities such as quizzes) will be offset by the provided number of
 * days. Enter a positive integer to offset forward, and a negative integer
 * to offset backwards.
 * You cannot use this parameter at the same time as the
 * OffsetByStartDateDifference parameter; doing so will cause a
 * 400 Bad Request error.
 *
 * HoursToOffsetDatesIf you provide a decimal number (less than 24) here, all the dates copied
 * into your destination course (e.g. due dates, start dates, and end dates
 * on activities such as quizzes) will be offset by the provided number of
 * hours. Enter a positive number to offset forward, and negative to offset
 * backwards.
 * You cannot use this parameter at the same time as the
 * OffsetByStartDateDifference parameter; doing so will cause a
 * 400 Bad Request error.
 *
 * OffsetByStartDateDifferenceWhen true, the service will find the difference between the start date of
 * the source course (the course that is being copied from) and the start
 * date of the destination course (the course that is being copied to), and
 * offset all the dates copied into the destination course by that
 * difference:
 *
 * If the start date of the destination course is earlier than the start
 * date of the source course, the dates will be offset backwards.
 * If the start date of the destination course is later than the start
 * date of the source course, the dates will be offset forward.
 *
 * For example, copying from a course with a course start date of July 1,
 * 2018, at 9:00am into a course with a start date of July 3, 2018, at
 * 8:00am will offset all dates 2 days forward and 1 hour backwards.
 * You cannot use parameter cannot be used at the same time as the
 * DaysToOffsetDates or HoursToOffsetDates parameters; doing so will
 * cause a 400 Bad Request error.
 *
 *
 *
 * If you provide a number (max: 5000) here, all the dates copied into your
 * destination course (e.g. due dates, start dates, and end dates on
 * activities such as quizzes) will be offset by the provided number of
 * days. Enter a positive integer to offset forward, and a negative integer
 * to offset backwards.
 * You cannot use this parameter at the same time as the
 * OffsetByStartDateDifference parameter; doing so will cause a
 * 400 Bad Request error.
 *
 * If you provide a decimal number (less than 24) here, all the dates copied
 * into your destination course (e.g. due dates, start dates, and end dates
 * on activities such as quizzes) will be offset by the provided number of
 * hours. Enter a positive number to offset forward, and negative to offset
 * backwards.
 * You cannot use this parameter at the same time as the
 * OffsetByStartDateDifference parameter; doing so will cause a
 * 400 Bad Request error.
 *
 * When true, the service will find the difference between the start date of
 * the source course (the course that is being copied from) and the start
 * date of the destination course (the course that is being copied to), and
 * offset all the dates copied into the destination course by that
 * difference:
 *
 * If the start date of the destination course is earlier than the start
 * date of the source course, the dates will be offset backwards.
 * If the start date of the destination course is later than the start
 * date of the source course, the dates will be offset forward.
 *
 * For example, copying from a course with a course start date of July 1,
 * 2018, at 9:00am into a course with a start date of July 3, 2018, at
 * 8:00am will offset all dates 2 days forward and 1 hour backwards.
 * You cannot use parameter cannot be used at the same time as the
 * DaysToOffsetDates or HoursToOffsetDates parameters; doing so will
 * cause a 400 Bad Request error.
 */
class CreateCopyJobRequest
{
	/**
	 * @param SourceOrgUnitId
	 * @type <number:D2LID>
	 */
	private $SourceOrgUnitId;

	/**
	 * @param CallbackUrl
	 * @type <string>
	 */
	private $CallbackUrl;

	/**
	 * @param DaysToOffsetDates
	 * @type <number:integer>
	 */
	private $DaysToOffsetDates;

	/**
	 * @param HoursToOffsetDates
	 * @type <number:decimal>
	 */
	private $HoursToOffsetDates;

	/**
	 * @param OffsetByStartDateDifference
	 * @type <boolean>
	 */
	private $OffsetByStartDateDifference;


	/**
	 * Constructor for CreateCopyJobRequest
	 */
	public function __construct(array $attributes = [])
	{
		$this->SourceOrgUnitId = $attributes["SourceOrgUnitId"];
		$this->CallbackUrl = $attributes["CallbackUrl"];
		$this->DaysToOffsetDates = $attributes["DaysToOffsetDates"];
		$this->HoursToOffsetDates = $attributes["HoursToOffsetDates"];
		$this->OffsetByStartDateDifference = $attributes["OffsetByStartDateDifference"];
	}
}
