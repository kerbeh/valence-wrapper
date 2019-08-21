<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Configuration variables — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/config.html
 */
class ConfigurationVariables
{
	/**
	 * Retrieve the definitions for all the configuration variables the user has
	 * access to view.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-definitions-
	 * @return /PSR7 (Request)
	 */
	public function getConfigvariablesDefinitions($version, $bookmark = null, $search = null)
	{
		$queryParrams = [
		                    "search" => $search,                    "bookmark" => $bookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/definitions/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the definitions for a configuration variable.
	 *
	 * Return. This action returns a Definition
	 * JSON block, containing the definition of the provided configuration variable.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $variableId Configuration variable ID.
	 * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-definition
	 * @return /PSR7 (Request)
	 */
	public function getConfigvariablesDefinition($version, $variableId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/$variableId/definition", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the value summary for a configuration variable.
	 *
	 * Return. This action returns a Values
	 * JSON block, containing the current value state for the provided configuration
	 * variable.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $variableId Configuration variable ID.
	 * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-values
	 * @return /PSR7 (Request)
	 */
	public function getConfigvariablesValues($version, $variableId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/$variableId/values", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the current org value for a configuration variable.
	 *
	 * Return. This action returns a OrgValue
	 * JSON block, containing the current org value for the provided configuration variable.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $variableId Configuration variable ID.
	 * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-values-org
	 * @return /PSR7 (Request)
	 */
	public function getConfigvariablesValuesOrg($version, $variableId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/$variableId/values/org", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve an org unit override value for a configuration variable.
	 *
	 * Return. This action returns an OrgUnitValue JSON block, containing an org unit override
	 * value for the provided configuration variable.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $variableId Configuration variable ID.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-values-orgUnits-(orgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function getConfigvariablesValuesOrgunits($version, $variableId, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/$variableId/values/orgUnits/$orgUnitId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the effective value for a configuration variable within an org unit.
	 *
	 * Return. This action returns an OrgUnitValue JSON block, containing an org unit effective
	 * value for the provided configuration variable.
	 * Effective value takes into account that when the value is not set at the OrgUnit level, then it checks the Org level, and then the System level.
	 * It also takes into account the Resolver resolution strategy if applicable.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $variableId Configuration variable ID.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-effectiveValues-orgUnits-(orgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function getConfigvariablesEffectivevaluesOrgunits($version, $variableId, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/$variableId/effectiveValues/orgUnits/$orgUnitId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a role override value for a configuration variable.
	 *
	 * Return. This action returns a RoleValue JSON block, containing a role override value for
	 * the provided configuration variable.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $variableId Configuration variable ID.
	 * @param [D2LID] $roleId Role ID.
	 * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-values-roles-(roleId)
	 * @return /PSR7 (Request)
	 */
	public function getConfigvariablesValuesRoles($version, $variableId, $roleId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/$variableId/values/roles/$roleId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the current system value for a configuration variable.
	 *
	 * Return. This action returns a SystemValue
	 * JSON block, containing the current system value for the provided configuration variable.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $variableId Configuration variable ID.
	 * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-values-system
	 * @return /PSR7 (Request)
	 */
	public function getConfigvariablesValuesSystem($version, $variableId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/$variableId/values/system", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Set a new org value for a configuration variable.
	 *
	 * Input. The new org value will now override the variable’s system value.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $variableId Configuration variable ID.
	 * @param [ConfigVariable.ConfigOrgValue] $orgValue New org value for configuration variable.
	 * @see https://docs.valence.desire2learn.com/res/config.html#put--d2l-api-lp-(version)-configVariables-(variableId)-values-org
	 * @return /PSR7 (Request)
	 */
	public function putConfigvariablesValuesOrg($version, $variableId, $orgValue)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/$variableId/values/org", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Set a new org unit override value for a configuration variable.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $variableId Configuration variable ID.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [ConfigVariable.SpecifiedOrgUnitValue] $orgUnitValue New org unit override value for configuration variable.
	 * @see https://docs.valence.desire2learn.com/res/config.html#put--d2l-api-lp-(version)-configVariables-(variableId)-values-orgUnits-(orgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function putConfigvariablesValuesOrgunits($version, $variableId, $orgUnitId, $orgUnitValue)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/$variableId/values/orgUnits/$orgUnitId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Set a new role override value for a configuration variable.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $variableId Configuration variable ID.
	 * @param [D2LID] $roleId Role ID.
	 * @param [ConfigVariable.SpecifiedRoleValue] $roleValue New role override value for configuration variable.
	 * @see https://docs.valence.desire2learn.com/res/config.html#put--d2l-api-lp-(version)-configVariables-(variableId)-values-roles-(roleId)
	 * @return /PSR7 (Request)
	 */
	public function putConfigvariablesValuesRoles($version, $variableId, $roleId, $roleValue)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/$variableId/values/roles/$roleId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Set a new system value for a configuration variable.
	 *
	 * Input. The new system value will now override the variable’s default value.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $variableId Configuration variable ID.
	 * @param [ConfigVariable.ConfigSystemValue] $systemValue New system value for configuration variable.
	 * @see https://docs.valence.desire2learn.com/res/config.html#put--d2l-api-lp-(version)-configVariables-(variableId)-values-system
	 * @return /PSR7 (Request)
	 */
	public function putConfigvariablesValuesSystem($version, $variableId, $systemValue)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/$variableId/values/system", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Restore the default resolution strategy for an org unit configuration variable.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $variableId Configuration variable ID.
	 * @see https://docs.valence.desire2learn.com/res/config.html#delete--d2l-api-lp-(version)-configVariables-(variableId)-resolver
	 * @return /PSR7 (Request)
	 */
	public function deleteConfigvariablesResolver($version, $variableId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/$variableId/resolver", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the resolution strategy for an org unit configuration variable.
	 *
	 * Returns. This action returns a ResolverValue JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $variableId Configuration variable ID.
	 * @see https://docs.valence.desire2learn.com/res/config.html#get--d2l-api-lp-(version)-configVariables-(variableId)-resolver
	 * @return /PSR7 (Request)
	 */
	public function getConfigvariablesResolver($version, $variableId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/$variableId/resolver", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Update the resolution strategy for an org unit configuration variable.
	 *
	 * Input. Note that the provided ResolverValue
	 * JSON block replaces the configuration variable’s resolver strategy.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $variableId Configuration variable ID.
	 * @param [ConfigVariable.ResolverValue] $resolverValue New resolution strategy.
	 * @see https://docs.valence.desire2learn.com/res/config.html#put--d2l-api-lp-(version)-configVariables-(variableId)-resolver
	 * @return /PSR7 (Request)
	 */
	public function putConfigvariablesResolver($version, $variableId, $resolverValue)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/configVariables/$variableId/resolver", 'PUT');
		return new Request('GET', $uri);
	}
}
