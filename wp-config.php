<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'kc_tema' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+<`8dDCsJSQo&$)LY1O:i@s.u(TN{ILti(AuB<^!-eyaMyr{Ted{*@y997AoafZE' );
define( 'SECURE_AUTH_KEY',  '>Bvx<_xP3,}}0|h=lo+l:ja&Ebup5SEo<<o@5H1xsP6S(0IEKQ@pv1^n>UsZ^W%}' );
define( 'LOGGED_IN_KEY',    'DpUdeqr;JB)Gd*4}QeJ=YV5Ak:}RX>GCLeaEL?FaAaW7rxw8lg`.39D[0m{%9d6=' );
define( 'NONCE_KEY',        '?D(.-&[lDfG]@,C3Wu%%74h#gtgi;c9^F2Au]{KfP!w}/kxho|oJ|?)y&T!+~NSx' );
define( 'AUTH_SALT',        '2CMmM)5+C jB&(bJ+&:vk}6Cp>tixh[|KYE.mjy,@F}*N?<hJ_`Y@rkC|(n~%VO|' );
define( 'SECURE_AUTH_SALT', '4IsSpF>_2COKObGkxeJv=jg>Q 5G6^5W uqYshF]:l},hM*b6@F+s&wB!XUOy-Ms' );
define( 'LOGGED_IN_SALT',   'JgN0XsyhK ]d8>.yR^Kugpr=KAY<Y=dZ!:t5[YR&!CC%>oCV.{DqV@iJDEl#)t<X' );
define( 'NONCE_SALT',       '.VmLwth9}f;L7md%?T`a}~`[OZe^W@2gyJ-&$PQoAYAE%s:<+=(0fwLqK)8r;n.n' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
