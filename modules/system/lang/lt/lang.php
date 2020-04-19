<?php

return [
    'app' => [
        'name' => 'OctoberCMS',
        'tagline' => 'Puiki pradžia!'
    ],
    'locale' => [
        'be' => 'Беларуская',
        'bg' => 'Български',
        'cs' => 'Čeština',
        'da' => 'Dansk',
        'en' => 'English (United States)',
        'en-au' => 'English (Australia)',
        'en-ca' => 'English (Canada)',
        'en-gb' => 'English (United Kingdom)',
        'de' => 'Deutsch',
        'el' => 'Ελληνικά',
        'es' => 'Español',
        'es-ar' => 'Español (Argentina)',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'fr-ca' => 'Français (Canada)',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italiano',
        'ja' => '日本語',
        'lv' => 'Latvijas',
        'lt' => 'Lietuvių',
        'nb-no' => 'Norsk (Bokmål)',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt-br' => 'Português (Brasil)',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sv' => 'Svenska',
        'sk' => 'Slovenský',
        'sl' => 'Slovenščina',
        'tr' => 'Türk',
        'zh-cn' => '简体中文',
        'zh-tw' => '繁體中文',
        'vn' => 'Tiếng việt'
    ],
    'directory' => [
        'create_fail' => 'Negalime sukurti direktorijos: :name'
    ],
    'file' => [
        'create_fail' => 'Negalime sukurti failo: :name'
    ],
    'page' => [
        'invalid_token' => [
            'label' => 'Netinkama saugos žyma',
        ],
    ],
    'combiner' => [
        'not_found' => "Bendrintojo failas ':name' nerastas."
    ],
    'system' => [
        'name' => 'Sistema',
        'menu_label' => 'Sistema',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Įvairu',
            'logs' => 'Registrai',
            'mail' => 'Paštas',
            'shop' => 'Parduotuvė',
            'team' => 'Komanda',
            'users' => 'Nariai',
            'system' => 'Sistema',
            'social' => 'Social',
            'events' => 'Įvykiai',
            'customers' => 'Klientai',
            'my_settings' => 'Mano nustatymai'
        ]
    ],
    'theme' => [
        'label' => 'Dizainas',
        'unnamed' => 'Neužvardintas dizainas',
        'name' => [
            'label' => 'Dizaino pavadinimas',
            'help' => 'Užvardinkite dizainą unikaliu kodu. Pavyzdžiui, RainLab.Vanilla'
        ],
    ],
    'themes' => [
        'install' => 'Įdiegti dizainus',
        'search' => 'ieškoti dizainų instaliacijai...',
        'installed' => 'Įdiegti dizainai',
        'no_themes' => 'Kolkas įdiegtų dizainų iš viešosios saugyklos nėra.',
        'recommended' => 'Rekomenduojama',
        'remove_confirm' => 'Ar tikrai norite pašalinti šį dizainą?'
    ],
    'plugin' => [
        'label' => 'Įskiepiai',
        'unnamed' => 'Neužvardintas įskiepis',
        'name' => [
            'label' => 'Įskiepio pavadinimas',
            'help' => 'Užvardinkite įskiepį unikaliu kodu. Pavyzdžiui, RainLab.Blog'
        ]
    ],
    'plugins' => [
        'manage' => 'Tvarkyti įskiepius',
        'enable_or_disable' => 'Įjungti ar išjungti',
        'enable_or_disable_title' => 'Įjungti ar Išjungti įskiepius',
        'install' => 'Įdiegti įskiepius',
        'install_products' => 'Įdiegti produktus',
        'search' => 'ieškoti įskiepių instaliavimui...',
        'installed' => 'Įdiegti įskiepiai',
        'no_plugins' => 'Kolkas įdiegtų šablonų iš viešosios saugyklos nėra.',
        'recommended' => 'Rekomenduojama',
        'remove' => 'Pašalinti',
        'refresh' => 'Perkrauti',
        'disabled_label' => 'Išjungta',
        'disabled_help' => 'Išjungtus įskiepius sistema ignoruos.',
        'frozen_label' => 'Užšaldyti atnaujinimus',
        'frozen_help' => 'Užšaldyti įskiepiai nebus atnaujinami.',
        'selected_amount' => 'Pasirinktą įskiepių: :amount',
        'remove_confirm' => 'Ar tikrai norite pašalinti šį įskiepį?',
        'remove_success' => 'Šie įskiepiai buvo sėkmingai pašalinti.',
        'refresh_confirm' => 'Ar tikrai?',
        'refresh_success' => 'Sėkmingai perkrovėme šiuos įskiepius sistemoje.',
        'disable_confirm' => 'Ar tikrai?',
        'disable_success' => 'Sėkmingai išjungėme šiuos įskiepius.',
        'enable_success' => 'Sėkmingai ijungėme šiuos įskiepius.',
        'unknown_plugin' => 'Įskiepis buvo pašalintas iš failų sistemos.'
    ],
    'project' => [
        'name' => 'Projektas',
        'owner_label' => 'Savininkas',
        'attach' => 'Prijungti Projektą',
        'detach' => 'Atjungti Projektą',
        'none' => 'Jokio',
        'id' => [
            'label' => 'Projekto ID',
            'help' => 'Kaip rasti Projekto ID',
            'missing' => 'Prašome nurodyti Projekto ID, kurį norite naudoti.'
        ],
        'detach_confirm' => 'Ar tikrai norite atjungti Projektą?',
        'unbind_success' => 'Projektas buvo sėkmingai atjungtas.'
    ],
    'settings' => [
        'menu_label' => 'Nustatymai',
        'not_found' => 'Nepavyko rasti nurodytų nustatymų.',
        'missing_model' => 'Nustatymų puslapiui trūksta Modelio aprašo.',
        'update_success' => ':name nustatymai atnaujinti',
        'return' => 'Grįžti į sistemos nustatymus',
        'search' => 'Ieškoti'
    ],
    'mail' => [
        'log_file' => 'Registro failas',
        'menu_label' => 'Pašto konfigūracija',
        'menu_description' => 'Tvarkyti pašto konfigūraciją.',
        'general' => 'Bendrasis',
        'method' => 'Pašto siuntimo metodas',
        'sender_name' => 'Siuntėjo vardas',
        'sender_email' => 'Siuntėjo el.paštas',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP adresas',
        'smtp_authorization' => 'SMTP leidimas reikalingas',
        'smtp_authorization_comment' => 'Pažymėkite šią varnelę jei Jūsų SMTP serveris reikalauja leidimo.',
        'smtp_username' => 'Vartotojas',
        'smtp_password' => 'Slaptažodis',
        'smtp_port' => 'SMTP port',
        'smtp_ssl' => 'SSL jungtis reikalinga',
        'smtp_encryption' => 'SMTP šifravimo protokolas',
        'smtp_encryption_none' => 'Be šifravimo',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail kelias',
        'sendmail_path_comment' => 'Nurodykite kelią į sendmail programą.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun domenas',
        'mailgun_domain_comment' => 'Nurodykite Mailgun domeno vardą.',
        'mailgun_secret' => 'Mailgun slapukas',
        'mailgun_secret_comment' => 'Įveskite savo Mailgun API raktą.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill slapukas',
        'mandrill_secret_comment' => 'Įveskite savo Mandrill API raktą.',
        'ses' => 'SES',
        'ses_key' => 'SES raktas',
        'ses_key_comment' => 'Įveskite savo SES API raktą.',
        'ses_secret' => 'SES slapukas',
        'ses_secret_comment' => 'Įveskite savo SES API slaptą raktą',
        'ses_region' => 'SES regionas',
        'ses_region_comment' => 'Įveskite savo SES regioną (pvz. us-east-1)',
        'drivers_hint_header' => 'Valdikliai neįdiegti',
        'drivers_hint_content' => 'Šis metodas reikalauja, kad būtų įdiegtas ":plugin" įskiepis. Kitokiu atveju paštas nebus siunčiamas.'
    ],
    'mail_templates' => [
        'menu_label' => 'Pašto šablonai',
        'menu_description' => 'Tvarkyti pašto šablonus ir jų išvaizdas, kurie bus siunčiami vartotojams bei administratoriams.',
        'new_template' => 'Naujas šablonas',
        'new_layout' => 'Nauja išvaizda',
        'template' => 'Šablonas',
        'templates' => 'Šablonai',
        'menu_layouts_label' => 'Pašto Išvaizdos',
        'layout' => 'Išvaizda',
        'layouts' => 'Išvaizdos',
        'no_layout' => '-- Be išvaizdos --',
        'name' => 'Pavadinimas',
        'name_comment' => 'Unikalus vardas, kurį naudosite šiam šablonui',
        'code' => 'Kodas',
        'code_comment' => 'Unikalus kodas, kurį naudosite šiam šablonui',
        'subject' => 'Tema',
        'subject_comment' => 'Laiško tema',
        'description' => 'Aprašymas',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Paprastas tekstas',
        'test_send' => 'Siųsti šį laišką',
        'test_success' => 'Bandomasis laiškas išsiųstas.',
        'test_confirm' => 'Siųsti bandomąjį laišką į :email. Testi?',
        'creating' => 'Šablonas kuriamas...',
        'creating_layout' => 'Išvaizda kuriama...',
        'saving' => 'Išsaugome Šabloną..',
        'saving_layout' => 'Išsaugome Išvaizdą...',
        'delete_confirm' => 'Trinti šį šabloną?',
        'delete_layout_confirm' => 'Trinti šią išvaizdą?',
        'deleting' => 'Šablonas trinamas...',
        'deleting_layout' => 'Išvaizda trinama...',
        'sending' => 'Siunčiamas bandomasis laiškas...',
        'return' => 'Grįžti į šablonų sąrašą'
    ],
    'install' => [
        'project_label' => 'Prisegti prie Projekto',
        'plugin_label' => 'Įdiegti įskiepį',
        'theme_label' => 'Įdiegti dizainą',
        'missing_plugin_name' => 'Nurodykite instaliuojamo Įskiepio pavadinimą.',
        'missing_theme_name' => 'Nurodykite instaliuojamo Dizaino pavadinimą.',
        'install_completing' => 'Užbaigiamas diegimo procesas',
        'install_success' => 'Įskiepis įdiegtas sėkmingai'
    ],
    'updates' => [
        'title' => 'Tvarkyti Naujinimus',
        'name' => 'Programos naujinimas',
        'menu_label' => 'Naujinimai ir Priedai',
        'menu_description' => 'Atnaujinti sistemą, diegti ir tvarkyti dizainus bei įskiepius.',
        'return_link' => 'Grįžti į sistmos naujinimą',
        'check_label' => 'Ieškoti atnaujinimų',
        'retry_label' => 'Bandykite dar kartą',
        'plugin_name' => 'Pavadinimas',
        'plugin_code' => 'Kodas',
        'plugin_description' => 'Aprašymas',
        'plugin_version' => 'Versija',
        'plugin_author' => 'Autorius',
        'plugin_not_found' => 'Įskiepis nerastas',
        'core_current_build' => 'Dabartinė sudėtis',
        'core_build' => 'Sudėtis :build',
        'core_build_help' => 'Yra galima nauja sudėtis.',
        'core_downloading' => 'Siunčiami programos failai',
        'core_extracting' => 'Išskleidžiami programos failai',
        'plugins' => 'Įskiepiai',
        'themes' => 'Dizainai',
        'disabled' => 'Išjungta',
        'plugin_downloading' => 'Siunčiame įskiepį: :name',
        'plugin_extracting' => 'Išpakuojame įskiepį: :name',
        'plugin_version_none' => 'Naujas įskiepis',
        'plugin_current_version' => 'Dabartinė versija',
        'theme_new_install' => 'Naujo dizaino įdiegimas.',
        'theme_downloading' => 'Siunčiame dizainą: :name',
        'theme_extracting' => 'Išpakuojame dizainą: :name',
        'update_label' => 'Atnaujinti programą',
        'update_completing' => 'Užbaigiamas naujinimo procesas',
        'update_loading' => 'Įkrauname galimus atnaujinimus...',
        'update_success' => 'Atnaujinimo procesas baigtas',
        'update_failed_label' => 'Atnaujinimas nepavyko',
        'force_label' => 'Naujinti priverstinai',
        'found' => [
            'label' => 'Yra atnaujinimų!',
            'help' => 'Spauskite Atnaujinti programą, kad pradėtumėte atnaujinimo procesą.'
        ],
        'none' => [
            'label' => 'Naujinimų nėra',
            'help' => 'Naujų papildymų neradome.'
        ],
        'important_action' => [
            'empty' => 'Pasirinkite veiksmą',
            'confirm' => 'Patvirtinti atnaujinimą',
            'skip' => 'Praleisti šį įskiepį (tik šįkart)',
            'ignore' => 'Praleisti šį įskiepį (visada)'
        ],
        'important_action_required' => 'Reikalingas veiksmas',
        'important_view_guide' => 'Žiūrėkite papildymo gidą',
        'important_alert_text' => 'Kai kurie atnaujinami reikalauja Jūsų peržiūros.',
        'details_title' => 'Įskiepio informacija',
        'details_view_homepage' => 'Tinklalapis',
        'details_readme' => 'Dokumentacija',
        'details_readme_missing' => 'Dokumentacija nepateikta.',
        'details_changelog' => 'Pakeitimų registras',
        'details_changelog_missing' => 'Pakeitimų registras nepateiktas.',
        'details_upgrades' => 'Papildymo Gidas',
        'details_upgrades_missing' => 'Papildymo instrukcijos nepateiktos.',
        'details_licence' => 'Licencija',
        'details_licence_missing' => 'Licencija nepateikta.',
        'details_current_version' => 'Dabartinė versija',
        'details_author' => 'Autorius'
    ],
    'server' => [
        'connect_error' => 'Nepavyko prisijungti prie serverio.',
        'response_not_found' => 'Atnaujinimų serveris nerastas.',
        'response_invalid' => 'Netinkamas serverio atsakymas.',
        'response_empty' => 'Tuščias serverio atsakymas.',
        'file_error' => 'Serveriui nepavyko pateikti paketo.',
        'file_corrupt' => 'Failas iš serverio yra sugadintas.'
    ],
    'behavior' => [
        'missing_property' => 'Klasė :class turi nurodyti ypatybę $:property naudojamą :behavior funkcionalumo.'
    ],
    'config' => [
        'not_found' => 'Nepavyko rasti konfigūracijos failo :file nurodyto vietai :location.',
        'required' => "Konfigūracija naudojama :location turi pateikti reikšmę ':property'."
    ],
    'zip' => [
        'extract_failed' => "Nepavyko išskleisti šakninio failo ':file'."
    ],
    'event_log' => [
        'hint' => 'Šis registras rodo potencialių klaidų, kurios atsirado programoje, sąrašą. Išimtinos klaidos ir taisymo informacija.',
        'menu_label' => 'Įvykių registras',
        'menu_description' => 'Žiūrėkite sistemos registro žinutes su jų įrašymo laiku ir detalėmis.',
        'empty_link' => 'Išvalyti registrą',
        'empty_loading' => 'Išvalome registą...',
        'empty_success' => 'Registras sėkmingai išvalytas.',
        'return_link' => 'Grįžti į registrą',
        'id' => 'ID',
        'id_label' => 'Įrašo ID',
        'created_at' => 'Data ir Laikas',
        'message' => 'Žinutė',
        'level' => 'Lygis',
        'preview_title' => 'Įvykis'
    ],
    'request_log' => [
        'hint' => 'Šis registras rodo naršyklės užklausų, kurios galimai reikalauja peržiūros, sąrašą. Pavyzdžiui jeigu lankytojas atidaro turinio puslapį, kuris neegzistuoja - tokiu atveju yra sukuriamas įrašas su statuso kodu 404.',
        'menu_label' => 'Užklausų registras',
        'menu_description' => 'Žiūrėti blogas ar nukreiptas užklausas, tokias kaip Puslapis nerastas (404).',
        'empty_link' => 'Išvalyti užklausų registą',
        'empty_loading' => 'Išvalome registą...',
        'empty_success' => 'Užklausų registras sėkmingai išvalytas.',
        'return_link' => 'Grįžti į užklausų registrą',
        'id' => 'ID',
        'id_label' => 'Įrašo ID',
        'count' => 'Skaitiklis',
        'referer' => 'Siuntėjai',
        'url' => 'URL',
        'status_code' => 'Statusas',
        'preview_title' => 'Užklausa'
    ],
    'permissions' => [
        'name' => 'Sistema',
        'manage_system_settings' => 'Tvarkyti sistemos nustatymus',
        'manage_software_updates' => 'Tvarkyti programos naujinimus',
        'access_logs' => 'Žiūrėti sistemos registrus',
        'manage_mail_templates' => 'Tvarkyti pašto šablonus',
        'manage_mail_settings' => 'Tvarkyti pašto nustatymus',
        'manage_other_administrators' => 'Manage other administrators',
        'manage_preferences' => 'Tvarkyti posistemės nustatymus',
        'manage_editor' => 'Tvarkyti kodo redaktoriaus nustatymus',
        'view_the_dashboard' => 'Skydelis',
        'manage_branding' => 'Redaguoti posistemę'
    ],
    'media' => [
        'invalid_path' => "Nurodytas netinkamas kelias: ':path'.",
        'folder_size_items' => 'elementai(as)',
    ],
];
