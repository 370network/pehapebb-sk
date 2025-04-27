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
    "ADD_ATTACHMENT" => "Odevzdať prílohu",
    "ADD_ATTACHMENT_EXPLAIN" =>
        "Ak steš odevdzať jeden alebo vác súborov, vyplňte títo položky.",
    "ADD_FILE" => "Pridať súbor",
    "ADD_POLL" => "Hlasuvaní",
    "ADD_POLL_EXPLAIN" =>
        "Ak nechcete pridať hlasovanie, nasledujúce položky nechajte prázdne (nevyplňujte).",
    "ALREADY_DELETED" => "Táto správa už bola vymazaná.",
    "ATTACH_COMMENT_NO_EMOJIS" =>
        "Popis prílohy obsahuje zakázané znaky (emoji).",
    "ATTACH_DISK_FULL" => "Nie je dostatok miesta na uloženie tejto prílohy.",
    "ATTACH_QUOTA_REACHED" =>
        "Úložný priestor portálu pre ukladanie príloh bol vyčerpaný.",
    "ATTACH_SIG" =>
        'Zobraziť v príspevku aj podpis používateľa (podpis je možné vytvoriť v časti "Nastavenia")',

    "BBCODE_A_HELP" =>
        "Príloha: [attachment=]nazov_suboru.pripona[/attachment]",
    "BBCODE_B_HELP" => "Tlstý text: [b]text[/b]",
    "BBCODE_C_HELP" => "Programy a iné pseudo: [code]kód[/code]",
    "BBCODE_D_HELP" => "Flash: [flash=width,height]http://url[/flash]",
    "BBCODE_F_HELP" => "Veľkosť písma: [size=85]small text[/size]",
    "BBCODE_IS_OFF" => "%sBBCode%s <em>zakázaný</em>",
    "BBCODE_IS_ON" => "%sBBCode%s <em>povolený</em>",
    "BBCODE_I_HELP" => "Taliansko: [i]text[/i]",
    "BBCODE_L_HELP" => "Zoznam: [list][*]text[/list]",
    "BBCODE_LISTITEM_HELP" => "Položka zoznamu: [*]text",
    "BBCODE_O_HELP" =>
        "Vytrídený zoznam: napr. [list=1][*]prvá vec[/list] alebo [list=a][*]položka s písmenkom a[/list]",
    "BBCODE_P_HELP" =>
        "Strčiť obrázek: [img]http://adresa_k_obrazku/nazov_obrazku.pripona_obrazku[/img]",
    "BBCODE_Q_HELP" =>
        "Cituvať príspevek inakšého človeka alebo text: [quote]cituvaný text[/quote]",
    "BBCODE_S_HELP" =>
        "Farba písma: [color=red]text[/color] alebo [color=#FF0000]text[/color]",
    "BBCODE_U_HELP" => "Podčárknutý text: [u]text[/u]",
    "BBCODE_W_HELP" =>
        "Vložiť odkaz: [url]http://url[/url] alebo [url=http://url]URL text[/url]",
    "BBCODE_Y_HELP" => "Položka zoznamu",
    "BUMP_ERROR" => "Nemóžeš oživiť tému takto skoro po novom príspevku.",

    "CANNOT_DELETE_REPLIED" =>
        "Móžeš vymazať len príspevek ke kerému neni odpoveď.",
    "CANNOT_EDIT_POST_LOCKED" => "Smola, príspevek je zamknutý.",
    "CANNOT_EDIT_TIME" => "Už nemôžete upraviť ani vymazať tento príspevok.",
    "CANNOT_POST_ANNOUNCE" =>
        'Nemáš povolení na vytváraní tém typu "Oznámení".',
    "CANNOT_POST_STICKY" => "Nemáš povolení na pripnutí témy.",
    "CHANGE_TOPIC_TO" => "Publikovať tému jak",
    "CHARS_POST_CONTAINS" => [
        1 => 'Príspevek obsahuje %1$d znak.',
        2 => 'Príspevek obsahuje %1$d znaky.',
        3 => 'Príspevek obsahuje %1$d znakov.',
    ],
    "CHARS_SIG_CONTAINS" => [
        1 => 'Tvoj podpis má %1$d znak.',
        2 => 'Tvoj podpis má %1$d znaky.',
        3 => 'Tvoj podpis má %1$d znakov.',
    ],
    "CLOSE_TAGS" => "Zavreť tagy",
    "CURRENT_TOPIC" => "Aktuálna téma",

    "DELETE_FILE" => "Odstrániť súbor",
    "DELETE_MESSAGE" => "Odstrániť správu",
    "DELETE_MESSAGE_CONFIRM" => "Naozaj steš odstrániť tento príspevok?",
    "DELETE_OWN_POSTS" => "Móžeš mazať len vlastné správy.",
    "DELETE_PERMANENTLY" => "Natrvalo odstrániť",
    "DELETE_POST_CONFIRM" => "Naozaj steš odstrániť tento príspevek?",
    "DELETE_POST_PERMANENTLY_CONFIRM" =>
        "Naozaj steš <strong>nafurt</strong> odstrániť tieto príspevky?",
    "DELETE_POST_PERMANENTLY" => [
        1 => "Nafurt odstrániť tento príspevek tak, že nepójde obnoviť",
        2 => 'Nafurt odstrániť %1$d príspevky tak, že nepójdu obnoviť',
        3 => 'Nafurt odstrániť %1$d príspevkov tak, ženepójdu obnoviť',
    ],
    "DELETE_POSTS_CONFIRM" => "Si si istý, že to steš spraviť?",
    "DELETE_POSTS_PERMANENTLY_CONFIRM" =>
        "Fakt steš <strong>nafurt</strong> zahodiť títo príspevky?",
    "DELETE_REASON" => "Dóvod odstránenia",
    "DELETE_REASON_EXPLAIN" => "370network management uvidí dóvody.",
    "DELETE_POST_WARN" => "Túto akciu už nemožno vrátiť späť!",
    "DELETE_TOPIC_CONFIRM" => "Naozaj steš vyhodiť toto vlákno?",
    "DELETE_TOPIC_PERMANENTLY" => [
        1 => "Natrvalo odstrániť toto vlákno tak, že ho nepójde obnoviť",
        2 => 'Natrvalo odstrániť %1$d vlákna tak, že nepójdu obnoviť',
        3 => 'Natrvalo odstrániť %1$d vláken tak, že nepójdu obnoviť',
    ],
    "DELETE_TOPIC_PERMANENTLY_CONFIRM" =>
        "Naozaj chcete <strong>natrvalo</strong> odstrániť túto tému?",
    "DELETE_TOPICS_CONFIRM" => "Naozaj chcete odstrániť tieto témy?",
    "DELETE_TOPICS_PERMANENTLY_CONFIRM" =>
        "Naozaj chcete <strong>natrvalo</strong> odstrániť tieto témy?",
    "DISABLE_BBCODE" => "V tomto príspevku zakázať BBCode",
    "DISABLE_MAGIC_URL" =>
        "V tomto príspevku nerozpoznávať URL adresy (aktívne odkazy)",
    "DISABLE_SMILIES" => "V tomto príspevku zakázať smajlíky",
    "DISALLOWED_CONTENT" =>
        "Nahrávanie bolo zrušené, pretože bolo identifikované ako možný útok.",
    "DISALLOWED_EXTENSION" => "%s je nepovolená prípona.",
    "DRAFT_LOADED" =>
        "Koncept bol presunutý do okna upraveného príspevku, teraz môžete svoj príspevok upraviť.<br />Po tom čo zverejníte svoj príspevok, koncept bude vymazaný.",
    "DRAFT_LOADED_PM" =>
        "Koncept bol presunutý do okna upravenej správy, teraz môžete svoju správu upraviť.<br />Po tom čo odošlete svoju správu, koncept bude vymazaný.",
    "DRAFT_SAVED" => "Koncept bol úspešne uložený.",
    "DRAFT_TITLE" => "Názov konceptu",

    "EDIT_REASON" => "Dóvod úpravy príspevku",
    "EMPTY_FILEUPLOAD" => "Odovzdaný súbor je prázdny.",
    "EMPTY_MESSAGE" => "Musíte vložiť text príspevku.",
    "EMPTY_REMOTE_DATA" => "Súbor nie je možné odovzdať, skúste to manuálne.",

    "FLASH_IS_OFF" => "[flash] <em>zakázaný</em>",
    "FLASH_IS_ON" => "[flash] <em>povolený</em>",
    "FLOOD_ERROR" => "Nemóžeš po poslennom príspevku robiť hneď spam.",
    "FONT_COLOR" => "Farba písma",
    "FONT_COLOR_HIDE" => "Skryť paletu farieb",
    "FONT_HUGE" => "Velikánske",
    "FONT_LARGE" => "Vačšé",
    "FONT_NORMAL" => "Klasika",
    "FONT_SIZE" => "Veľkosť písma",
    "FONT_SMALL" => "Midi",
    "FONT_TINY" => "Pidi",

    "GENERAL_UPLOAD_ERROR" => "Nemôžem odovzdať prílohu na %s.",

    "IMAGES_ARE_OFF" => "[img] je <em>ZAKÁZANÉ</em>",
    "IMAGES_ARE_ON" => "[img] je <em>POVOLENÉ</em>",
    "INVALID_FILENAME" => "%s je neplatné meno súboru.",

    "LOAD" => "Nahrať",
    "LOAD_DRAFT" => "Nahrať koncept",
    "LOAD_DRAFT_EXPLAIN" =>
        'Tu si móžeš vybrať koncept, kerý steš pred zverejnením alebo odeslaním upraviť. Tvoj súčasný stav úprav textu alebo rozpísaný text príspevku alebo správy sa stratí. Zobraziť, upraviť alebo mazať koncepty, móžeš v časti "Moje nastavenia".',
    "LOGIN_EXPLAIN_BUMP" =>
        "Mosíš byť zaloguvaný ak steš oživiť vlákno v tomto fóre.",
    "LOGIN_EXPLAIN_DELETE" =>
        "Mosíš byť zaloguvaný ak steš mazať príspevky v tomto fóre.",
    "LOGIN_EXPLAIN_SOFT_DELETE" =>
        "Mosíš byť zaloguvaný ak steš zahadzuvať príspevky v tomto fóre.",
    "LOGIN_EXPLAIN_POST" =>
        "Mosíš byť zaloguvaný ak steš robiť vlákna v tomto fóre.",
    "LOGIN_EXPLAIN_QUOTE" =>
        "Mosíš byť zaloguvaný ak steš cituvať príspevky v tomto fóre.",
    "LOGIN_EXPLAIN_REPLY" => "Mosíš byť zaloguvaný ak steš písať príspevky.",

    "MAX_ATTACHMENT_FILESIZE" => "Maximálny objem pre prílohu: %s.",
    "MAX_FONT_SIZE_EXCEEDED" =>
        "Móžeš použiť maximálne %d jak veľkosť pre písmo.",
    "MAX_FLASH_HEIGHT_EXCEEDED" => [
        1 => "Súbory typu flash móžu mať výšku maximálne %d pixel.",
        2 => "Súbory typu flash móžu mať výšku maximálne %d pixely.",
        3 => "Súbory typu flash móžu mať výšku maximálne %d pixelov.",
    ],
    "MAX_FLASH_WIDTH_EXCEEDED" => [
        1 => "Súbory typu flash móžu mať šírku maximálne %d pixel.",
        2 => "Súbory typu flash móžu mať šírku maximálne %d pixely.",
        3 => "Súbory typu flash móžu mať šírku maximálne %d pixelov.",
    ],
    "MAX_IMG_HEIGHT_EXCEEDED" => [
        1 => 'Obrázek móže mať výšku maximálne %1$d pixel.',
        2 => 'Obrázek móže mať výšku maximálne %1$d pixely.',
        3 => 'Obrázek móže mať výšku maximálne %1$d pixelov.',
    ],
    "MAX_IMG_WIDTH_EXCEEDED" => [
        1 => 'Obrázek móže mať šírku maximálne %1$d pixel.',
        2 => 'Obrázek móže mať šírku maximálne %1$d pixely.',
        3 => 'Obrázek móže mať šírku maximálne %1$d pixelov.',
    ],

    "MESSAGE_BODY_EXPLAIN" => [
        0 => "", // zero means no limit, so we don't view a message here.
        1 => "Strč sem správu, nesmí mať vác než <strong>%d</strong> znak.",
        2 => "Strč sem správu, nesmí mať vác než <strong>%d</strong> znaky.",
        3 => "Strč sem správu, nesmí mať vác než <strong>%d</strong> znakov.",
    ],
    "MESSAGE_DELETED" => "Správa bola vymazaná.",
    "MORE_SMILIES" => "Zobraziť viac emotikonov",

    "NOTIFY_REPLY" => "Upozorniť ma, ak príde odpoveď",
    "NOT_UPLOADED" => "Súbor nemôže byť odovzdaný.",
    "NO_DELETE_POLL_OPTIONS" =>
        "Nemôžete zmazať možnosti publikovaného hlasovania.",
    "NO_PM_ICON" => "Žiadna",
    "NO_POLL_TITLE" => "Musíte zadať hlasovaciu otázku.",
    "NO_POST" => "Požadovaný príspevok neexistuje.",
    "NO_POST_MODE" => "Nebol zvolený typ odoslania.",
    "NO_TEMP_DIR" =>
        "Dočasný adresár nebol nájdený alebo nie je zapisovateľný.",

    "PARTIAL_UPLOAD" => "Súbor bol odevzdaný len z časti.",
    "PHP_UPLOAD_STOPPED" => "Rozšírenie PHP zastavilo nahrávanie súboru.",
    "PHP_SIZE_NA" =>
        "Príloha je príliš veľká.<br />Nemôžem zistiť maximálnu povolenú hodnotu definovanú v php.ini.",
    "PHP_SIZE_OVERRUN" =>
        'Príloha je príliš veľká, maximálna veľkosť prílohy je %1$d %2$s.<br />Táto hodnota je nastavená v php.ini a nemôže byť zmenená.',
    "PLACE_INLINE" => "Umiestniť do príspevku",
    "POLL_DELETE" => "Zahodiť hlasovaní",
    "POLL_FOR" => "Doba trvania",
    "POLL_FOR_EXPLAIN" => "Daj sem 0 ak steš hlasuvaní nehať nafurt.",
    "POLL_MAX_OPTIONS" => "Maximálny počet volieb",
    "POLL_MAX_OPTIONS_EXPLAIN" =>
        "Číslo vyjadruje počet možností, ktoré môže používateľ v hlasovaní zvoliť. Minimum je 1. Maximum je počet všetkých hlasovacích otázok/možností.",
    "POLL_OPTIONS" => "Hlasovacie otázky",
    "POLL_OPTIONS_EXPLAIN" => [
        1 => "Môžete napísať len <strong>%d</strong> otázku.",
        2 => "Každú hlasovaciu otázku vpíšte na samostatný riadok. Môžete napísať najviac <strong>%d</strong> otázky.",
        3 => "Každú hlasovaciu otázku vpíšte na samostatný riadok. Môžete napísať až <strong>%d</strong> otázok.",
    ],
    "POLL_OPTIONS_EDIT_EXPLAIN" => [
        1 => "Môžete napísať len <strong>%d</strong> otázku. Ak zmeníte už publikovanú otázku, všetky doteraz odovzdané hlasy budú anulované.",
        2 => "Každú hlasovaciu otázku vpíšte na samostatný riadok. Môžete napísať najviac <strong>%d</strong> otázky. Ak pridáte novú alebo zmeníte už publikované hlasovacie otázky, všetky doteraz odovzdané hlasy budú anulované.",
        3 => "Každú hlasovaciu otázku vpíšte na samostatný riadok. Môžete napísať až <strong>%d</strong> otázok. Ak pridáte novú alebo zmeníte už publikované hlasovacie otázky, všetky doteraz odovzdané hlasy budú anulované.",
    ],
    "POLL_QUESTION" => "Hlasovacá otázka",
    "POLL_TITLE_TOO_LONG" => "Hlasovacá otázka môže mať maximálne 100 znakov.",
    "POLL_TITLE_COMP_TOO_LONG" =>
        "Hlasovacia otázka je príliš dlhá, zvážte odstránenie tagov BBCode alebo emotikonov.",
    "POLL_VOTE_CHANGE" => "Umožniť opakované hlasovanie",
    "POLL_VOTE_CHANGE_EXPLAIN" =>
        "Ak je zvolená táto možnosť, užívatelia môžu opätovne zmeniť svoje rozhodnutie v hlasovaní.",
    "POSTED_ATTACHMENTS" => "Odevzdané prílohy",
    "POST_APPROVAL_NOTIFY" =>
        "Až bude váš príspevok schválený, budete informovaný.",
    "POST_CONFIRMATION" => "Potvrdzuvací kód",
    "POST_CONFIRM_EXPLAIN" =>
        "Ako ochranu pred automatizovaným vkladaním príspevkov, portál vyžaduje vloženie potvrdzovacieho kódu, ktorý vidíte na nasledovnom obrázku. Ak ste zrakovo postihnutý alebo kvôli iným okolnostiam nedokážete prečítať tento kód, prosíme kontaktujte %sadministrátora fóra%s.",
    "POST_DELETED" => "Príspevek bol zmazaný.",
    "POST_EDITED" => "Príspevek bol upravený.",
    "POST_EDITED_MOD" => "Príspevek bol upravený, ale vyžaduje schválenie.",
    "POST_GLOBAL" => "Oznámenie pre celé fórum",
    "POST_ICON" => "Ikona príspevku",
    "POST_NORMAL" => "Obyčajná téma",
    "POST_REVIEW" => "Prehodnotení príspevku",
    "POST_REVIEW_EDIT" => "Prehodnotení príspevku",
    "POST_REVIEW_EDIT_EXPLAIN" =>
        "Počas úpravy príspevku, ktorú práve vykonávate už niekto tento príspevok upravil.",
    "POST_REVIEW_EXPLAIN" => "V tomto vlákne je najmenej jeden nový príspevek.",
    "POST_STORED" => "Správa bola odeslaná.",
    "POST_STORED_MOD" => "Správa bola odeslaná, ale treba ju schváliť.",
    "POST_TOPIC_AS" => "Publikuvať vlákno jak",
    "PROGRESS_BAR" => "Priebežný stav",

    "QUOTE_DEPTH_EXCEEDED" => [
        1 => "Maximálny počet vnorených citácií %d.",
        2 => "Maximálny počet vnorených citácií %d.",
        3 => "Maximálny počet vnorených citácií %d.",
    ],
    "QUOTE_NO_NESTING" => "Nemôžete vkladať citácie do citácií.",

    "REMOTE_UPLOAD_TIMEOUT" => "Časový limit na odovzdávaní vypršal.",
    "SAVE" => "Uložiť",
    "SAVE_DATE" => "Uložiť ako",
    "SAVE_DRAFT" => "Uložiť ako koncept",
    "SAVE_DRAFT_CONFIRM" =>
        "Ak správu uložíte ako koncept, uložený bude len predmet a text príspevku. Chcete správu uložiť ako koncept?",
    "SMILIES" => "Smajlíky",
    "SMILIES_ARE_OFF" => "Smajlíky sú <em>ZAKÁZANÝ</em>",
    "SMILIES_ARE_ON" => "Smajlíky sú <em>POVOLENÝ</em>",
    "STICKY_ANNOUNCE_TIME_LIMIT" =>
        "Doba trvania pripnutia/oznámenia/globálneho oznámenia",
    "STICK_TOPIC_FOR" => "Doba trvania pripnutia/oznámenia",
    "STICK_TOPIC_FOR_EXPLAIN" =>
        "Pokiaľ má byť téma pripnutá na začiatok alebo má byť typu oznámenie, môžete určiť počet dní, po dobu ktorých bude téma zvoleným typom témy. Vložte 0 na vyjadrenie neobmedzenej doby trvania pripnutia/oznámenia témy. Číslo vyjadruje počet dní od dnešného dátumu.",
    "STYLES_TIP" =>
        "Tip: Štýly môžu byť rýchlejšie zmenené pokiaľ označíte text",

    "TOO_FEW_CHARS" => "Vaša správa obsahuje príliš málo znakov.",
    "TOO_FEW_CHARS_LIMIT" => [
        1 => 'Minimálny počet je %1$d znak.',
        2 => 'Minimálny počet sú %1$d zanky.',
        3 => 'Minimálny počet je %1$d znakov.',
    ],
    "TOO_FEW_POLL_OPTIONS" => "Musíte vložiť najmenej dve hlasovacie otázky.",
    "TOO_MANY_ATTACHMENTS" =>
        "Nemôžem pridať ďalšiu prílohu, maximálny počet príloh je %d.",
    "TOO_MANY_CHARS" => "Vaša správa obsahuje príliš mnoho znakov.",
    "TOO_MANY_CHARS_LIMIT" => [
        1 => 'Maximálny počet je %1$d znak.',
        2 => 'Maximálny počet sú %1$d znaky.',
        3 => 'Maximálny počet je %1$d znakov.',
    ],
    "TOO_MANY_POLL_OPTIONS" => "Zadali ste príliš mnoho hlasovacích otázok.",
    "TOO_MANY_SMILIES" =>
        "Vaša správa obsahuje príliš mnoho emotikonov, maximum je %d.",
    "TOO_MANY_URLS" =>
        "Vaša správa obsahuje príliš mnoho odkazov na iné stránky, maximum je %d.",
    "TOO_MANY_USER_OPTIONS" =>
        "Nemôžete určiť viac možností hlasovania pre používateľa než je počet hlasovacích otázok.",
    "TOPIC_BUMPED" => "Téma bolo preunuté na začiatok zoznamu tém (oživené).",

    "UNAUTHORISED_BBCODE" => "Niektoré tagy BBCode nie je možné použiť (%s).",
    "UNSUPPORTED_CHARACTERS_MESSAGE" =>
        "Vaša správa obsahuje nepovolené znaky:<br />%s",
    "UNSUPPORTED_CHARACTERS_SUBJECT" =>
        "Predmet obsahuje nepovolené znaky:<br />%s",
    "UPDATE_COMMENT" => "Aktualizuvať komentár",
    "URL_INVALID" => "Odkaz je mrtvý.",
    "URL_NOT_FOUND" => "Označený súbor nenájdený.",
    "URL_IS_OFF" => "[url] sú <em>ZAKÁZANÉ</em>",
    "URL_IS_ON" => "[url] sú <em>POVOLENÉ</em>",
    "USER_CANNOT_BUMP" => "Nemóžeš oživiť vlákno v tomto fóre.",
    "USER_CANNOT_DELETE" => "Nemóžeš mazať príspevky v tomto fóre.",
    "USER_CANNOT_EDIT" => "Nemóžeš upravovať príspevky v tomto fóre.",
    "USER_CANNOT_REPLY" => "Nemóžeš odpvedať na príspevky v tomto fóre.",
    "USER_CANNOT_FORUM_POST" =>
        "Typ tohoto fóra nedovoľuje odosielanie nových príspevkov.",

    "VIEW_MESSAGE" => "%sZobraziť odoslanú správu%s",
    "VIEW_PRIVATE_MESSAGE" => "%sZobraziť odoslanú súkromnú správu%s",

    "WRONG_FILESIZE" => 'Súbor je moc tlstý, maximálna veľkosť je %1$d %2$s.',
    "WRONG_SIZE" =>
        'Najmenší možný obrázek (ŠxV): %1$s x %2$s, najvačší možný: %3$s x %4$s. Tvoj obrázek má %5$s x %6$s.',
]);
