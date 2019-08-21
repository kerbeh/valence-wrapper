<?php
namespace ValenceWrapper\Model\FormArtifact;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * A FormArtifact EP object’s structure does not differ from the general form
 * of the EpObject, except it has an appropriate
 * EPOBJ_T value for the ObjectTypeId property ("<number:EPOBJ_T:FormArtifact>").
 * @see https://docs.valence.desire2learn.com#EP.FormArtifact
 */
class FormArtifact
{
	/**
	 * Constructor for FormArtifact
	 */
	public function __construct(array $attributes = [])
	{
	}
}
