<?php

return [
    'cms_object' => [
        'invalid_file' => 'Érvénytelen fájlnév. Csak latin betűket, számokat, aláhúzásokat, kötőjeleket és pontokat tartalmazhat. Néhány példa a megfelelő fájlnévre: kapcsolat.htm, impresszum, konyvtar/oldalnev',
        'invalid_property' => "A(z) ':name' tulajdonság nem állítható be.",
        'file_already_exists' => "Már létezik ':name' nevű fájl.",
        'error_saving' => "Hiba a(z) ':name' fájl mentésekor. Ellenőrizze az írási engedélyeket.",
        'error_creating_directory' => 'Hiba a(z) :name könyvtár létrehozásakor. Ellenőrizze az írási engedélyeket.',
        'invalid_file_extension' => 'Érvénytelen kiterjesztés: :invalid. Engedélyezett kiterjesztések: :allowed.',
        'error_deleting' => "Hiba a(z) ':name' sablonfájl törlésekor. Ellenőrizze az írási engedélyeket.",
        'delete_success' => 'A sablonok törlése sikerült: :count.',
        'file_name_required' => 'A fájlnév mező kitöltése kötelező.',
        'safe_mode_enabled' => 'A biztonságos mód jelenleg aktív.'
    ],
    'dashboard' => [
        'active_theme' => [
            'widget_title_default' => 'Weboldal',
            'online' => 'Online',
            'maintenance' => 'Karbantartás alatt',
            'manage_themes' => 'Témák kezelése',
            'customize_theme' => 'Téma testreszabása'
        ]
    ],
    'theme' => [
        'not_found_name' => "A következő téma nem található: ':name'",
        'by_author' => 'Fejlesztő: :name',
        'active' => [
            'not_set' => 'Nincs beállítva az aktív téma.',
            'not_found' => 'Az aktív téma nem található.'
        ],
        'edit' => [
            'not_set' => 'Nincs beállítva a szerkesztés alatt lévő téma.',
            'not_found' => 'A szerkesztés alatt lévő téma nem található.',
            'not_match' => 'Az objektum melyhez hozzáférni próbál, nem a szerkesztés alatt lévő témához tartozik. Töltse be újra az oldalt.',
        ],
        'settings_menu' => 'Megjelenés',
        'settings_menu_description' => 'A telepített témák listája és azok testreszabása.',
        'default_tab' => 'Tulajdonságok',
        'name_label' => 'Név',
        'name_create_placeholder' => 'Az új téma neve',
        'author_label' => 'Szerző',
        'author_placeholder' => 'Magánszemély vagy cég neve',
        'description_label' => 'Leírás',
        'description_placeholder' => 'A téma ismertetője',
        'homepage_label' => 'Weboldal',
        'homepage_placeholder' => 'A honlap webcíme',
        'code_label' => 'Kód',
        'code_placeholder' => 'Egyedi azonosító ehhez a témához',
        'preview_image_label' => 'Előnézet',
        'preview_image_placeholder' => 'A téma előnézet képének elérési útvonala.',
        'dir_name_label' => 'Könyvtár',
        'dir_name_create_label' => 'A célkönyvtár',
        'theme_label' => 'Téma',
        'theme_title' => 'Témák',
        'activate_button' => 'Aktiválás',
        'active_button' => 'Aktiválva',
        'customize_theme' => 'Téma testreszabása',
        'customize_button' => 'Testreszabás',
        'duplicate_button' => 'Duplikálás',
        'duplicate_title' => 'Téma duplikálása',
        'duplicate_theme_success' => 'A téma duplikálása sikeresen megtörtént!',
        'manage_button' => 'Műveletek',
        'manage_title' => 'Téma menedzselése',
        'edit_properties_title' => 'Téma',
        'edit_properties_button' => 'Tulajdonságok',
        'save_properties' => 'Mentés',
        'import_button' => 'Importálás',
        'import_title' => 'Téma importálása',
        'import_theme_success' => 'A téma importálása sikeresen megtörtént!',
        'import_uploaded_file' => 'Téma archív fájl',
        'import_overwrite_label' => 'Létező fájlok felülírása',
        'import_overwrite_comment' => 'Ne jelölje be ezt a négyzetet, ha csak új fájlokat akar importálni.',
        'import_folders_label' => 'Könyvtárak',
        'import_folders_comment' => 'Válassza ki azokat a könyvtárakat, amiket importálni szeretne.',
        'export_button' => 'Exportálás',
        'export_title' => 'Téma exportálása',
        'export_folders_label' => 'Könyvtárak',
        'export_folders_comment' => 'Válassza ki azokat a könyvtárakat, amiket exportálni szeretne.',
        'delete_button' => 'Törlés',
        'delete_confirm' => 'Valóban törölni akarja a témát?',
        'delete_active_theme_failed' => 'Nem lehet törölni a témát. Először tegyen aktívvá egy másik témát.',
        'delete_theme_success' => 'A téma törlése sikeresen megtörtént!',
        'create_title' => 'Sablon létrehozása',
        'create_button' => 'Létrehozás',
        'create_new_blank_theme' => 'Üres téma létrehozása',
        'create_theme_success' => 'A téma létrehozása sikeresen megtörtént!',
        'create_theme_required_name' => 'Kérem adjon meg egy nevet a témának.',
        'new_directory_name_label' => 'Téma helye',
        'new_directory_name_comment' => 'Adjon meg egy új könyvtárat a duplikált témának.',
        'dir_name_invalid' => 'A név csak számokat, latin betűket, aláhúzásokat és kötőjeleket tartalmazhat.',
        'dir_name_taken' => 'A megadott könyvtár már létezik.',
        'find_more_themes' => 'További témák az Winter CMS piacterén',
        'saving' => 'Téma mentése...',
        'return' => 'Vissza a témákhoz'
    ],
    'maintenance' => [
        'settings_menu' => 'Karbantartás',
        'settings_menu_description' => 'A weboldal ideiglenes felfüggesztése a látogatók számára.',
        'is_enabled' => 'Karbantartás engedélyezése',
        'is_enabled_comment' => 'Aktiválása esetén a weboldal látogatói csak a kiválasztott oldalt fogják látni.',
        'hint' => 'Karbantartás módban a lentebb megadott oldal fog megjelenni azon látogatók számára, akik nincsenek bejelentkezve az admin felületre.',
    ],
    'page' => [
        'not_found_name' => "A következő oldal nem található: ':name'",
        'not_found' => [
            'label' => 'Az oldal nem található',
            'help' => 'A kért oldal nem található.',
        ],
        'custom_error' => [
            'label' => 'Oldal hiba',
            'help' => 'Sajnos valami elromlott, ezért az oldal nem jeleníthető meg.',
        ],
        'menu_label' => 'Oldalak',
        'unsaved_label' => 'Nem mentett oldal(ok)',
        'no_list_records' => 'Nincs találat',
        'new' => 'Új oldal',
        'invalid_url' => 'Érvénytelen a formátum. A webcímnek perjellel kell kezdődnie, és számokat, latin betűket, valamint a következő karaktereket tartalmazhatja: ._-[]:?|/+*',
        'delete_confirm_multiple' => 'Valóban törölni akarja a kijelölt oldalakat?',
        'delete_confirm_single' => 'Valóban törölni akarja ezt az oldalt?',
        'no_layout' => '-- nincs --',
        'cms_page' => 'Oldalak',
        'title' => 'Elnevezés szerint',
        'url' => 'Webcím szerint',
        'file_name' => 'Fájlnév szerint'
    ],
    'layout' => [
        'not_found_name' => "A(z) ':name' elrendezés nem található",
        'menu_label' => 'Elrendezések',
        'unsaved_label' => 'Nem mentett elrendezés(ek)',
        'no_list_records' => 'Nincs találat',
        'new' => 'Új elrendezés',
        'delete_confirm_multiple' => 'Valóban törölni akarja a kijelölt elrendezéseket?',
        'delete_confirm_single' => 'Valóban törölni akarja ezt az elrendezést?'
    ],
    'partial' => [
        'not_found_name' => "A(z) ':name' részlap nem található.",
        'invalid_name' => 'Érvénytelen részlapnév: :name.',
        'menu_label' => 'Részlapok',
        'unsaved_label' => 'Nem mentett részlap(ok)',
        'no_list_records' => 'Nincs találat',
        'delete_confirm_multiple' => 'Valóban törölni akarja a kijelölt részlapokat?',
        'delete_confirm_single' => 'Valóban törölni akarja ezt a részlapot?',
        'new' => 'Új részlap'
    ],
    'content' => [
        'not_found_name' => "A(z) ':name' tartalomfájl nem található.",
        'menu_label' => 'Tartalom',
        'unsaved_label' => 'Nem mentett tartalom',
        'no_list_records' => 'Nincs találat',
        'delete_confirm_multiple' => 'Valóban törölni akarja a kijelölt tartalomfájlokat vagy könyvtárakat?',
        'delete_confirm_single' => 'Valóban törölni akarja ezt a tartalomfájlt?',
        'new' => 'Új tartalomfájl'
    ],
    'ajax_handler' => [
        'invalid_name' => 'Érvénytelen AJAX kezelő név: :name.',
        'not_found' => "A(z) ':name' AJAX kezelő nem található."
    ],
    'cms' => [
        'menu_label' => 'Testreszabás'
    ],
    'sidebar' => [
        'add' => 'Hozzáadás',
        'search' => 'Keresés...'
    ],
    'editor' => [
        'settings' => 'Beállítások',
        'title' => 'Elnevezés',
        'new_title' => 'Az új oldal címe',
        'url' => 'Webcím',
        'filename' => 'Fájlnév',
        'layout' => 'Elrendezés',
        'description' => 'Leírás',
        'preview' => 'Előnézet',
        'meta' => 'Továbbiak',
        'meta_title' => 'Keresőbarát cím',
        'meta_description' => 'Keresőbarát leírás',
        'markup' => 'HTML',
        'code' => 'PHP',
        'content' => 'Tartalom',
        'hidden' => 'Rejtett',
        'hidden_comment' => 'Csak a bejelentkezett felhasználók láthatják.',
        'enter_fullscreen' => 'Váltás teljes képernyőre',
        'exit_fullscreen' => 'Kilépés a teljes képernyőből',
        'open_searchbox' => 'Keresési panel megnyitása',
        'close_searchbox'  => 'Keresési panel bezárása',
        'open_replacebox' => 'Cserepanel megnyitása',
        'close_replacebox'  => 'Cserepanel bezárása',
        'commit' => 'Végrehajtás',
        'reset' => 'Visszaállítás',
        'commit_confirm' => 'Biztos, hogy végrehajtja a fájl módosításait? Ez felülírja a meglévő fájlt.',
        'reset_confirm' => 'Biztos, hogy vissza akarja állítani ezt a fájlt a másolatra? Ez teljesen lecseréli a meglévő fájlt.',
        'committing' => 'Végrehajtás',
        'resetting' => 'Visszaállítás',
        'commit_success' => 'The :type has been committed to the filesystem',
        'reset_success' => 'The :type has been reset to the filesystem version',
    ],
    'asset' => [
        'menu_label' => 'Fájlok',
        'unsaved_label' => 'Nem mentett fájl(ok)',
        'drop_down_add_title' => 'Hozzáadás...',
        'drop_down_operation_title' => 'Művelet...',
        'upload_files' => 'Fájl(ok) feltöltése',
        'create_file' => 'Fájl létrehozása',
        'create_directory' => 'Könyvtár létrehozása',
        'directory_popup_title' => 'Új könyvtár',
        'directory_name' => 'Könyvtár neve',
        'rename' => 'Átnevezés',
        'delete' => 'Törlés',
        'move' => 'Áthelyezés',
        'select' => 'Kijelölés',
        'new' => 'Új fájl',
        'rename_popup_title' => 'Átnevezés',
        'rename_new_name' => 'Új név',
        'invalid_path' => 'Az elérési út neve csak számokat, latin betűket, szóközöket és a következő szimbólumokat tartalmazhatja: ._-/',
        'error_deleting_file' => 'Hiba a(z) :name fájl törlésekor.',
        'error_deleting_dir_not_empty' => 'Hiba a(z) :name könyvtár törlésekor. A könyvtár nem üres.',
        'error_deleting_dir' => 'Hiba a(z) :name fájl törlésekor.',
        'invalid_name' => 'A név csak számokat, latin betűket, szóközöket és a következő szimbólumokat tartalmazhatja: ._-',
        'original_not_found' => 'Nem található az eredeti fájl vagy könyvtár.',
        'already_exists' => 'Már létezik ilyen nevű fájl vagy könyvtár.',
        'error_renaming' => 'Hiba a fájl vagy a könyvtár átnevezésekor.',
        'name_cant_be_empty' => 'A név nem lehet üres.',
        'too_large' => 'A feltöltött fájl túl nagy. A maximálisan engedélyezett fájlméret: :max_size',
        'type_not_allowed' => 'Csak a következő fájltípusok engedélyezettek: :allowed_types',
        'file_not_valid' => 'A fájl nem érvényes.',
        'error_uploading_file' => "Hiba a(z) ':name' fájl feltöltésekor: :error",
        'move_please_select' => 'válasszon',
        'move_destination' => 'Célkönyvtár',
        'move_popup_title' => 'Fájl(ok) áthelyezése',
        'move_button' => 'Áthelyezés',
        'selected_files_not_found' => 'A kijelölt fájlok nem találhatók.',
        'select_destination_dir' => 'Válasszon egy célkönyvtárat.',
        'destination_not_found' => 'A célkönyvtár nem található.',
        'error_moving_file' => 'Hiba a(z) :file fájl áthelyezésekor.',
        'error_moving_directory' => 'Hiba a(z) :dir könyvtár áthelyezésekor.',
        'error_deleting_directory' => 'Hiba a(z) :dir eredeti könyvtár áthelyezésekor.',
        'no_list_records' => 'Nincs találat',
        'delete_confirm' => 'Valóban törölni akarja a fájlokat és a könyvtárakat?',
        'path' => 'Elérési út'
    ],
    'component' => [
        'menu_label' => 'Komponensek',
        'unnamed' => 'Névtelen',
        'no_description' => 'Nincs megadott leírás',
        'alias' => 'Alias',
        'alias_description' => 'Ennek a komponensnek az oldal vagy az elrendezés kódjában való használatkor adott egyedi név.',
        'validation_message' => 'A komponens aliasok kötelezőek, és csak latin betűket, számokat, valamint aláhúzásokat tartalmazhatnak. Az aliasoknak latin szimbólummal kell kezdődniük.',
        'invalid_request' => 'A sablon érvénytelen komponens adatok miatt nem menthető.',
        'no_records' => 'Nem találhatók komponensek',
        'not_found' => "A(z) ':name' komponens nem található.",
        'no_default_partial' => 'Ennek a komponensek nincs alapértelmezett részlapja.',
        'method_not_found' => "A(z) ':name' komponens nem tartalmaz a(z) ':method' metódust.",
        'soft_component' => 'Opcionális komponens',
        'soft_component_description' => 'Ez a komponens hiányzik, viszont nem kötelező.',
    ],
    'template' => [
        'invalid_type' => 'Ismeretlen sablon típus.',
        'not_found' => 'A kért sablon nem található.',
        'saved' => 'A módosítások sikeresen mentésre kerültek.',
        'no_list_records' => 'Nincs találat',
        'delete_confirm' => 'Valóban törölni akarja a témát?',
        'order_by' => 'Rendezés'
    ],
    'permissions' => [
        'name' => 'Testreszabás',
        'manage_content' => 'Tartalom kezelése',
        'manage_assets' => 'Fájlok kezelése',
        'manage_pages' => 'Oldalak kezelése',
        'manage_layouts' => 'Elrendezések kezelése',
        'manage_partials' => 'Részlapok kezelése',
        'manage_themes' => 'Témák kezelése',
        'manage_theme_options' => 'Aktív téma testreszabása',
    ],
    'theme_log' => [
        'hint' => 'Az adminok által elvégzett módosítások az aktív téma fájlaiban, amiket az admin felületen keresztül hajtottak végre.',
        'menu_label' => 'Téma napló',
        'menu_description' => 'Változtatások listája az aktív témánál.',
        'empty_link' => 'Kiürítés',
        'empty_loading' => 'A kiürítés folyamatban...',
        'empty_success' => 'A téma napló kiürítése megtörtént.',
        'return_link' => 'Vissza a téma naplóhoz',
        'id' => 'ID',
        'id_label' => 'Napló ID',
        'created_at' => 'Dátum',
        'user' => 'Felhasználó',
        'type' => 'Művelet',
        'type_create' => 'Létrehozás',
        'type_update' => 'Módosítás',
        'type_delete' => 'Törlés',
        'theme_name' => 'Téma',
        'theme_code' => 'Kódnév',
        'old_template' => 'Fájl (régi)',
        'new_template' => 'Fájl (új)',
        'template' => 'Fájl',
        'diff' => 'Változtatások',
        'old_value' => 'Régi tartalom',
        'new_value' => 'Új tartalom',
        'preview_title' => 'Változtatások',
        'template_updated' => 'A fájl frissítve lett.',
        'template_created' => 'A fájl létre lett hozva.',
        'template_deleted' => 'A fájl törölve lett.'
    ]
];
