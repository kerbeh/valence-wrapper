<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Checklists (Checklists, Categories, Checklist Items) — Developer Platform (September 2020)
 * @see https://docs.valence.desire2learn.com/res/checklist.html
 */
class Checklists
{
    /**
     * Delete an existing checklist in the specified org unit.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#delete--d2l-api-le-(version)-(orgUnitId)-checklists-(checklistId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $checklistId Checklist ID.
     */
    public function deleteChecklistsOrgUnitIdChecklistId($version, $orgUnitId, $checklistId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/$checklistId";
        return new Request('DELETE', $uri);
    }


    /**
     * Delete an existing checklist category in an existing checklist.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#delete--d2l-api-le-(version)-(orgUnitId)-checklists-(checklistId)-categories-(categoryId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $checklistId Checklist ID.
     * @param [D2LID] $categoryId Category ID.
     */
    public function deleteChecklistsCategoriesOrgUnitIdChecklistIdCategoryId($version, $orgUnitId, $checklistId, $categoryId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/$checklistId/categories/$categoryId";
        return new Request('DELETE', $uri);
    }


    /**
     * Delete an existing checklist item in an existing checklist.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#delete--d2l-api-le-(version)-(orgUnitId)-checklists-(checklistId)-items-(checklistItemId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $checklistId Checklist ID.
     * @param [D2LID] $checklistItemId Checklist Item ID.
     */
    public function deleteChecklistsItemsOrgUnitIdChecklistIdChecklistItemId($version, $orgUnitId, $checklistId, $checklistItemId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/$checklistId/items/$checklistItemId";
        return new Request('DELETE', $uri);
    }


