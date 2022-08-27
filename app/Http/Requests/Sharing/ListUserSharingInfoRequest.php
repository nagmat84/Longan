<?php

namespace App\Http\Requests\Sharing;

use App\Http\Requests\BaseApiRequest;
use App\Http\Requests\Contracts\HasAlbumID;
use App\Http\Requests\Contracts\HasUserID;
use App\Http\Requests\Traits\HasAlbumIDTrait;
use App\Http\Requests\Traits\HasUserIDTrait;
use App\Models\User;
use App\Policies\UserPolicy;
use App\Rules\IntegerIDRule;
use App\Rules\RandomIDRule;
use Illuminate\Support\Facades\Gate;

class ListUserSharingInfoRequest extends BaseApiRequest implements HasAlbumID, HasUserID
{
	use HasAlbumIDTrait;
	use HasUserIDTrait;

	/**
	 * {@inheritDoc}
	 */
	public function authorize(): bool
	{
		return Gate::check(UserPolicy::CAN_UPLOAD, User::class);
	}

	/**
	 * {@inheritDoc}
	 */
	public function rules(): array
	{
		return [
			HasAlbumID::ALBUM_ID_ATTRIBUTE => [
				'sometimes',
				'required_without:' . HasUserID::USER_ID_ATTRIBUTE,
				new RandomIDRule(false),
			],
			HasUserID::USER_ID_ATTRIBUTE => [
				'sometimes',
				'required_without:' . HasAlbumID::ALBUM_ID_ATTRIBUTE,
				new IntegerIDRule(false),
			],
		];
	}

	/**
	 * {@inheritDoc}
	 */
	protected function processValidatedValues(array $values, array $files): void
	{
		$this->albumID = $values[HasAlbumID::ALBUM_ID_ATTRIBUTE] ?? null;
		$this->userID = $values[HasUserID::USER_ID_ATTRIBUTE] ?? null;
	}
}
