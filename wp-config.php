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
 * * Настройки MySQL
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
define( 'DB_NAME', 'WordPressOne' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'WordPressOne' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         ': P0yInX)bzdHO{3-dNoOq]4veN0fb4>#L9ACJhsGXrCtv|8$?[6d>VdZ6N;ehf2' );
define( 'SECURE_AUTH_KEY',  '}>Q`w8jY)uB@5_)e-o>EK =$@}jJ`(qb<^Jnb,{&zd(#Cpgt6f}4^Jt}9dK?43j.' );
define( 'LOGGED_IN_KEY',    '=cnHdsh28-*JC>lWy$}A^Dt#ZaIkzD/rhN`g%>G|]p8{#Gd1X(2xsja@^{xn.F3g' );
define( 'NONCE_KEY',        'EZU+R`mXsgbD#;o)^(n[qS`)_&I5rKQpd}CRAlf)4I?z4fY&KM-deC7jbnmMRcdj' );
define( 'AUTH_SALT',        '#U uFY6yV[wcwHoA^AG8y|TxzlPYb+F>AoE#L7T!p@Xl<x.jP6A@]f&&&,G<3(Vx' );
define( 'SECURE_AUTH_SALT', '$az?-e^p~9YOm#oyI/Yh[wb^mM)VuH:a$0fMSk_}rl;i|qj*~3OCGz&Cx6t~!1pD' );
define( 'LOGGED_IN_SALT',   '9hM^C@eBZMF6^fz%|HkT/rH/aULg%c)uh&{~)rt)PcDDx;u129|1q~G{WYg<0=>4' );
define( 'NONCE_SALT',       '%+lT%q .@R6Ie.j1`Z<|N<G}W:DZF3t=+gl 3+xAR+dS]>o~6#EF-heg!us`^fPB' );

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
