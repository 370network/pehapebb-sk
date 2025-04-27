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
if (!defined("IN_PHPBB")) {
    exit();
}

if (empty($lang) || !is_array($lang)) {
    $lang = [];
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

$lang = array_merge($lang, [
    "APPROVE" => "Súhlasím",
    "ATTACHMENT" => "Príloha",
    "ATTACHMENT_FUNCTIONALITY_DISABLED" => "Nemóžeš strkať prílohy.",

    "BOOKMARK_ADDED" => "Téma bola pridaná do záložék.",
    "BOOKMARK_ERR" => "Pridaní témy medzi záložky skoncuvalo. Sprobuj znovu.",
    "BOOKMARK_REMOVED" => "Téma bola vyhodená ze záložék.",
    "BOOKMARK_TOPIC" => "Pridať tému medzi záložky",
    "BOOKMARK_TOPIC_REMOVE" => "Odstrániť zo záložiek",
    "BUMPED_BY" => 'Zebudil %1$s - %2$s.',
    "BUMP_TOPIC" => "Zebudiť vlákno",

    "DELETE_TOPIC" => "Vymazať vlákno",
    "DELETED_INFORMATION" => 'Vymazal %1$s on %2$s',
    "DISAPPROVE" => "Nesúhlasím",
    "DOWNLOAD_NOTICE" => "Na pozíraní nemáš právo.",

    "EDITED_TIMES_TOTAL" => [
        1 => 'Naposledy upraveu/-a %2$s v %3$s, upravené celkom %1$d krát.',
        2 => 'Naposledy upraveu/-a %2$s v %3$s, upravené celkom %1$d krát.',
        3 => 'Naposledy upraveu/-a %2$s v %3$s, upravené celkom %1$d krát.',
    ],
    "EMAIL_TOPIC" => "Odoslať vlákno emailom",
    "ERROR_NO_ATTACHMENT" => "Táto príloha neexistuje.",

    "FILE_NOT_FOUND_404" => "Súbor <strong>%s</strong> neexistuje.",
    "FORK_TOPIC" => "Kopíruvať tému",
    "FULL_EDITOR" => "Úplný Editor&amp;Náhľad",

    "LINKAGE_FORBIDDEN" =>
        "Nemáš oprávnení pozírať stránku, sťahuvať alebo otvárať odkazy.",
    "LOGIN_NOTIFY_TOPIC" => "Bóv si upozornený na vlákno, zaloguj sa a kukaj.",
    "LOGIN_VIEWTOPIC" => "Na kukaní vlákna sa treba zaloguvať.",

    "MAKE_ANNOUNCE" => "Prešteluvať na “Oznámení”",
    "MAKE_GLOBAL" => "Prešteluvať na “Oznámení pre celé fórum”",
    "MAKE_NORMAL" => "Prešteluvať na “Obyčajné vlákno”",
    "MAKE_STICKY" => "Zašpendlíkuvať vlákno navrch.",
    "MAX_OPTIONS_SELECT" => [
        1 => "Móžeš označiť <strong>%d</strong> možnosť",
        2 => "Móžeš označiť <strong>%d</strong> možnosti",
        3 => "Móžeš označiť až <strong>%d</strong> možností",
    ],
    "MISSING_INLINE_ATTACHMENT" => "Príloha <strong>%s</strong> neexistuje",
    "MOVE_TOPIC" => "Presunúť vlákno",

    "NO_ATTACHMENT_SELECTED" => "Nezvoleu si žiadnu prílohu.",
    "NO_NEWER_TOPICS" => "Neexistujú novšé vlákna.",
    "NO_OLDER_TOPICS" => "Neexistujú staršé vlákna.",
    "NO_UNREAD_POSTS" => "Toto vlákno nemá ništ nové.",
    "NO_VOTE_OPTION" => "Ak steš hlasuvať tak volačo aj vyber.",
    "NO_VOTES" => "Žádne hlasuvaní",
    "NO_AUTH_PRINT_TOPIC" => "Nemáš povolení na tlačení, smola.",

    "POLL_ENDED_AT" => "Hlasuvaní skončilo %s",
    "POLL_RUN_TILL" => "Hlasujeme až do %s",
    "POLL_VOTED_OPTION" => "Za toto si už hlasuval",
    "POST_DELETED_RESTORE" => "Príspevek je fuč. Móžeš ho ale obnoviť.",
    "PRINT_TOPIC" => "Kukátko tlačárňové",

    "QUICK_MOD" => "Voláke nástroje",
    "QUICKREPLY" => "Voláka odpoveď",

    "REPLY_TO_TOPIC" => "Hodiť odpoveď na vlákno",
    "RESTORE" => "Obnoviť",
    "RESTORE_TOPIC" => "Obnoviť vlákno",
    "RETURN_POST" => "%sNávrat na príspevek%s",

    "SUBMIT_VOTE" => "Hlasuvať",

    "TOPIC_TOOLS" => "Nástroje pre vlákno",
    "TOTAL_VOTES" => "Celkom hlasov",

    "UNLOCK_TOPIC" => "Odemknúť tému",

    "VIEW_INFO" => "Detaily príspevku",
    "VIEW_NEXT_TOPIC" => "Ďalší príspevek",
    "VIEW_PREVIOUS_TOPIC" => "Predchádzajúci príspevok",
    "VIEW_RESULTS" => "Zobraziť výsledky",
    "VIEW_TOPIC_POSTS" => [
        1 => "%d príspevek",
        2 => "%d príspevky",
        3 => "%d príspevkov",
    ],
    "VIEW_UNREAD_POST" => "Prvý neprečítaný príspevek",
    "VOTE_SUBMITTED" => "Zahlasuval si.",
    "VOTE_CONVERTED" => "Máš smolu, hlasuvaní je jennorázové.",
]);
