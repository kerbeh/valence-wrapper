<?php
namespace ValenceWrapper\Model\Configuration;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you use an action that requests configuration details, the service
 * returns a block like this:
 * @see https://docs.valence.desire2learn.com#configuration
 */
class Configuration
{
	/**
	 * @param Permissions
	 * @type {
	 */
	private $Permissions;

	/**
	 * @param SeeAwards
	 * @type <boolean>
	 */
	private $SeeAwards;

	/**
	 * @param EarnAwards
	 * @type <boolean>
	 */
	private $EarnAwards;

	/**
	 * @param AssociateAwards
	 * @type <boolean>
	 */
	private $AssociateAwards;

	/**
	 * @param IssueAwards
	 * @type <boolean>
	 */
	private $IssueAwards;

	/**
	 * @param RevokeIssuedAwards
	 * @type <boolean>
	 */
	private $RevokeIssuedAwards;

	/**
	 * @param ManageMyAwards
	 * @type <boolean>
	 */
	private $ManageMyAwards;

	/**
	 * @param ManageAllAwards
	 * @type <boolean>
	 */
	private $ManageAllAwards;

	/**
	 * @param SeeBadges
	 * @type <boolean>
	 */
	private $SeeBadges;

	/**
	 * @param AssociateBadges
	 * @type <boolean>
	 */
	private $AssociateBadges;

	/**
	 * @param EarnBadges
	 * @type <boolean>
	 */
	private $EarnBadges;

	/**
	 * @param IssueBadges
	 * @type <boolean>
	 */
	private $IssueBadges;

	/**
	 * @param RevokeIssuedBadges
	 * @type <boolean>
	 */
	private $RevokeIssuedBadges;

	/**
	 * @param ManageMyBadges
	 * @type <boolean>
	 */
	private $ManageMyBadges;

	/**
	 * @param ManageAllBadges
	 * @type <boolean>
	 */
	private $ManageAllBadges;

	/**
	 * @param SeeCertificates
	 * @type <boolean>
	 */
	private $SeeCertificates;

	/**
	 * @param AssociateCertificates
	 * @type <boolean>
	 */
	private $AssociateCertificates;

	/**
	 * @param EarnCertificates
	 * @type <boolean>
	 */
	private $EarnCertificates;

	/**
	 * @param IssueCertificates
	 * @type <boolean>
	 */
	private $IssueCertificates;

	/**
	 * @param RevokeIssuedCertificates
	 * @type <boolean>
	 */
	private $RevokeIssuedCertificates;

	/**
	 * @param ManageMyCertificates
	 * @type <boolean>
	 */
	private $ManageMyCertificates;

	/**
	 * @param ManageAllCertificates
	 * @type <boolean>
	 */
	private $ManageAllCertificates;

	/**
	 * @param ManageLibraryIcons
	 * @type <boolean>
	 */
	private $ManageLibraryIcons;

	/**
	 * @param ManageLibraryCertificateTemplates
	 * @type <boolean>
	 */
	private $ManageLibraryCertificateTemplates;

	/**
	 * @param DownloadOtherUsersCertificates
	 * @type <boolean>
	 */
	private $DownloadOtherUsersCertificates;

	/**
	 * @param DefaultIssuerName
	 * @type <string>
	 */
	private $DefaultIssuerName;

	/**
	 * @param DefaultIssuerUrl
	 * @type <string>
	 */
	private $DefaultIssuerUrl;

	/**
	 * @param DefaultIssuerContact
	 * @type <string>
	 */
	private $DefaultIssuerContact;

	/**
	 * @param D2LProfileIntegrationEnabled
	 * @type <boolean>
	 */
	private $D2LProfileIntegrationEnabled;

	/**
	 * @param IconCreationUrl
	 * @type <string>
	 */
	private $IconCreationUrl;

	/**
	 * @param DefaultClasslistSortField
	 * @type <string>
	 */
	private $DefaultClasslistSortField;

	/**
	 * @param DefaultClasslistSortAscending
	 * @type <boolean>
	 */
	private $DefaultClasslistSortAscending;

	/**
	 * @param UserTimezone
	 * @type <string>
	 */
	private $UserTimezone;


	/**
	 * Constructor for Configuration
	 */
	public function __construct(array $attributes = [])
	{
		$this->Permissions = $attributes["Permissions"];
		$this->SeeAwards = $attributes["SeeAwards"];
		$this->EarnAwards = $attributes["EarnAwards"];
		$this->AssociateAwards = $attributes["AssociateAwards"];
		$this->IssueAwards = $attributes["IssueAwards"];
		$this->RevokeIssuedAwards = $attributes["RevokeIssuedAwards"];
		$this->ManageMyAwards = $attributes["ManageMyAwards"];
		$this->ManageAllAwards = $attributes["ManageAllAwards"];
		$this->SeeBadges = $attributes["SeeBadges"];
		$this->AssociateBadges = $attributes["AssociateBadges"];
		$this->EarnBadges = $attributes["EarnBadges"];
		$this->IssueBadges = $attributes["IssueBadges"];
		$this->RevokeIssuedBadges = $attributes["RevokeIssuedBadges"];
		$this->ManageMyBadges = $attributes["ManageMyBadges"];
		$this->ManageAllBadges = $attributes["ManageAllBadges"];
		$this->SeeCertificates = $attributes["SeeCertificates"];
		$this->AssociateCertificates = $attributes["AssociateCertificates"];
		$this->EarnCertificates = $attributes["EarnCertificates"];
		$this->IssueCertificates = $attributes["IssueCertificates"];
		$this->RevokeIssuedCertificates = $attributes["RevokeIssuedCertificates"];
		$this->ManageMyCertificates = $attributes["ManageMyCertificates"];
		$this->ManageAllCertificates = $attributes["ManageAllCertificates"];
		$this->ManageLibraryIcons = $attributes["ManageLibraryIcons"];
		$this->ManageLibraryCertificateTemplates = $attributes["ManageLibraryCertificateTemplates"];
		$this->DownloadOtherUsersCertificates = $attributes["DownloadOtherUsersCertificates"];
		$this->DefaultIssuerName = $attributes["DefaultIssuerName"];
		$this->DefaultIssuerUrl = $attributes["DefaultIssuerUrl"];
		$this->DefaultIssuerContact = $attributes["DefaultIssuerContact"];
		$this->D2LProfileIntegrationEnabled = $attributes["D2LProfileIntegrationEnabled"];
		$this->IconCreationUrl = $attributes["IconCreationUrl"];
		$this->DefaultClasslistSortField = $attributes["DefaultClasslistSortField"];
		$this->DefaultClasslistSortAscending = $attributes["DefaultClasslistSortAscending"];
		$this->UserTimezone = $attributes["UserTimezone"];
	}
}
