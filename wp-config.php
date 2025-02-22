<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#wD9{0Gm6`VbIpHTLz9* !1UQ7v/]0?~RI$g%<A/#=4_KePv.Gy(JS.C`DUMg!%G' );
define( 'SECURE_AUTH_KEY',  'M!5v!1J~bEG;jDN2-|6IZ/q?}jnuD.#;>o=Ddxvt!qGjGFEQYh-[_s=BcjjVyRlO' );
define( 'LOGGED_IN_KEY',    '0)qz8^!(= Yo1y!>G7u^[vlot@Xd7Rj7uW}iKA98]`hua+6SeDz?I*`U?Gj{pwb#' );
define( 'NONCE_KEY',        'U4R+JroSezXyzm}!~D-UYPA](xcbh#f1>vnWW%WaMsW^D))0x%TXtsdI-c2)dz9]' );
define( 'AUTH_SALT',        'jy0moY}viB<~2O^^S7)`Qjye{JRC98`F[y}@4T%4}Sc$=lAsS4A<,!Lgz+jlfb v' );
define( 'SECURE_AUTH_SALT', '}TL9K>JBQ]V17CFhjY& ODDvB/`zP$uPq5!!;78ydXt8->j%+ w,cjwjsC)oN-k2' );
define( 'LOGGED_IN_SALT',   'SN}xM5Pjwjlj959wh2z5q2q=7z.Y};JfxzSU9Z~SmTJ>$A8wzoHtz~{SJ&|_&SK-' );
define( 'NONCE_SALT',       'vneRKnPO+PzF@hIV_FYzS.YlQPyp;;D$H!G-wi4:)g^ Iq,14gbMCo^`9q-q[WU0' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
