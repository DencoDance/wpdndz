<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wpdndz');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '|3YdeLu==7&b* {-lN+NyaN[;,6Zx-}]-!]_Bk}+#Jh{BLNyXN wY(U-)_p+9UN+');
define('SECURE_AUTH_KEY',  '}Dkx]z[i~juYeaM}]cfLOUaZUZ1q.8F4wZInGEjPb#vVo9M=_Q>(w1}56T&MNT}&');
define('LOGGED_IN_KEY',    'G(kQ>9,-wxNX/E^m2Q;*rePK/#(E{lHumaZ8j6whfbG<{7/M+O[,TZ9<iG.<=kh<');
define('NONCE_KEY',        'r%GD!8{yw<W*f%[#7-w}c,Bf7UD;|@G@LX6iy]dh=cy2Ff<OUM1i$A_#-5H#8!,v');
define('AUTH_SALT',        'U$6 -Np~L]q#LE,~cDz@_`(1Dq2+y2 -^]q*lvj&iXVQ}4i[!$x<b->+yS_|&/9d');
define('SECURE_AUTH_SALT', 'd4}8QUg~90luw%A<CUe^^||Jk>o<98QL]GMH A+ij]QUS^C6xqNZ7i`d<(!>}+9s');
define('LOGGED_IN_SALT',   'nAy.sao1g>pg{x.VpwYptxS79-$x^,rJ,/t~r(-1.z;)]g]~3Bp7IPN,[R5`fu(Q');
define('NONCE_SALT',       'g|*RSCkg|>S.|6PxZ:j?/p?+cQcGV=YvCW+F8V/<?El(znP0C]V2O8)YN)g7gfsr');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wpdndz_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
