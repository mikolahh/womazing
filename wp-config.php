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
define( 'DB_NAME', 'womazing' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'v,y#s@*g*Sd+KeW@VBS- ?YT9lxx5R2nqVqFXVPe}9mia.Igei)0Uj&`DYjbai: ' );
define( 'SECURE_AUTH_KEY',  'F1SHC0<DB$#}ul+$SiN,i7}5uHU&3x^}FbuHX^x#EdZ$KVLNvxo_iQ088Uo]&r*L' );
define( 'LOGGED_IN_KEY',    '|<OJxX,oU;<B5Jt[58mgUf+|btJ6mTT=O,FJ[{0Zk[`:M!2wOGjIlAYBM8X.VOXQ' );
define( 'NONCE_KEY',        'xfzowC}F qdsj]-FNsC_0x]X1&qo~H($/-oG9L3?WSt&,00f}f9OEiPMRrfA4yC3' );
define( 'AUTH_SALT',        'dR=n* 7<#/i+j@[qNt:]QR<C+O40|xx146PbR{qdazf#/xCn4~j5Ct-opr[%&iy-' );
define( 'SECURE_AUTH_SALT', '.;|W^NUd`%AyW9OqJYn9/%xpkG|MgJ-9|&!DX^9/}Gusuu*hG*-4rhXdvO][ILs!' );
define( 'LOGGED_IN_SALT',   '<ZmbC|/WzG>2?s*E$9>O`>h_wI!,~-0^vV0ll-vRC|j4ie{M)hgoKt=*14+I+C0G' );
define( 'NONCE_SALT',       '{WBRG?;Z QTirse;(67,G~c{iN9:S5DX:??VvVF7hZdEd?yd;w=Wjkn3HP!@fqUN' );

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
