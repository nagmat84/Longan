<?php

namespace App\Http\Requests\Contracts;

interface HasUserID
{
	public const USER_ID_ATTRIBUTE = 'userID';

	/**
	 * @return int|null
	 */
	public function userID(): ?int;
}
