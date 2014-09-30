<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser.
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'wordpress');

/** O nome do utilizador de MySQL */
define('DB_USER', 'root');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', '');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VG{DV@94dTJ0J[^%3F*fX@*3!XmA<?!Oqzh7~zT[O^ 9vVcdwtNf</s&8p/$n]W_');
define('SECURE_AUTH_KEY',  '-Fx_ZIy,r]|YsV`=f~xu9UO[c~:Oda]:Bn!-b-hKPE!lJ1Teh<tsqrQ(b-Ujun;7');
define('LOGGED_IN_KEY',    'G<<RIxr<+sw7N6|}/WgP`4*,.R%M0hzIxv1RGCe}#n2ShLRaKG[ cB)<pOzY8:<B');
define('NONCE_KEY',        'H3tHJ0:|Kmvb9z6 npK,160`bR_[o|Q$nf+Brpe-m[21n>!0/c-E>4{H8M53+pZ}');
define('AUTH_SALT',        '&OrkLC;HYdP[%~gugIe$.20w._nBO1a[~1,+th-jjeSZHe~Ff)a,mf4vA:*U-^*O');
define('SECURE_AUTH_SALT', 'Z;&;(oU9_^QRg1Q7AHmhFqXA+|:;-oQ*(UeB?80Cj.tFed>X}FO^(P-OBxgD8Gnk');
define('LOGGED_IN_SALT',   '% y0TgkN87J|l#9 Yki@-;()v15%AL05&[G%=.^9VB@B#fmJxx}fpV-lXC#<Gew6');
define('NONCE_SALT',       'T+vE>|cey>,37h&j,<rpQ&!_Ko4yKqF_|-/vA-X[]-]j|.souHq]@=TX9a]0.OxL');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'ss_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
