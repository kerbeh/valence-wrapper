<?php
namespace ValenceWrapper\Model\LearningObjective;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * A Learning Objective EP object’s structure does not differ from the general
 * form of the EpObject, except it has an appropriate
 * EPOBJ_T value for the ObjectTypeId property
 * ("<number:EPOBJ_T:LearningObjective>").
 * @see https://docs.valence.desire2learn.com#EP.LearningObjective
 */
class LearningObjective
{
	/**
	 * Constructor for LearningObjective
	 */
	public function __construct(array $attributes = [])
	{
	}
}
