<?php
namespace ValenceWrapper\Model\CreditSummary;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you use an action that returns the credit summary by Award Type,
 * the service returns a block like this:
 * @see https://docs.valence.desire2learn.com#credits
 */
class CreditSummary
{
	/**
	 * @param BadgeCreditSummary
	 * @type <number:decimal>
	 */
	private $BadgeCreditSummary;

	/**
	 * @param CertificateCreditSummary
	 * @type <number:decimal>
	 */
	private $CertificateCreditSummary;


	/**
	 * Constructor for CreditSummary
	 */
	public function __construct(array $attributes = [])
	{
		$this->BadgeCreditSummary = $attributes["BadgeCreditSummary"];
		$this->CertificateCreditSummary = $attributes["CertificateCreditSummary"];
	}
}
