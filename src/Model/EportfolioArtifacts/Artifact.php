<?php
namespace ValenceWrapper\Model\Artifact;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * A basic Artifact EP object’s structure does not differ from the general form of the
 * EpObject, except it has an appropriate EPOBJ_T
 * value for the ObjectTypeId property ("<number:EPOBJ_T:Artifact>").
 * @see https://docs.valence.desire2learn.com#EP.Artifact
 */
class Artifact
{
	/**
	 * Constructor for Artifact
	 */
	public function __construct(array $attributes = [])
	{
	}
}
