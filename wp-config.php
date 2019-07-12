<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'animaux-perdus-lehavre.eu' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WmdsU- `npx:rM!WvX)#{ixgAeFo5Kit6(aRZr<n`#Rj|{JrueEk`1{2<-P8626x' );
define( 'SECURE_AUTH_KEY',  'exU^>jg]f{J1~f!7oD}rii5e!koue:fdDa*j?4Ec5@F6xC-I$^A0ga_#(`rNI]wK' );
define( 'LOGGED_IN_KEY',    '8~1Y;wjV&Gn#K+=BQ:tzfEL8p*v`_CTr,Qps%,hKM-_;dY%+=O)v^oX(*SP(Fxb|' );
define( 'NONCE_KEY',        'LO^Ya0Q|M78.x33`9^Ad&5}=:KSk^I>!@~DY+A3na*5vdBVD=}uQeEA8WOqV?/#R' );
define( 'AUTH_SALT',        '+`~Sjch+osNoG>2[bGq:I?_8QtiKksl5|@3Fw=?*hO,p0[0|iT]yC2qQl~TzaOtp' );
define( 'SECURE_AUTH_SALT', 'Apvbjv81Jx]~;}OlqM@D]bu`bAP5eUPKg0e-_T5f9;qJb8Bi0Y?.p?]!zlz.jYl#' );
define( 'LOGGED_IN_SALT',   'gZ3BW}o/a=8u.cPolKhLf#`Enw!`7+_~ zL NO].dRihKuvJD%|7+/.ebScn_61:' );
define( 'NONCE_SALT',       '|fJ`/~yvQ2+]`AJ7Bw(3YA0Y+/5ST0<u J>i}-tgZ_@gh/]5PT`U=c3M<L611/E ' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
