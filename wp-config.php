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
define( 'AUTH_KEY',         'C? z0Vbj! =HX@dn2cOwMus2SJo6w.S:J!T,a8VmgPaZDGAu p~T=}rLOp0@l:){' );
define( 'SECURE_AUTH_KEY',  'JRbYB9xx~qBQHDHej0X=Ms&alYVB$?&[Bo$&4B}ol(=KrUfw;IMq2O@Asu]q!%Q+' );
define( 'LOGGED_IN_KEY',    '5gNeu2mlZXwMr%fAM-iH^u`f_IM-Gj,?<x/]Xr7{1XVIN2A|IE:&~]xv+1^/FKZT' );
define( 'NONCE_KEY',        'Q4*K~-.3pN.Y,)I;F`?;79br}D)|b@QqU3c{dDvq^Ek&[rLRt[j}lt7gDrcyd[u&' );
define( 'AUTH_SALT',        'PNL%fQkIVx {C[KJ0}jXPHnZE@!y!gt64uzk;!2GA.Jq_SuGLo)bQ_w>c?o/Z$n6' );
define( 'SECURE_AUTH_SALT', 'C*w]fkqnF@7`6W]dlx8.YklWs?I2+JZzQ]d|35S`@I}$ua!7cYT8y6(lN$)Mt:-u' );
define( 'LOGGED_IN_SALT',   'v$uBh04WC&B8FWk[#h*QYg}@+MJ(r!73<V=!U$*9c^e}vQ#U}_ugg$,rpqQrE&3J' );
define( 'NONCE_SALT',       'zBsHn$H=1-l9E7/FCG1nYx{mU0,eo<y|~Nrj2lg>,|VDRnA&M#/@XX=r4RWzPugU' );

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
