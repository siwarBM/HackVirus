<?php

return [
    'plugin' => [
        'name' => 'Blog',
        'description' => 'Eine robuste Blog Plattform.'
    ],
    'blog' => [
        'menu_label' => 'Blog',
        'menu_description' => 'Blog Artikel bearbeiten',
        'posts' => 'Artikel',
        'create_post' => 'Blog Artikel',
        'categories' => 'Kategorien',
        'create_category' => 'Blog Kategorie',
        'tab' => 'Blog',
        'access_posts' => 'Blog Artikel verwalten',
        'access_categories' => 'Blog Kategorien verwalten',
        'access_other_posts' => 'Blog Artikel anderer Benutzer verwalten',
        'access_import_export' => 'Blog Artikel importieren oder exportieren',
        'access_publish' => 'Kann Artikel veröffentlichen',
        'delete_confirm' => 'Bist du sicher?',
        'chart_published' => 'Veröffentlicht',
        'chart_drafts' => 'Entwurf',
        'chart_total' => 'Gesamt'
    ],
    'posts' => [
        'list_title' => 'Blog Artikel verwalten',
        'filter_category' => 'Kategorie',
        'filter_published' => 'Veröffentlichte ausblenden',
        'filter_date' => 'Date',
        'new_post' => 'Neuer Artikel',
        'export_post' => 'Exportiere Artikel',
        'import_post' => 'Importiere Artikel'
    ],
    'post' => [
        'title' => 'Titel',
        'title_placeholder' => 'Neuer Titel',
        'content' => 'Inhalt',
        'content_html' => 'HTML-Inhalt',
        'slug' => 'Slug',
        'slug_placeholder' => 'neuer-artikel-slug',
        'categories' => 'Kategorien',
        'author_email' => 'Autor E-Mail',
        'created' => 'Erstellt',
        'created_date' => 'Erstellzeitpunkt',
        'updated' => 'Aktualisiert',
        'updated_date' => 'Aktualisierungszeitpunk',
        'published' => 'Veröffentlicht',
        'published_date' => 'Veröffentlichungszeitpunkt',
        'published_validation' => 'Bitte gebe das Datum der Veröffentlichung an',
        'tab_edit' => 'Bearbeiten',
        'tab_categories' => 'Kategorien',
        'categories_comment' => 'Wähle die zugehörigen Kategorien',
        'categories_placeholder' => 'Es existieren keine Kategorien. Bitte lege zuerst Kategorien an!',
        'tab_manage' => 'Verwalten',
        'published_on' => 'Veröffentlicht am',
        'excerpt' => 'Textauszug',
        'summary' => 'Zusammenfassung',
        'featured_images' => 'Zugehörige Bilder',
        'delete_confirm' => 'Möchtest du diesen Artikel wirklich löschen?',
        'close_confirm' => 'Der Artikel ist noch nicht gespeichert.',
        'return_to_posts' => 'Zurück zur Artikel-Übersicht'
    ],
    'categories' => [
        'list_title' => 'Blog Kategorien verwalten',
        'new_category' => 'Neue Kategorie',
        'uncategorized' => 'Allgemein'
    ],
    'category' => [
        'name' => 'Name',
        'name_placeholder' => 'Neuer Kategorie Name',
        'description' => 'Beschreibung',
        'slug' => 'Slug',
        'slug_placeholder' => 'neuer-kategorie-slug',
        'posts' => 'Artikel',
        'delete_confirm' => 'Möchtest du die Kategorie wirklich löschen?',
        'return_to_categories' => 'Zurück zur Kategorie-Übersicht.',
        'reorder' => 'Kategorien sortieren'
    ],
    'menuitem' => [
        'blog_category' => 'Blog Kategorie',
        'all_blog_categories' => 'Alle Blog Kategorien',
        'blog_post' => 'Blog Artikel',
        'all_blog_posts' => 'Alle Blog Artikel',
        'category_blog_posts' => 'Blog Kategorie Artikel'
    ],
    'settings' => [
        'category_title' => 'Blog Kategorie-Übersicht',
        'category_description' => 'Zeigt eine Blog Kategorien-Übersicht.',
        'category_slug' => 'Slug Parametername',
        'category_slug_description' => 'Der URL-Routen-Parameter welcher verwendet wird um die aktuelle Kategorie zu bestimmen. Wird von der Standard-Komponente benötigt um die aktive Kategorie zu markieren.',
        'category_display_empty' => 'Leere Kategorien anzeigen',
        'category_display_empty_description' => 'Kategorien zeigen welche keine Artikel besitzen.',
        'category_page' => 'Kategorien Seite',
        'category_page_description' => 'Name der Kategorien-Seiten-Datei für die Kategorien Links. Wird von der Standard-Komponente benötigt.',
        'post_title' => 'Blog Artikel',
        'post_description' => 'Zeigt einen Blog Artikel auf der Seite.',
        'post_slug' => 'Slug Parametername',
        'post_slug_description' => 'Der URL-Routen-Parameter um den Post mittels "Slug" zu bestimmen.',
        'post_category' => 'Kategorien-Seite',
        'post_category_description' => 'Name der Kategorien-Seiten-Datei für Kategorie-Links.',
        'posts_title' => 'Blog Artikel-Übersicht',
        'posts_description' => 'Stellt eine Liste der neuesten Artikel auf der Seite dar.',
        'posts_pagination' => 'Blättern Parametername',
        'posts_pagination_description' => 'Der erwartete Parametername welcher für Seiten verwendet wird.',
        'posts_filter' => 'Kategorien-Filter',
        'posts_filter_description' => 'Bitte gebe ein Kategorien-Slug oder URL-Parameter an, mittels den die Artikel gefiltert werden. Wenn der Wert leer ist, werden alle Artikel angezeigt.',
        'posts_per_page' => 'Artikel pro Seite',
        'posts_per_page_validation' => 'Ungültiger "Artikel pro Seiten" Wert',
        'posts_no_posts' => 'Keine Artikel Nachricht',
        'posts_no_posts_description' => 'Nachricht welche dargestellt wird wenn keine Artikel vorhanden sind. Dieser Wert wird von der Standard-Komponente verwendet.',
        'posts_order' => 'Artikel Sortierung',
        'posts_order_description' => 'Attribute nach welchem Artikel sortiert werden.',
        'posts_category' => 'Kategorien-Seite',
        'posts_category_description' => 'Name der Kategorien-Seiten-Datei für "Veröffentlicht in" Kategorien-Links. Dieser Wert von der Standard-Komponente verwendet.',
        'posts_post' => 'Artikel Seite',
        'posts_post_description' => 'Name der Artikel-Seiten-Datei für die "Erfahre mehr" Links. Dieser Wert für von der Standard-Komponente verwendet.',
        'posts_except_post' => 'Artikel ausschließen',
        'posts_except_post_description' => 'Gebe direkt die ID/URL oder eine Variable mit der Artikel-ID/URL an um diesen Artikel auszuschließen. Dieser Wert für von der Standard-Komponente verwendet.',
        'posts_except_categories' => 'Kategorien ausschließen',
        'posts_except_categories_description' => 'Gebe eine kommagetrennte Liste von Kategorie-Slugs oder eine Variable mit einer solchen Liste an um deren Artikel auszuschließen. Die Dieser Wert für von der Standard-Komponente verwendet.',
        'rssfeed_blog' => 'Blog Seite',
        'rssfeed_blog_description' => 'Name der Artikel-Seiten-Datei für die Links. Dieser Wert für von der Standard-Komponente verwendet.',
        'rssfeed_title' => 'RSS-Feed',
        'rssfeed_description' => 'Erstellt einen RSS-Feed mit Artikeln aus dem Blog.',
        'group_links' => 'Links',
        'group_exceptions' => 'Ausnahmen'
    ]
];
