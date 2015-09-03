<?php

/*
	WildPHP - a modular and easily extendable IRC bot written in PHP
	Copyright (C) 2015 WildPHP

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

namespace WildPHP\Modules\NickWatcher;

use WildPHP\BaseModule;

class NickWatcher extends BaseModule
{
	/**
	 * Our current nickname.
	 *
	 * @var string
	 */
	protected $nickname = '';

	// Register our events.
	public function registerListeners()
	{
		return [
			'nickChanged' => 'irc.data.out.nick',

			// Subscribe to a generic irc.data.in event, because we need to catch multiple error messages.
			'nickError' => 'irc.data.in'
		];
	}

	/**
	 * Gets triggered whenever a NICK command is sent.
	 *
	 * @param array $data
	 */
	public function nickChanged($data)
	{
		$this->api->getConfigurationStorage()->set('nick', $data['params']['nickname']);
	}

	/**
	 * Listens to errors 431, 432, 433, 436 and responds appropriately.
	 *
	 * @param array $data
	 */
	public function nickError($data)
	{

	}

	/**
	 * Sets the current nickname both on the server and internally.
	 *
	 * @param string $nickname
	 */
	public function changeNickname($nickname)
	{
		$this->api->getConfigurationStorage()->set('nick', $nickname);

		$this->api->getIrcConnection()->write($this->api->getGenerator()->ircNick($nickname));
	}
}