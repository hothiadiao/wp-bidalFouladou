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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bidalFouladou' );

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
define( 'AUTH_KEY',         'zD30zX@(2VpX~2 cF%r-xVeGH?SKWYf!BE0H!5h,xYUOy*0D7f8;Da!K%d#pvuNf' );
define( 'SECURE_AUTH_KEY',  'XDB`n`>:Bzsi*Q`&WU~e+,Cj>]X3lsdg:)]#6)K.2o{Qo8&wds9k6!8aCsi+*/8M' );
define( 'LOGGED_IN_KEY',    '=PWej>A9p*C$l-F1` gXYSUfy>~GF/dEQOdF$7C.: p/mw)=v2zdzs1s/qGP_t$8' );
define( 'NONCE_KEY',        '`l@pI4T2cG&5X%LK%>n>6=#%pSxjxS~SS&o-!+&1GP{&=8r.wS6oVPvA#|s3]xrK' );
define( 'AUTH_SALT',        'ta6-w&mOk]Ys[alj^K-fkN(6Gca.3_8m{[Tllz`N,+ .K9;+]oA{xi{KPPQ?tiZ2' );
define( 'SECURE_AUTH_SALT', 'R/@B~,cPr#qGf-r+[t?yk! R/?;-Y<n@R(XU=.rjG{y=_-(2:l7ipc5yB_KK~{>e' );
define( 'LOGGED_IN_SALT',   ')*;npyb?*|t=7[|o(m&V)k|/h.A#caKN`ieYm4}FH50p>LF6Xo zc&-oB7TKs4=Y' );
define( 'NONCE_SALT',       'w?Jr]iC*Wu&sLUcm|A_{B?w!%i3IazB]~TuG5bz.4q/y7d&VFP)8:_u+<J8upi~v' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
