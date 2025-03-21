<?php

/**
 * We don't care for unhandled exceptions in tests.
 * It is the nature of a test to throw an exception.
 * Without this suppression we had 100+ Linter warning in this file which
 * don't help anything.
 *
 * @noinspection PhpDocMissingThrowsInspection
 * @noinspection PhpUnhandledExceptionInspection
 */

namespace Tests\Feature\Lib;

use Illuminate\Testing\TestResponse;
use Tests\Feature\Traits\CatchFailures;
use Tests\TestCase;

class SessionUnitTest
{
	use CatchFailures;

	private TestCase $testCase;

	public function __construct(TestCase $testCase)
	{
		$this->testCase = $testCase;
	}

	/**
	 * Logging in.
	 *
	 * @param string      $username
	 * @param string      $password
	 * @param int         $expectedStatusCode
	 * @param string|null $assertSee
	 *
	 * @return TestResponse
	 */
	public function login(
		string $username,
		string $password,
		int $expectedStatusCode = 204,
		?string $assertSee = null
	): TestResponse {
		$response = $this->testCase->postJson('/api/Session::login', [
			'username' => $username,
			'password' => $password,
		]);
		$this->assertStatus($response, $expectedStatusCode);
		if ($assertSee) {
			$response->assertSee($assertSee, false);
		}

		return $response;
	}

	/**
	 * @param int         $expectedStatusCode
	 * @param string|null $assertSee
	 *
	 * @return TestResponse
	 */
	public function init(
		int $expectedStatusCode = 200,
		?string $assertSee = null
	): TestResponse {
		$response = $this->testCase->postJson('/api/Session::init');
		$this->assertStatus($response, $expectedStatusCode);
		if ($assertSee) {
			$response->assertSee($assertSee, false);
		}

		return $response;
	}

	/**
	 * Logging out.
	 *
	 * @return TestResponse
	 */
	public function logout(): TestResponse
	{
		$response = $this->testCase->postJson('/api/Session::logout');
		$response->assertSuccessful();

		return $response;
	}

	/**
	 * Set a new login and password.
	 *
	 * @param string      $login
	 * @param string      $password
	 * @param int         $expectedStatusCode
	 * @param string|null $assertSee
	 *
	 * @return TestResponse
	 */
	public function set_admin(
		string $login,
		string $password,
		int $expectedStatusCode = 200,
		?string $assertSee = null
	): TestResponse {
		$response = $this->testCase->postJson('/api/Settings::setLogin', [
			'username' => $login,
			'password' => $password,
		]);
		$this->assertStatus($response, $expectedStatusCode);
		if ($assertSee) {
			$response->assertSee($assertSee, false);
		}

		return $response;
	}

	/**
	 * Set a new login and password.
	 *
	 * @param string      $login
	 * @param string      $password
	 * @param string      $oldPassword
	 * @param int         $expectedStatusCode
	 * @param string|null $assertSee
	 *
	 * @return TestResponse
	 */
	public function update_login(
		string $login,
		string $password,
		string $oldPassword,
		int $expectedStatusCode = 200,
		?string $assertSee = null
	): TestResponse {
		$response = $this->testCase->postJson('/api/Settings::updateLogin', [
			'username' => $login,
			'password' => $password,
			'oldPassword' => $oldPassword,
		]);
		$this->assertStatus($response, $expectedStatusCode);
		if ($assertSee) {
			$response->assertSee($assertSee, false);
		}

		return $response;
	}
}
