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
define( 'DB_NAME', 'munizart' );

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
define( 'AUTH_KEY',         '&e6-]IjH+AUmeXqZ88X[Dg*/$cF=gOmc4!qV*^>I8lgiIugKY_+5.tj8!]W6A=4]' );
define( 'SECURE_AUTH_KEY',  'iceT&*K>I`XDj&M~#i5viNo@QC~+WQ*ryCZoT:6UfFUOSWs.I{;beR&d=0<u*Z4a' );
define( 'LOGGED_IN_KEY',    'GE*yfmi3x+[mfMAQ02n)hW?s?6P,O_4je+ :]^byt{@DoMVmFhCSYmC4t=g>qpq+' );
define( 'NONCE_KEY',        'Yn`.mR:1+a]+kqvI8>Oy`c(ghCX|TD82pi*^}G_^hfyGTnxgTnRB~W;RKZe^Kofx' );
define( 'AUTH_SALT',        '-]z;JYVvk#?c+b=N)$k9Xj:thZ!irs{sW4~.qDUkI&&3$aWNDl/d!tc;*n8zg}To' );
define( 'SECURE_AUTH_SALT', 'D!Y:,;]|zsIMe[})=fh+pr.$PAj) yP+Pf@xD!,cq@%U-G+#02]QXh)H~(hcV:T%' );
define( 'LOGGED_IN_SALT',   'Tw>NkyHfbp.1 WLl~9I3Z]DFZy%TbCWctxz/i]`e!7P63}hd(%H#+2dz$]8C-(3s' );
define( 'NONCE_SALT',       'LZc/#>zhGZAve=t)*R<m+h+}dUC|ck4f|uYZBt2yKT`g*0-HXk+@(nk5oK8Y8nhN' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'art_';

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
