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
define( 'DB_NAME', 'evaluation03' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'evaluation03' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'evaluation03' );

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
define( 'AUTH_KEY',         'K1&R6?cV)doj#CvD Sbs.Jy#qrg_p)Mawd1ct%WQ___Nr5W,y-bb(`=BNG}Vk)[v' );
define( 'SECURE_AUTH_KEY',  '5Rq6*(c$7[qT z-K,:~gN01|bGUp]D^o<svK8o_2cLB]gmlVUiOm{sg%)hW{U6$^' );
define( 'LOGGED_IN_KEY',    '-e5j7{+1kbI<;Q,|J*yUoe/O+l7F8.Lt h>`HAz8YB$/8F??.I~=@nsX|TxyyU2q' );
define( 'NONCE_KEY',        'YfVZ{Fd?Z2$Ap1V-IB7t8y1kjL-)V^JSW^~Q/@7KUG5{9zE1xRuiD%diri=D:s74' );
define( 'AUTH_SALT',        '0ClI!{>h}C=<%]F9I.{z/`f5AYjm<BzAM[TpUfx2c1K(Qp!S,NG4c>hURn;`:fc{' );
define( 'SECURE_AUTH_SALT', 'z#.4Q.K7^sgeOx(27};&q(qL:^:Y#x:v%lr,poug_Baw$pg)VFMS.WW3_v|4$s <' );
define( 'LOGGED_IN_SALT',   '-;N!],bII7UijWhv[D~M+gvw2o~Y[q|*j|GPD-$u>.g%rizPq>XDY-ath14N]>?{' );
define( 'NONCE_SALT',       'bl2;Q$[wG#3cmES8fr k#RsQC+w%z.0&~?zj3?wFnVQM8N$x3r<wQws[;~b3,3!z' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = '03_';

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
