<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'WordpressTest');

/** Имя пользователя MySQL */
define('DB_USER', 'WordpressTest');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'WordpressTest');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B~TH]V;dtieeccT05iYm<OQoM%DX8%l1&EBONWiq/9#<(Mi!,@:h+uQE]I-q^K#H');
define('SECURE_AUTH_KEY',  'Dqm.hKZhW/9**u+H$_V6z8vPBt{h@%ooZh[,JVnKT1Nc#%_BQP[K~u!|@D[Fu(}}');
define('LOGGED_IN_KEY',    'G-{8-)-KL`4@l^dX40<eEF2a={N4K[hQ?x.W&<X)?o6KmEoQ%V_j*;e&nNw4cHMy');
define('NONCE_KEY',        ' p&q&*M-aevxATcVNJGgeh(B-D+SL9zp{sn771WnCnwFYlgJO/)5TlviYtD%SAaQ');
define('AUTH_SALT',        '=r &F>rK &yPp0|5x6SOy&IC>v!J8&RQqje4iD32rsp(5jfms7X:zIQC[Pw;xmFZ');
define('SECURE_AUTH_SALT', 'Gkwt8&Ef&N*BRKgkfpIA;n@89SH%O0pd7Ue#(EvTODcNq-fuTfjb;Ryji0N+cTFA');
define('LOGGED_IN_SALT',   'q$H=w8tvqO6B /$|z),ru&%<`|jk}pO]&Tiv.SU=G$R+Q2H-{LtE>tN3T(^&,RZ~');
define('NONCE_SALT',       'UHJ[cnP;XEDg^AZ(K+ifn{dT&tDNb@Ze?ZWm<Y{~Nuv^LkLX]tkQ]#f=7+C7N=k|');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
