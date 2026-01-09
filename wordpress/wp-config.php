<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'bdm294739393_db');

/** MySQL数据库用户名 */
define('DB_USER', 'bdm294739393');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'afgh456258');

/** MySQL主机 */
define('DB_HOST', 'bdm294739393.my3w.com');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r0g=OBd6{$`W$x*hI6?_wS;%e}FM29*s)G$g!%l0b,YT_0lf`J]Xnyko&XYj3ftA');
define('SECURE_AUTH_KEY',  '8?6fKv8u%SHTt<Qzt98oz2TZ0mHP/jWMx][mC!e$N3H2mL*a0r3)b~,PzxD7{0ut');
define('LOGGED_IN_KEY',    'VYin:-n<hx]ts{#M>HbJj]Dw`0I2ma1pml>-J.as)uMkRCS(n>bwtQ){lriz%iDA');
define('NONCE_KEY',        'w9<nF&bs-(`n69aSJl/kk.T_F&h=[_pV$G]FYZpxT.8vH}B8#&ElK-Okw3/VM3<z');
define('AUTH_SALT',        '/wq^@^VQK07e(o U9fU`T/[%[:A*:dt{{um`0PiVsmLF7~iONGN8a(2G[#ti (zm');
define('SECURE_AUTH_SALT', 'zj(N;$>jl;k1$QY/Og{Y92BOlmyG<k{W~&JM}{d@]JaXb;?` 4eCPB>gA1,4Q5$?');
define('LOGGED_IN_SALT',   'qv>td5I24yLzz0mHCBn[#7#JN9{~mzO>IfW=iZclSp`N3OX.DaRX>Z8- `B/3Bi=');
define('NONCE_SALT',       '5$:_N;e$mss`sKJ%J,V8S_M,u3R<:%br&aBh%b9z8c>ZKQg13xpi8{Rv/40(e[lb');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'nwp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
