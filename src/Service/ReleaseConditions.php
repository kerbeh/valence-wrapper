<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Release Conditions — Developer Platform (September 2020)
 * @see https://docs.valence.desire2learn.com/res/releaseconditions.html
 */
class ReleaseConditions
{
    /**
     * Retrieve the conditions on a target in the org unit.
     * @see https://docs.valence.desire2learn.com/res/releaseconditions.html#get--d2l-api-lp-(version)-(orgUnitId)-conditionalRelease-conditions-(targetType)-(targetId)
     * @return /PSR7 (Request)
     * Return. This action returns a ConditionsData
     * JSON structure representing the conditions on the target. When the target
     * has no conditions, the ExpressionData will be
     * present but its Operands will be empty.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [TARGET_T] $targetType Target type.
     * @param [D2LID] $targetId Target ID.
     */
    public function getConditionalreleaseConditionsOrgUnitIdTargetTypeTargetId($version, $orgUnitId, $targetType, $targetId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/conditionalRelease/conditions/$targetType/$targetId";
        return new Request('GET', $uri);
    }


    /**
     * Replace the conditions on a target in the org unit.
     * @see https://docs.valence.desire2learn.com/res/releaseconditions.html#put--d2l-api-lp-(version)-(orgUnitId)-conditionalRelease-conditions-(targetType)-(targetId)
     * @return /PSR7 (Request)
     * Input. Provide a ConditionsData JSON
     * structure specifying the desired conditions on the target. When modifying
     * existing condition structures, you should include
     * the retrieved State property with your modifications. When modifying or
     * adding condition structures, you may omit the
     * Text property (it is ignored). To remove all of the conditions from the
     * target, specify a ExpressionData structure
     * containing an empty Operands property.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [TARGET_T] $targetType Target type.
     * @param [D2LID] $targetId Target ID.
     * @param [ConditionsData] $conditionsData Updated conditions.
     */
    public function putConditionalreleaseConditionsOrgUnitIdTargetTypeTargetId($version, $orgUnitId, $targetType, $targetId, $conditionsData)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/conditionalRelease/conditions/$targetType/$targetId";
        $body = $conditionsData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }
}
