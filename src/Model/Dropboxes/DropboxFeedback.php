<?php
namespace ValenceWrapper\Model\DropboxFeedback;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you use this API to post feedback against a submission, you provide a
 * feedback block without file attachments, and then use the API to upload files
 * to the existing feedback ID:
 * @see https://docs.valence.desire2learn.com#Dropbox.DropboxFeedback
 * Note that these properties require a RichText object.
 *
 * If true, the feedback is in a graded state; otherwise, it’s still in draft
 * state. Once feedback moves from the draft to graded state, and this
 * property gets set to true, it’s inadvisable to set it back to false.
 */
class DropboxFeedback
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
	 * Constructor for DropboxFeedback
	 */
	public function __construct(array $attributes = [])
	{
		$this->Feedback = $attributes["Feedback"];
		$this->Score = $attributes["Score"];
		$this->IsGraded = $attributes["IsGraded"];
	}
}
