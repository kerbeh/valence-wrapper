<?php
namespace ValenceWrapper\Model\GroupLocker;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#Locker.GroupLocker
 */
class GroupLocker
{
	/**
	 * @param HasLocker
	 * @type <boolean>
	 */
	private $HasLocker;


	/**
	 * Constructor for GroupLocker
	 */
	public function __construct(array $attributes = [])
	{
		$this->HasLocker = $attributes["HasLocker"];
	}
}
