<?php

/** caminho absoluto para a pasta do sistema **/
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if ( !defined('BASEURL'))
	define('BASEURL', '/carreira-web/aula-07/');

/** caminho no server para o sistema **/
if ( !defined('DATABASE'))
	define('DATABASE', ABSPATH.'inc/database.php');

/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');

// o nome do banco de dados do MySql;
define('DB_NAME','websports');

// Usuário do banco de dados do MySql
define('DB_USER','root');

// Senha do banco de dados do MySql
define('DB_PASSWORD','123');

// nome do host do MySql
define('DB_HOST','localhost');