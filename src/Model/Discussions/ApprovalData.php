<?php
namespace ValenceWrapper\Model\ApprovalData;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Posts can be either a thread (a post directly under a topic), or a simple post
 * in reply to another post (including a thread). Posts and threads have the same
 * properties and representations, and the term post will be used to refer to both.
 * @see https://docs.valence.desire2learn.com#posts
 */
class ApprovalData
{
	/**
	 * @param IsApproved
	 * @type <boolean>
	 */
	private $IsApproved;


	/**
	 * Constructor for ApprovalData
	 */
	public function __construct(array $attributes = [])
	{
		$this->IsApproved = $attributes["IsApproved"];
	}
}
