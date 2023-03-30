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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'webpage' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'celino3x' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123456' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'gF(!25TfMvIuSHkhF46XV]i=&PEr:nQF]3gwM3`!hQx*lg`3#`Bd6Mpp])t]2Cbr' );
define( 'SECURE_AUTH_KEY',  'D++Sa@xvDT)ULp<kkUzwHjlOU:G|P/(6lg7?aG%8ZOkv9aT9Z0pQ>JL<d`H$BUm~' );
define( 'LOGGED_IN_KEY',    '5PO/>D%;Yb#G Io-#{U(I;j3Dx$. R$ bti))2SwiL%sBIaK5l~I$~^RkbW$fl`6' );
define( 'NONCE_KEY',        '6dFhL(U{flk6S!K@y=csKQ@Sx@)S3#?Pe1X1Q&atPaY)B,;`.k=D`:SJ/<dF9G&C' );
define( 'AUTH_SALT',        '$KrT~LC+Po[/^R4%oe$*Bim}Tq3t`2*#Zw6ZlGX5UP6)3[ywN/C,b-[$$JK`4D<P' );
define( 'SECURE_AUTH_SALT', 'oy<b|Ld#^eOXfhY`WyOl}j{CDF=Xz^R>t P-U0_Q&m9#v#dq29;0@3h%@c{4FgYL' );
define( 'LOGGED_IN_SALT',   'XWbeH%x}3Ny|vHW6P>)pIYJtASC(K8_M_yL)eej`B=-o#4Ad.X@<E1_`!^t4+QF]' );
define( 'NONCE_SALT',       'D?8ib6K=@L fht2mv}dmX}9tyR=YZr)5FTjy&>qNcb-HeQOsA=D{?i[KcN~;*&[I' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
