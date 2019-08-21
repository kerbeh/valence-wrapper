<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Demographics (data types, fields, users and org units) — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/demographics.html
 */
class Demographics
{
	/**
	 * Delete one or more of a particular user’s associated demographics entries.
	 *
	 * Input. You can use this action in two ways:
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/demographics.html#delete--d2l-api-lp-(version)-demographics-users-(userId)
	 * @return /PSR7 (Request)
	 */
	public function deleteDemographicsUsers($version, $userId, $entryIds = null)
	{
		$queryParrams = [
		                    "entryIds" => $entryIds

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/demographics/users/$userId?$queryString", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the demographics entries for a specific user within a particular
	 * org unit.
	 *
	 * Input. This action retrieves all the demographics entries for a user
	 * within a particular org unit. You can use the fieldIds query parameter to
	 * further filter the results and restrict them to only those entries that match
	 * your list of specific demographics fields (identified by field ID).
	 *
	 * Return. This action returns a
	 * DemographicsUserEntryData
	 * JSON block containing all the matching demographics entries for your query.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/demographics.html#get--d2l-api-lp-(version)-demographics-orgUnits-(orgUnitId)-users-(userId)
	 * @return /PSR7 (Request)
	 */
	public function getDemographicsOrgunitsUsers($version, $orgUnitId, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/demographics/orgUnits/$orgUnitId/users/$userId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the demographics entries for a single user.
	 *
	 * Input. This action retrieves all the demographics entries for a user
	 * across all the user’s org unit enrollments. You can use the fieldIds query
	 * parameter to further filter the results and restrict them to only those
	 * entries that match your list of specific demographics fields (identified by
	 * field ID).
	 *
	 * Return. This action returns a
	 * DemographicsUserEntryData
	 * JSON block containing all the matching demographics entries for your query.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/demographics.html#get--d2l-api-lp-(version)-demographics-users-(userId)
	 * @return /PSR7 (Request)
	 */
	public function getDemographicsUsers($version, $userId, $bookmark = null)
	{
		$queryParrams = [
		                    "bookmark" => $bookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/demographics/users/$userId?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Update the demographics entries for a single user.
	 *
	 * Input. This action uses your provided block’s data to replace all the
	 * user’s demographics entries; therefore, we recommend that you first fetch all
	 * the entries for the user so you can be sure to update the complete set of
	 * entries.
	 *
	 * Return. This action returns a
	 * DemographicsUserEntryData
	 * JSON block containing the user’s updated entries.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @param [Demographics.DemographicsEntryData] $demographicsEntryData Updated demographics entry data for user.
	 * @see https://docs.valence.desire2learn.com/res/demographics.html#put--d2l-api-lp-(version)-demographics-users-(userId)
	 * @return /PSR7 (Request)
	 */
	public function putDemographicsUsers($version, $userId, $demographicsEntryData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/demographics/users/$userId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a single demographic field, provided it has no associated entries.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $fieldId Field ID.
	 * @see https://docs.valence.desire2learn.com/res/demographics.html#delete--d2l-api-lp-(version)-demographics-fields-(fieldId)
	 * @return /PSR7 (Request)
	 */
	public function deleteDemographicsFields($version, $fieldId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/demographics/fields/$fieldId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a single demographic field.
	 *
	 * Return. This action returns the fetch form of a
	 * DemographicsField JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $fieldId Field ID.
	 * @see https://docs.valence.desire2learn.com/res/demographics.html#get--d2l-api-lp-(version)-demographics-fields-(fieldId)
	 * @return /PSR7 (Request)
	 */
	public function getDemographicsFields($version, $fieldId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/demographics/fields/$fieldId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new demographic field.
	 *
	 * Return. This action returns the fetch form of a
	 * DemographicsField JSON block
	 * containing the data for the newly created field.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [Demographics.DemographicsField] $demographicsField New demographics field properties.
	 * @see https://docs.valence.desire2learn.com/res/demographics.html#post--d2l-api-lp-(version)-demographics-fields-
	 * @return /PSR7 (Request)
	 */
	public function postDemographicsFields($version, $demographicsField)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/demographics/fields/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update a single demographic field.
	 *
	 * Return. This action returns the fetch form of a
	 * DemographicsField JSON block
	 * containing the data for the newly updated field.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $fieldId Field ID.
	 * @param [Demographics.DemographicsField] $demographicsField Updated demographics field properties.
	 * @see https://docs.valence.desire2learn.com/res/demographics.html#put--d2l-api-lp-(version)-demographics-fields-(fieldId)
	 * @return /PSR7 (Request)
	 */
	public function putDemographicsFields($version, $fieldId, $demographicsField)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/demographics/fields/$fieldId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a single demographic data type.
	 *
	 * Return. This action returns a DemographicsDataType
	 * JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $dataTypeId Data Type ID.
	 * @see https://docs.valence.desire2learn.com/res/demographics.html#get--d2l-api-lp-(version)-demographics-dataTypes-(dataTypeId)
	 * @return /PSR7 (Request)
	 */
	public function getDemographicsDatatypes($version, $dataTypeId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/demographics/dataTypes/$dataTypeId", 'GET');
		return new Request('GET', $uri);
	}
}
