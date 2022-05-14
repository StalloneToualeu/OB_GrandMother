<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als „wp-config.php“ mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * Diese Datei beinhaltet diese Einstellungen:
 *
 * * Datenbank-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Datenbank-Einstellungen - Diese Zugangsdaten bekommst du von deinem Webhoster. ** //
/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define( 'DB_NAME', 'ob_grandmother_db' );

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem Datenbank-Benutzernamen.
 */
define( 'DB_USER', 'root' );

/**
 * Ersetze passwort_hier_einfuegen mit deinem Datenbank-Passwort.
 */
define( 'DB_PASSWORD', '' );

/**
 * Ersetze localhost mit der Datenbank-Serveradresse.
 */
define( 'DB_HOST', 'localhost' );

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 *
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aS_o/N>_~+]dp[S[*Mh6  GMP aH$NhwByUcd=*TsX:*NR`Ofc{tL])Y%ns#l86>' );
define( 'SECURE_AUTH_KEY',  'qYiH{H^Rsq%Kl`68hj~7~}+BU5~ws*V&.m,yD+%a}FKOZxwi=:=1+jxNF0]>zDjI' );
define( 'LOGGED_IN_KEY',    'LyW3G;+Ez}M%*4*$Ruy DhoUV*4ZDq+S~PArVt%Vxc#CT*x/(mcl=8CuX)5.X.|z' );
define( 'NONCE_KEY',        'FUge@.NvDQ^>MfwPoCU4a|TQ0)BpRt*T1/zOx?v(*~hp_t$;8:*&D%jt^6g&sVcp' );
define( 'AUTH_SALT',        '>7*t$<G#tL/lU#vT4L`FVge]RVy6egE%;~j^@E|feR20s+vnpR8Y~+!s%QH><rp|' );
define( 'SECURE_AUTH_SALT', '-e4QbW@2C53,m?Lu|]VUu|#[=ECue(UnZcY7_cRuJ`XnN]H2y5:L`W+ls[~?fjhr' );
define( 'LOGGED_IN_SALT',   '}a#6KrQhl:_zUfjAqMQHt,zgs#u*os#*t]%mX^mOyM<r{c=#=qjI~6}L$T7z%P<n' );
define( 'NONCE_SALT',       'yW<e$tX!O&)wyT=}VrcINDEq#4}fzhDg[O*)WoGf*(H;:xG{LHgE8s%(=h$X@ZN=' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Füge individuelle Werte zwischen dieser Zeile und der „Schluss mit dem Bearbeiten“ Zeile ein. */



/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once ABSPATH . 'wp-settings.php';
