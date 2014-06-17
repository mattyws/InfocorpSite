<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'infocorp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'mattyws022');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J:2WDo](}09eZiP3)6FYmg}TiywP[h+nX%})9eD]ppi<^LvWOz70X+25U$W-*fBP');
define('SECURE_AUTH_KEY',  '|hj+&][m5ne=F=&4Ln+/1uHL3pK6TS7~o7iv@IG4w3GX|g0PLUb^[/$WDCCLltGn');
define('LOGGED_IN_KEY',    '5-NP4q4edY/-#tHhyf0U%Cd{@-IT32~;T]*Ic[<H5;S=xTRaS-tQixS@AqEl)%X}');
define('NONCE_KEY',        'p0gQbx aft<7*FA`rzlrrg#=2Et60O];sa*+GqCn/Set+f8[&Z%^&+70?-F7o2Gm');
define('AUTH_SALT',        'p[L%~nat,k9y;34B p_(xv`kr<ACS3oZ5(GBu4|=LJ>]FxO+lw|-!@,u<(!j4l@I');
define('SECURE_AUTH_SALT', '+B3.Xl|PSgq7UqmcaA1GB&r[vPZx*f,.Ir85<pqU^E>e[*MH6x&/;[M|75;]%Ge(');
define('LOGGED_IN_SALT',   '+5to}+X<Mj~:H`N`^zSdBW6b?f#|lTl|K5|s?[TV]@!8 o-QE&+VecT%h<RHN5n6');
define('NONCE_SALT',       'Vh:IQ|,PC*eLF9|TFB6Nn|I0-WWvBI-O(HFU1<^zCJgBwG|s7Pw]x/{R[.2vpvS+');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'infocorp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