    /**
     * Retrieve all checklists belonging to an org unit.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#get--d2l-api-le-(version)-(orgUnitId)-checklists-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of checklists belonging
     * to the org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getChecklistsOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all categories belonging to a checklist.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#get--d2l-api-le-(version)-(orgUnitId)-checklists-(checklistId)-categories-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of checklist categories belonging
     * to the checklist.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $checklistId Checklist ID.
     */
    public function getChecklistsCategoriesOrgUnitIdChecklistId($version, $orgUnitId, $checklistId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/$checklistId/categories/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all items belonging to a checklist.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#get--d2l-api-le-(version)-(orgUnitId)-checklists-(checklistId)-items-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of checklist items belonging
     * to the checklist.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $checklistId Checklist ID.
     */
    public function getChecklistsItemsOrgUnitIdChecklistId($version, $orgUnitId, $checklistId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/$checklistId/items/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a checklist belonging to an org unit.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#get--d2l-api-le-(version)-(orgUnitId)-checklists-(checklistId)
     * @return /PSR7 (Request)
     * Return. This action returns a Checklist.ChecklistReadData JSON block
     * containing the properties of your identified checklist category.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $checklistId Checklist ID.
     */
    public function getChecklistsOrgUnitIdChecklistId($version, $orgUnitId, $checklistId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/$checklistId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a category belonging to a checklist.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#get--d2l-api-le-(version)-(orgUnitId)-checklists-(checklistId)-categories-(categoryId)
     * @return /PSR7 (Request)
     * Return. This action returns a Checklist.ChecklistCategoryReadData JSON block
     * containing the properties of your identified checklist category.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $checklistId Checklist ID.
     * @param [D2LID] $categoryId CategoryId ID.
     */
    public function getChecklistsCategoriesOrgUnitIdChecklistIdCategoryId($version, $orgUnitId, $checklistId, $categoryId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/$checklistId/categories/$categoryId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve an item belonging to a checklist.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#get--d2l-api-le-(version)-(orgUnitId)-checklists-(checklistId)-items-(checklistItemId)
     * @return /PSR7 (Request)
     * Return. This action returns a Checklist.ChecklistItemReadData JSON block
     * containing the properties of your identified checklist item.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $checklistId Checklist ID.
     * @param [D2LID] $checklistItemId Checklist item ID.
     */
    public function getChecklistsItemsOrgUnitIdChecklistIdChecklistItemId($version, $orgUnitId, $checklistId, $checklistItemId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/$checklistId/items/$checklistItemId";
        return new Request('GET', $uri);
    }


    /**
     * Create a checklist in the specified org unit.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#post--d2l-api-le-(version)-(orgUnitId)-checklists-
     * @return /PSR7 (Request)
     * Return. This action returns a Checklist.ChecklistReadData JSON block
     * containing the properties of your created checklist.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [Checklist.ChecklistUpdateData] $checklistData Checklist data for a new checklist.
     */
    public function postChecklistsOrgUnitId($version, $orgUnitId, $checklistData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/";
        $body = $checklistData;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Create a checklist category in the specified checklist.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#post--d2l-api-le-(version)-(orgUnitId)-checklists-(checklistId)-categories-
     * @return /PSR7 (Request)
     * Return. This action returns a Checklist.ChecklistCategoryReadData JSON block
     * containing the properties of your created checklist category.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $checklistId Checklist ID.
     * @param [Checklist.ChecklistCategoryUpdateData] $checklistCategoryData Checklist category data for a new category.
     */
    public function postChecklistsCategoriesOrgUnitIdChecklistId($version, $orgUnitId, $checklistId, $checklistCategoryData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/$checklistId/categories/";
        $body = $checklistCategoryData;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Create a checklist item in the specified checklist.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#post--d2l-api-le-(version)-(orgUnitId)-checklists-(checklistId)-items-
     * @return /PSR7 (Request)
     * Return. This action returns a Checklist.ChecklistItemReadData JSON block
     * containing the properties of your created checklist item.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $checklistId Checklist ID.
     * @param [Checklist.ChecklistItemUpdateData] $checklistItemData Checklist item data for a new item.
     */
    public function postChecklistsItemsOrgUnitIdChecklistId($version, $orgUnitId, $checklistId, $checklistItemData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/$checklistId/items/";
        $body = $checklistItemData;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Update an existing checklist in the specified org unit.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#put--d2l-api-le-(version)-(orgUnitId)-checklists-(checklistId)
     * @return /PSR7 (Request)
     * Return. This action returns a Checklist.ChecklistReadData JSON block
     * containing the properties of the updated checklist.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $checklistId Checklist ID.
     * @param [Checklist.ChecklistUpdateData] $checklistData Updated checklist data for a new checklist.
     */
    public function putChecklistsOrgUnitIdChecklistId($version, $orgUnitId, $checklistId, $checklistData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/$checklistId";
        $body = $checklistData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update an existing checklist category in an existing checklist.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#put--d2l-api-le-(version)-(orgUnitId)-checklists-(checklistId)-categories-(categoryId)
     * @return /PSR7 (Request)
     * Return. This action returns a Checklist.ChecklistCategoryReadData JSON block
     * containing the properties of the updated checklist category.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $checklistId Checklist ID.
     * @param [D2LID] $categoryId Category ID.
     * @param [Checklist.ChecklistCategoryUpdateData] $checklistCategoryData Updated checklist category data for a new category.
     */
    public function putChecklistsCategoriesOrgUnitIdChecklistIdCategoryId($version, $orgUnitId, $checklistId, $categoryId, $checklistCategoryData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/$checklistId/categories/$categoryId";
        $body = $checklistCategoryData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update an existing checklist item in an existing checklist.
     * @see https://docs.valence.desire2learn.com/res/checklist.html#put--d2l-api-le-(version)-(orgUnitId)-checklists-(checklistId)-items-(checklistItemId)
     * @return /PSR7 (Request)
     * Return. This action returns a Checklist.ChecklistItemReadData JSON block
     * containing the properties of the updated checklist item.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $checklistId Checklist ID.
     * @param [D2LID] $checklistItemId Checklist Item ID.
     * @param [Checklist.ChecklistItemUpdateData] $checklistItemData Updated checklist item data for an existing item.
     */
    public function putChecklistsItemsOrgUnitIdChecklistIdChecklistItemId($version, $orgUnitId, $checklistId, $checklistItemId, $checklistItemData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/checklists/$checklistId/items/$checklistItemId";
        $body = $checklistItemData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }
}
