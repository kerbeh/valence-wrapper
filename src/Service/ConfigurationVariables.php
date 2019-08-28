<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Configuration variables — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/config.html
 */
class ConfigurationVariables
{
    /**
     * Retrieve the definitions for all the configuration variables the user has
     * access to view.
     * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-definitions-
     * @return /PSR7 (Request)
     * Input. You can use a bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following your bookmark.
     *
     * Return. This action returns a paged result set
     * containing the resulting Definition
     * data blocks for the segment following your bookmark parameter (or the first
     * segment, if the parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $search Optional. Case-insensitive search string to match against the full Name of a configuration variable.
     * search
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getConfigvariablesDefinitions($version, $search = null, $bookmark = null)
    {
        $queryParrams = [
                            "search" => $search,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/configVariables/definitions/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the definitions for a configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-definition
     * @return /PSR7 (Request)
     * Return. This action returns a Definition
     * JSON block, containing the definition of the provided configuration variable.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     */
    public function getConfigvariablesDefinitionVariableId($version, $variableId)
    {
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/definition";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the value summary for a configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-values
     * @return /PSR7 (Request)
     * Return. This action returns a Values
     * JSON block, containing the current value state for the provided configuration
     * variable.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     */
    public function getConfigvariablesValuesVariableId($version, $variableId)
    {
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/values";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the current org value for a configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-values-org
     * @return /PSR7 (Request)
     * Return. This action returns a OrgValue
     * JSON block, containing the current org value for the provided configuration variable.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     */
    public function getConfigvariablesValuesOrgVariableId($version, $variableId)
    {
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/values/org";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the org unit override values for a configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-values-orgUnits-
     * @return /PSR7 (Request)
     * Input. You can use a bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following your bookmark.
     *
     * Return. This action returns a paged result set
     * containing the resulting OrgUnitValue
     * data blocks for the segment following your bookmark parameter (or the first
     * segment, if the parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getConfigvariablesValuesOrgunitsVariableId($version, $variableId, $bookmark = null)
    {
        $queryParrams = [
                            "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/values/orgUnits/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve an org unit override value for a configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-values-orgUnits-(orgUnitId)
     * @return /PSR7 (Request)
     * Return. This action returns an OrgUnitValue JSON block, containing an org unit override
     * value for the provided configuration variable.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getConfigvariablesValuesOrgunitsVariableIdOrgUnitId($version, $variableId, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/values/orgUnits/$orgUnitId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the effective value for a configuration variable within an org unit.
     * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-effectiveValues-orgUnits-(orgUnitId)
     * @return /PSR7 (Request)
     * Return. This action returns an OrgUnitValue JSON block, containing an org unit effective
     * value for the provided configuration variable.
     * Effective value takes into account that when the value is not set at the OrgUnit level, then it checks the Org level, and then the System level.
     * It also takes into account the Resolver resolution strategy if applicable.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getConfigvariablesEffectivevaluesOrgunitsVariableIdOrgUnitId($version, $variableId, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/effectiveValues/orgUnits/$orgUnitId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the role override values for a configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-values-roles-
     * @return /PSR7 (Request)
     * Input. You can use a bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following your bookmark.
     *
     * Return. This action returns a paged result set
     * containing the resulting RoleValue
     * data blocks for the segment following your bookmark parameter (or the first
     * segment, if the parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getConfigvariablesValuesRolesVariableId($version, $variableId, $bookmark = null)
    {
        $queryParrams = [
                            "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/values/roles/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a role override value for a configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-values-roles-(roleId)
     * @return /PSR7 (Request)
     * Return. This action returns a RoleValue JSON block, containing a role override value for
     * the provided configuration variable.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     * @param [D2LID] $roleId Role ID.
     */
    public function getConfigvariablesValuesRolesVariableIdRoleId($version, $variableId, $roleId)
    {
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/values/roles/$roleId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the current system value for a configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-values-system
     * @return /PSR7 (Request)
     * Return. This action returns a SystemValue
     * JSON block, containing the current system value for the provided configuration variable.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     */
    public function getConfigvariablesValuesSystemVariableId($version, $variableId)
    {
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/values/system";
        return new Request('GET', $uri);
    }


    /**
     * Set a new org value for a configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#put--d2l-api-lp-(version)-configVariables-(variableId)-values-org
     * @return /PSR7 (Request)
     * Input. The new org value will now override the variable’s system value.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     * @param [ConfigVariable.ConfigOrgValue] $orgValue New org value for configuration variable.
     */
    public function putConfigvariablesValuesOrgVariableId($version, $variableId, $orgValue)
    {
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/values/org";
        return new Request('GET', $uri);
    }


    /**
     * Set a new org unit override value for a configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#put--d2l-api-lp-(version)-configVariables-(variableId)-values-orgUnits-(orgUnitId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [ConfigVariable.SpecifiedOrgUnitValue] $orgUnitValue New org unit override value for configuration variable.
     */
    public function putConfigvariablesValuesOrgunitsVariableIdOrgUnitId($version, $variableId, $orgUnitId, $orgUnitValue)
    {
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/values/orgUnits/$orgUnitId";
        return new Request('GET', $uri);
    }


    /**
     * Set a new role override value for a configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#put--d2l-api-lp-(version)-configVariables-(variableId)-values-roles-(roleId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     * @param [D2LID] $roleId Role ID.
     * @param [ConfigVariable.SpecifiedRoleValue] $roleValue New role override value for configuration variable.
     */
    public function putConfigvariablesValuesRolesVariableIdRoleId($version, $variableId, $roleId, $roleValue)
    {
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/values/roles/$roleId";
        return new Request('GET', $uri);
    }


    /**
     * Set a new system value for a configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#put--d2l-api-lp-(version)-configVariables-(variableId)-values-system
     * @return /PSR7 (Request)
     * Input. The new system value will now override the variable’s default value.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     * @param [ConfigVariable.ConfigSystemValue] $systemValue New system value for configuration variable.
     */
    public function putConfigvariablesValuesSystemVariableId($version, $variableId, $systemValue)
    {
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/values/system";
        return new Request('GET', $uri);
    }


    /**
     * Restore the default resolution strategy for an org unit configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#delete--d2l-api-lp-(version)-configVariables-(variableId)-resolver
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     */
    public function deleteConfigvariablesResolverVariableId($version, $variableId)
    {
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/resolver";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the resolution strategy for an org unit configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-resolver
     * @return /PSR7 (Request)
     * Returns. This action returns a ResolverValue JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     */
    public function getConfigvariablesResolverVariableId($version, $variableId)
    {
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/resolver";
        return new Request('GET', $uri);
    }


    /**
     * Update the resolution strategy for an org unit configuration variable.
     * @see https://docs.valence.desire2learn.com/res/config.html#put--d2l-api-lp-(version)-configVariables-(variableId)-resolver
     * @return /PSR7 (Request)
     * Input. Note that the provided ResolverValue
     * JSON block replaces the configuration variable’s resolver strategy.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $variableId Configuration variable ID.
     * @param [ConfigVariable.ResolverValue] $resolverValue New resolution strategy.
     */
    public function putConfigvariablesResolverVariableId($version, $variableId, $resolverValue)
    {
        $uri = "/d2l/api/lp/$version/configVariables/$variableId/resolver";
        return new Request('GET', $uri);
    }
}
