<?php
namespace ValenceWrapper\Model\Reflection;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * A Reflection EP object’s structure does not differ from the general form of
 * the EpObject, except it has an appropriate
 * EPOBJ_T value for the ObjectTypeId property ("<number:EPOBJ_T:Reflection>").
 * @see https://docs.valence.desire2learn.com#EP.Reflection
 */
class Reflection
{
	/**
	 * Constructor for Reflection
	 */
	public function __construct(array $attributes = [])
	{
	}
}
