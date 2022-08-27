<?php

namespace App\Http\Requests\Traits;

trait HasUserIDTrait
{
	/**
	 * @var int|null
	 */
	protected ?int $userID;

	/**
	 * @return int|null
	 */
	public function userID(): ?int
	{
		return $this->userID;
	}
}
