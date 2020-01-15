<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XFFuluBr`KEjwN9FM|4J5rLfIm$|SnerR:Xp XFEkpR7wxGa/3vEV}h{6xGx6q#r' );
define( 'SECURE_AUTH_KEY',  ',eJ%O|}ug:LZ`ksMO2^yg&R8!w=lk)+i^|J%K9ortz|{u>zwQ5d;/qX_%>|^LA_Z' );
define( 'LOGGED_IN_KEY',    '8KdOy!!:I*9HOMOi+EtVj`U?js*<p>jwj7()ys_aek.=pu[J6=]bcVx%.cLrb%C6' );
define( 'NONCE_KEY',        '3^s.RKchG][zPZN{+)?.!GuOJ+UVf7[O?knQ{o07`#um_7fb~@qp/~Km-os/f:>/' );
define( 'AUTH_SALT',        '>?foMm9TD/IK(<P+Jo`FO+d 6p*%@HSh50+vE&z|}A{I2BtQ~|!I?MrJSugeGbm*' );
define( 'SECURE_AUTH_SALT', 'V9h;j0y@>C^UJS .2XPL=/8L,;wRC#UJ&f9im1Bu-VqS-fB[,v1>J3*0aVnOLn~*' );
define( 'LOGGED_IN_SALT',   't*EB56P3wRCoF/y6h(@ZR7,r4^}oRVFN}O4V{^XS,>`Xb6UsA??Dw t#+xaTvci_' );
define( 'NONCE_SALT',       '}}Q%LTsFCSc{MeDlbfB?Qv;q[@UOZ/}EF7#K1cMpgeW99+j(sILL3&P}B;gx23)I' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
