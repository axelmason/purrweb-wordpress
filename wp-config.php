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
define( 'DB_NAME', 'wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']a1i}/k_jlYlFvoKd: L:QUKxqMC1 Ut[8[n=o$611lT6)g!D#K;`4;E(d1h^?w5' );
define( 'SECURE_AUTH_KEY',  '~9nKUJ=6r)B1! >GKX4<o?spuqT020NY:qM2{ .{,irqT`,9BTAn}**!.XMFu^&h' );
define( 'LOGGED_IN_KEY',    'D,YGZU:LO;$GA<z6ZDp-^oGYD{8byYuNtB!|IHH{nep/kUi$%03QqxR90sq11Wmh' );
define( 'NONCE_KEY',        'WtjpG{qhO0{K sVKOE;<H`/9Dwe|f7q+7xDdB~Acj>~&K#*y}4*+0B*Gn8GF22Ac' );
define( 'AUTH_SALT',        'oS[l:EVLz^wVJgLKgZu8no5BbDKU& c:gXG2{+(3!o)y {)Xl/RAs5_)`}}mdleu' );
define( 'SECURE_AUTH_SALT', '6^dRg`($]0gYGapDV$I13o]N!1#ZI`*5Xqw;As~YS3pe,kQR4gT_QFW,Fx-oIuZw' );
define( 'LOGGED_IN_SALT',   'T[fXbQWe2z{hXd.]/Ga&*Xho?>B~mJJTM;s@m};V73_9l=:A9gwW0n<yPmLp=5z#' );
define( 'NONCE_SALT',       ' P!l>e%JGp,t#Fu7-3fM$.G|h Txv3v]1VZ-p|TzL?VyqoW+i!V3gQ7X.#-![>Z?' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
