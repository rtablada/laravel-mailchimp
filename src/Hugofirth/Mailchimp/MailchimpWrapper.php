<?php namespace Hugofirth\Mailchimp;

use Mailchimp;

class MailchimpWrapper {

	/**
	 * Field is instance of class Mailchimp
	 *
	 * @var mc
	 */
	protected $mc;

	/**
	 * Constructor
	 *
	 * @param Mailchimp $mc
	 * @return void
	 */
	public function __construct(Mailchimp $mc)
	{
		$this->mc = $mc;
	}

	/**
	 * Accessor for all of the Mailchimp instance's properties as methods
	 *
	 * @param  string $name
	 * @param  array $arguments
	 * @return mixed
	 */
	public function __call($name, $arguments)
	{
		if (isset($this->mc->{$name})) {
			return $this->mc->{$name};
		}
	}

}
