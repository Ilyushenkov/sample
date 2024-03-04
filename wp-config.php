<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'admin_79836' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin_79836' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '0a5272e2f3cfe8315caa' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3eJ:*r$ xbK6rd5sI!Fk37 n{^-O9Qx@eC,M4dWdEY:S_fO5q.]Qu-iC6~g%O4R%' );
define( 'SECURE_AUTH_KEY',  'QCMXbrQDL6GprW4*F>4&WyW c~{P!PRac`d]PQ}@2nL[*Tz&[x@~c$XJOwekp_I!' );
define( 'LOGGED_IN_KEY',    'LOKW7~c$d#9]ckBCRnBSJ}s.E^be)wJqfyNz4qH]$X2Jm0nXBp#LaP~m5_bxwdw3' );
define( 'NONCE_KEY',        'k*duO#.l1:yJ1DOM_P~;0[cJJ<*brs^c>jWel,$kB4:>DnoA[yo8C!?{3X#9AMBZ' );
define( 'AUTH_SALT',        'y;HjlD~7:Ef<_:2AC%GV76xkwtdK=bN#VR-W6#_@|rVA$yF,j`G3d.S4Ut.{!rJ2' );
define( 'SECURE_AUTH_SALT', 'r<_+l^^k+PfVk?i*xH*h&^/Zr>YXbK~U-SHKIu?6G]pw?D:F/t8.7PF^xq:%]TsN' );
define( 'LOGGED_IN_SALT',   'pCNMTFu9iE@bh0I6E{(lQ]/7Ob0-]:}/n@TM.mN3?1+7kuONgp6$MSbI:m9<M|qG' );
define( 'NONCE_SALT',       '1$z)lpbdfi%<kkb<~]5~jRq2Lh_BMJu;cgu4%o&;TrOc>V$4)=3{,j&KW4k#7]cs' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ifetB_';


/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';