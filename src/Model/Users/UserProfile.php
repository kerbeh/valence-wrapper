<?php
namespace ValenceWrapper\Model\UserProfile;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * This block contains a user’s personal profile data.
 * @see https://docs.valence.desire2learn.com#profiles
 */
class UserProfile
{
	/**
	 * @param Birthday
	 * @type {
	 */
	private $Birthday;

	/**
	 * @param Month
	 * @type <number>
	 */
	private $Month;

	/**
	 * @param Day
	 * @type <number>
	 */
	private $Day;

	/**
	 * @param Nickname
	 * @type <string>
	 */
	private $Nickname;

	/**
	 * @param HomeTown
	 * @type <string>
	 */
	private $HomeTown;

	/**
	 * @param Email
	 * @type <string>
	 */
	private $Email;

	/**
	 * @param HomePage
	 * @type <string>
	 */
	private $HomePage;

	/**
	 * @param HomePhone
	 * @type <string>
	 */
	private $HomePhone;

	/**
	 * @param BusinessPhone
	 * @type <string>
	 */
	private $BusinessPhone;

	/**
	 * @param MobilePhone
	 * @type <string>
	 */
	private $MobilePhone;

	/**
	 * @param FaxNumber
	 * @type <string>
	 */
	private $FaxNumber;

	/**
	 * @param Address1
	 * @type <string>
	 */
	private $Address1;

	/**
	 * @param Address2
	 * @type <string>
	 */
	private $Address2;

	/**
	 * @param City
	 * @type <string>
	 */
	private $City;

	/**
	 * @param Province
	 * @type <string>
	 */
	private $Province;

	/**
	 * @param PostalCode
	 * @type <string>
	 */
	private $PostalCode;

	/**
	 * @param Country
	 * @type <string>
	 */
	private $Country;

	/**
	 * @param Company
	 * @type <string>
	 */
	private $Company;

	/**
	 * @param JobTitle
	 * @type <string>
	 */
	private $JobTitle;

	/**
	 * @param HighSchool
	 * @type <string>
	 */
	private $HighSchool;

	/**
	 * @param University
	 * @type <string>
	 */
	private $University;

	/**
	 * @param Hobbies
	 * @type <string>
	 */
	private $Hobbies;

	/**
	 * @param FavMusic
	 * @type <string>
	 */
	private $FavMusic;

	/**
	 * @param FavTVShows
	 * @type <string>
	 */
	private $FavTVShows;

	/**
	 * @param FavMovies
	 * @type <string>
	 */
	private $FavMovies;

	/**
	 * @param FavBooks
	 * @type <string>
	 */
	private $FavBooks;

	/**
	 * @param FavQuotations
	 * @type <string>
	 */
	private $FavQuotations;

	/**
	 * @param FavWebSites
	 * @type <string>
	 */
	private $FavWebSites;

	/**
	 * @param FutureGoals
	 * @type <string>
	 */
	private $FutureGoals;

	/**
	 * @param FavMemory
	 * @type <string>
	 */
	private $FavMemory;

	/**
	 * @param ProfileIdentifier
	 * @type <string>
	 */
	private $ProfileIdentifier;


	/**
	 * Constructor for UserProfile
	 */
	public function __construct(array $attributes = [])
	{
		$this->Birthday = $attributes["Birthday"];
		$this->Month = $attributes["Month"];
		$this->Day = $attributes["Day"];
		$this->Nickname = $attributes["Nickname"];
		$this->HomeTown = $attributes["HomeTown"];
		$this->Email = $attributes["Email"];
		$this->HomePage = $attributes["HomePage"];
		$this->HomePhone = $attributes["HomePhone"];
		$this->BusinessPhone = $attributes["BusinessPhone"];
		$this->MobilePhone = $attributes["MobilePhone"];
		$this->FaxNumber = $attributes["FaxNumber"];
		$this->Address1 = $attributes["Address1"];
		$this->Address2 = $attributes["Address2"];
		$this->City = $attributes["City"];
		$this->Province = $attributes["Province"];
		$this->PostalCode = $attributes["PostalCode"];
		$this->Country = $attributes["Country"];
		$this->Company = $attributes["Company"];
		$this->JobTitle = $attributes["JobTitle"];
		$this->HighSchool = $attributes["HighSchool"];
		$this->University = $attributes["University"];
		$this->Hobbies = $attributes["Hobbies"];
		$this->FavMusic = $attributes["FavMusic"];
		$this->FavTVShows = $attributes["FavTVShows"];
		$this->FavMovies = $attributes["FavMovies"];
		$this->FavBooks = $attributes["FavBooks"];
		$this->FavQuotations = $attributes["FavQuotations"];
		$this->FavWebSites = $attributes["FavWebSites"];
		$this->FutureGoals = $attributes["FutureGoals"];
		$this->FavMemory = $attributes["FavMemory"];
		$this->ProfileIdentifier = $attributes["ProfileIdentifier"];
	}
}
