<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @author phpBB3.sk, PepeLopez, Fonzi, Senky
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ALL_AVAILABLE'			=> 'Šecky dostupné',
	'ALL_RESULTS'			=> 'Šecky výsledky',

	'DISPLAY_RESULTS'		=> 'Výsledek zobraz jak,

	'FOUND_SEARCH_MATCHES'		=> array(
		0	=> 'Ništ tu neni',
		1	=> 'AHA, našla sa %d zhoda',
		2	=> 'AHA, toť máš %d zhody',
		3	=> 'AHA, kukaj %d zhód',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Našlo sa vác jak %d zhoda',
		2	=> 'Našlo sa vác jak %d zhody',
		3	=> 'Máš toť vác jak %d zhód',
	),

	'GLOBAL'				=> 'Globálne oznámenie',

	'IGNORED_TERMS'			=> 'ignorované',
	'IGNORED_TERMS_EXPLAIN'	=> 'Toť toto je často vyskytuvané, ignoruje sa to: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Prejsť na príspevek',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Fórum sťe aby si bov zaloguvaný, ináč máš smolu.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Fórum sťe aby si bov zaloguvaný, ináč máš smolu.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Fórum sťe aby si bov zaloguvaný, steš videť nové príspevky? Nezaloguješ sa a máš smolu.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Steš moc hovadín, prosímťa zredukuj to na %1$d slovo.',
		2	=> 'Steš moc hovadín, prosímťa zredukuj to na %1$d slová.',
		3	=> 'Steš moc hovadín, prosímťa zredukuj to na %1$d slov.',
	),

	'NO_KEYWORDS'			=> 'Musíte určiť aspoň jedno slovo, ktoré má byť vyhľadané. Každé z určených slov musí mať najmenej %s a nesmie obsahovať viac než %s (okrem *).',
	'NO_RECENT_SEARCHES'	=> 'Žiadne hľadanie nebolo v poslednej dobe spustené.',
	'NO_SEARCH'				=> 'Na spustenie vyhľadávania nemáte dostatočné oprávnenia.',
	'NO_SEARCH_RESULTS'		=> 'Nebola nájdená žiadna zhoda.',
	'NO_SEARCH_LOAD'		=> 'Prepáčte, ale nie je možné spustiť vyhľadávanie. Server je príliš zaťažený. Skúste neskôr.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Nie je možné opätovne spustiť vyhľadávanie, skúste to znovu o %d sekúnd',
		2	=> 'Nie je možné opätovne spustiť vyhľadávanie, skúste to znovu za %d sekundy',
		3	=> 'Nie je možné opätovne spustiť vyhľadávanie, skúste to znovu za %d sekúnd',
	),
	'NO_SEARCH_UNREADS'		=> 'Vyhľadávaní v neprečítanom je vypaté, ic sa sťažuvať.',
	'WORD_IN_NO_POST'		=> 'Smola. Dopyt <strong>%s</strong> neni nide.',
	'WORDS_IN_NO_POST'		=> 'Smola. Dopyt <strong>%s</strong> neni nide.',

	'POST_CHARACTERS'		=> 'znakov príspevku',
	'PHRASE_SEARCH_DISABLED'	=> 'Presný výraz je vypatý, ic sa sťažuvať.',

	'RECENT_SEARCHES'		=> 'Poslenné vyhľadávaní',
	'RESULT_DAYS'			=> 'Ve výsledkoch zobrazuj výsledky iba za',
	'RESULT_SORT'			=> 'Zorac výsledky polla',
	'RETURN_FIRST'			=> 'Zobraz prvých',
	'RETURN_FIRST_EXPLAIN'	=> 'Daj 0, budeš mať šecko.',
	'GO_TO_SEARCH_ADV'	=> 'Rozšírené vyhľadávaní',

	'SEARCHED_FOR'				=> 'Zhľadávaš',
	'SEARCHED_TOPIC'			=> 'Hladané vlákno',
	'SEARCHED_QUERY'			=> 'Hladané slová/výraz',
	'SEARCH_ALL_TERMS'			=> 'Hľadať všetky slová alebo presnú zhodu s výrazom',
	'SEARCH_ANY_TERMS'			=> 'Hľadať akýkoľvek výskyt slov alebo výrazu',
	'SEARCH_AUTHOR'				=> 'Hľadať príspevky od autora',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Strč * na náhradu časti stringov.',
	'SEARCH_FIRST_POST'			=> 'len v prvom príspevku témy',
	'SEARCH_FORUMS'				=> 'Hľadať v týchto fórach',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Označ fórum alebo fóra, v kerých sa má zadaný výraz vyhľadať. Prehľadávanie subfór je závislé na voľbe pod oknom zoznamu fór.',
	'SEARCH_IN_RESULTS'			=> 'Hladaj ve výsledkoch',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Vložte znak <strong>+</strong> pred slovo, ktoré musí byť súčasťou hľadaného výrazu a/alebo znak <strong>-</strong> pred slovo, ktoré nemá byť súčasťou hľadaného výrazu. Vpíšte do úvodzoviek zoznam slov, oddelených znakom <strong>|</strong> ak vo výsledku hľadania má byť aspoň jedno slovo z hľadaného výrazu. Použite * ako náhradu časti slova.',
	'SEARCH_MSG_ONLY'			=> 'len v texte príspevku',
	'SEARCH_OPTIONS'			=> 'Možnosti vyhľadávania',
	'SEARCH_QUERY'				=> 'Druh vyhľadávania',
	'SEARCH_SUBFORUMS'			=> 'Prehľadávať subfóra',
	'SEARCH_TITLE_MSG'			=> 'v predmetoch tém a v texte príspevku',
	'SEARCH_TITLE_ONLY'			=> 'len v názvoch tém',
	'SEARCH_WITHIN'				=> 'Hľadať v nasledovnom rozsahu',
	'SORT_ASCENDING'			=> 'od najmenšého po najvačšé',
	'SORT_AUTHOR'				=> 'autora príspevku',
	'SORT_DESCENDING'			=> 'od najvačšého po najmenšé',
	'SORT_FORUM'				=> 'názvu fóra',
	'SORT_POST_SUBJECT'			=> 'mena príspevku',
	'SORT_TIME'					=> 'času pridaňá',
	'SPHINX_SEARCH_FAILED'		=> 'Hladaní vykapalo: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Hladaní sa nedá. Ic sa sťažuvať, v logu to bude.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Mosíš dať aspoň %d znak mena.',
		2	=> 'Mosíš dať aspoň %d znaky mena.',
		3	=> 'Mosíš dať aspoň %d znakov mena.',
	),
));
