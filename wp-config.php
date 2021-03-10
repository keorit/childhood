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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TANp]G.er]UYN6?mvetnCvgfG0aBW(C^R#}+}@=MgNFj|Nf,R}C9RF+psblaRVPm' );
define( 'SECURE_AUTH_KEY',  '!P_9Vdc4C:NMF;6c!]:0=N&GBQLX+jTcTJF$fCAP_@v+:U9*pz[s>jwO9/Dr2M7w' );
define( 'LOGGED_IN_KEY',    'diSJ31rWoY0WL:8t/HhvDjDRP>!+s^Q4Jr-F$G>/$DcgbT>BXkT`Fi,fY-5r@7TR' );
define( 'NONCE_KEY',        'mg$Ln!gRJl>sgQ9N^lH2BX_)+633 ]#W+Un9R=<-omVNI(j?|[XeX`V;FF{B%4bW' );
define( 'AUTH_SALT',        'm~0$9.VbAu[t/6ac_3Q/Bj}8)y2{$3?hN<f;jrMX++_/SxB>(wg+yjx@3q89NpJo' );
define( 'SECURE_AUTH_SALT', '>Br-=hd=E}JcE*:[8(y%BB4|*6t?M>Z,pHsSDRyA)=1bL^DUV:O1H+I!KZ}sCUsZ' );
define( 'LOGGED_IN_SALT',   '#W:PT $Gi3P9<]:ng&l@4wy1BsJ=10|H2a#AKde((SZe&])(znW?j2l;yrT)!oA%' );
define( 'NONCE_SALT',       'NS?G5+l#T]2c:VKT1vI$Qt<U0r#Zg6Rdh*uUB9pF>8D/T{ohz0)[>(Xl&DBM`4<2' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
