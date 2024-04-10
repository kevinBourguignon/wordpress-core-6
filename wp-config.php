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
define( 'DB_NAME', 'wordpress_salon' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'XHE#v}e_ZF9.:b_/(9$0f<[Ck-8M+ .n6&7t|w#7WgyE)dp03|E/IQ%]=z#{K36&' );
define( 'SECURE_AUTH_KEY',  '>g|^r/NRk!88`4g)&g;:.+@6dy_SawJ%%=<k{EXt:29BpnTNloSmj7QARHg6XiLN' );
define( 'LOGGED_IN_KEY',    'rp5[hV#nQiS1n&]!`oR ]! UYg(*n@FjdB$y)WCVc!.$+$p1k)DVl0nAN#{q0Vaz' );
define( 'NONCE_KEY',        'C0hyY8r2WB:AX(2HCpDEe|V5=HD?BQ(s{c#Av2} X0TQ(MpI7rkXV&O6]A!itH`#' );
define( 'AUTH_SALT',        '[~WuAAqkn+i.zOEEo@(-Nie i%-E~sKJG+}nw^8d)GFM``wcwGycjEpdpo0.A7>v' );
define( 'SECURE_AUTH_SALT', '`+LD2DGXJY mO}gUZNDVIG!OOe6HF2V&z!hW,Uw |Vb>7A;Mtwlw,1wE?B50g!.9' );
define( 'LOGGED_IN_SALT',   ',_>Ph{>d*aiF!wrHWcEZ5rFNESl/uHF0J#y8s9?-;Q0O? }PFDindhN$45%B ckR' );
define( 'NONCE_SALT',       'M&%{w7R$H9oodz>//K.SWmDf n^GBFR4]chOx`p9z7GeB7ae&PVY@- ty*pH.8T4' );
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
