<?php
/**
*
* Auto Database Backup
*
* @copyright (c) 2014 Lukasz Kaczynski
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_AUTO_DB_BACKUP'					=> 'Automatische Datenbanksicherung',
	'ACP_AUTO_DB_BACKUP_SETTINGS'			=> 'Einstellungen für die automatische Sicherung',
	'LOG_AUTO_DB_BACKUP'					=> '<strong>Automatische Datenbanksicherung abgeschlossen</strong>',
	'LOG_AUTO_DB_BACKUP_SETTINGS_CHANGED'	=> '<strong>Geänderte Einstellungen für die automatische Datenbanksicherung</strong>',
	//Donation
	'PAYPAL_IMAGE_URL'			=> 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'				=> 'Spende über PayPal',
	'BUY_ME_A_BEER_URL'			=> 'https://paypal.me/RMcGirr83',
	'BUY_ME_A_BEER'				=> 'Für die Erstellung dieser Erweiterung könntest Du mir ja ein Bier ausgeben',
	'BUY_ME_A_BEER_SHORT'		=> 'Spende doch für diese Erweiterung',
	'BUY_ME_A_BEER_EXPLAIN'		=> 'Diese Erweiterung ist vollkommen kostenlos. Es ist ein Projekt, mit dem ich meine Zeit zum Vergnügen und zur Nutzung der phpBB-Community verbringe. Wenn Du diese Erweiterung gerne verwendest oder Dein Forum davon profitiert hat, denke doch bitte daran <a href="https://paypal.me/RMcGirr83" target="_blank" rel="noreferrer noopener">mir einBier auszugeben</a>. Ich wäre sehr dankbar. <i class="fa fa-smile-o" style="color:green;font-size:1.5em;" aria-hidden="true"></i>',
));
