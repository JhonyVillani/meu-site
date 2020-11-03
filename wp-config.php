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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jhonyvillani_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>h|2tkFupzNUN4.P<q@._M?iIISo^MByb)}]ES0xIM&J%iph.st<aj9px&{/sST!' );
define( 'SECURE_AUTH_KEY',  ' siTlVr8~DUVeD*`TczV]JOGc$ O~Z8_++Qlx2$ 1:#T.5|5 fNNGG(%cP}Ydw3#' );
define( 'LOGGED_IN_KEY',    'eA3so %Lj=vwjs,?wyZaxdQ>x3UYm?6a$rIxo7oT&> :HdAS1s&DSKo0;}Z3d=}t' );
define( 'NONCE_KEY',        '~]`o,s?o2[ksTx^!syb2px.cE1ha0bE.ap<#=Q:YSAD5+L<G[jN7$v` |iiJ+wd=' );
define( 'AUTH_SALT',        'q-iz-/||}{w9izHJw:Q+MYDDc.c9kD]FS*JgG&QfS$RJowOVKy^[$^@t;VH,LpI:' );
define( 'SECURE_AUTH_SALT', '=cn13W8Es0Ih!v~bmQT]_]SPwuB:gMA}7RDkzLv<G4L6$sQ<uh):#9M-qCcG*P7(' );
define( 'LOGGED_IN_SALT',   '120E3lz.rAI:W`V/CEG^njK=Sqzo5C:DsP`Szh9p}8(jMTJ,GZCGEK=N]{kY[zt7' );
define( 'NONCE_SALT',       '!f[|N%J//DreUFUu{0bDYj(yvz?d73&D!PVxiEsCR1KFG.t$>kRi?z^o%z7TY4(D' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
