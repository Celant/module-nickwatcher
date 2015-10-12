# NickWatcher Module
[![Build Status](https://scrutinizer-ci.com/g/WildPHP/module-nickwatcher/badges/build.png?b=master)](https://scrutinizer-ci.com/g/WildPHP/module-nickwatcher/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/WildPHP/module-nickwatcher/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/WildPHP/module-nickwatcher/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/wildphp/module-nickwatcher/v/stable)](https://packagist.org/packages/wildphp/module-nickwatcher)
[![Latest Unstable Version](https://poser.pugx.org/wildphp/module-nickwatcher/v/unstable)](https://packagist.org/packages/wildphp/module-nickwatcher)
[![Total Downloads](https://poser.pugx.org/wildphp/module-nickwatcher/downloads)](https://packagist.org/packages/wildphp/module-nickwatcher)

This module monitors the nickname of the bot for changes, and updates internal references. This ensures other modules do not get confused about the bot's actual username.

## System Requirements
If your setup can run the main bot, it can run this module as well.

## Installation
To install this module, we will use `composer`:

composer require wildphp/module-nickwatcher

That will install all required files for the module. In order to activate the module, add the following line to your `config.neon`, section `modules`:

  - WildPHP\Modules\NickWatcher\NickWatcher

Make sure to include a tab character in front. The bot will run the module the next time it is started.

## License
This module is licensed under the GNU General Public License, version 3. Please see `LICENSE` to read it.
