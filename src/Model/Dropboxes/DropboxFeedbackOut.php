<?php
namespace ValenceWrapper\Model\DropboxFeedbackOut;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you use this API to retrieve the feedback information assigned to a
 * submission, you get an info block that lists the feedback information along
 * with any file attachments:
 * @see https://docs.valence.desire2learn.com#Dropbox.DropboxFeedbackOut
 * Note that these properties require a RichText object.
 *
 * If true, the feedback is in a graded state; otherwise, it’s still in
 * draft state.
 */
class DropboxFeedbackOut
{
	/**
	 * @param Feedback
	 * @type { <composite:RichText> }
	 */
	private $Feedback;

	/**
	 * @param Score
	 * @type <number:decimal>
	 */
	private $Score;

	/**
	 * @param IsGraded
	 * @type <boolean>
	 */
	private $IsGraded;


	/**
	 * Constructor for DropboxFeedbackOut
	 */
	public function __construct(array $attributes = [])
	{
		$this->Feedback = $attributes["Feedback"];
		$this->Score = $attributes["Score"];
		$this->IsGraded = $attributes["IsGraded"];
	}
}
