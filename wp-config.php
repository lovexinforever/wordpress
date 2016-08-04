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
define('DB_NAME', 'wp');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '1eY8)Uv/va+Tr%Z+7#vh 6.3cfcf)Q_0*H|y6Uz_p$0+6UsC-W~+oPU%t?d{sL%n');
define('SECURE_AUTH_KEY',  ' #w5zj3o-Ya-/I6*/rDO|}nS|QeFjL5]TYSrR9|F{{<_{>kn`/2<f&-~YWW7s:9[');
define('LOGGED_IN_KEY',    '7qXg} XJ1}Y%+PU23nM=:kz!tAi`^y[x-HU*}M^|l9N|J2WD2<Wv&|d9BC721[|^');
define('NONCE_KEY',        '!Wz*_|p&0*G*83/uH[4@?;_,x)fuV@O7PI@~-7*whXKQlfzC$`(%a4PT$ J[Joi;');
define('AUTH_SALT',        'K?n&JboL&sxQIN+x+JDV!}AtFDy|n@a$_~6+b9$*W4NMBFh[3=W2{*6$R2o4%qDN');
define('SECURE_AUTH_SALT', '!4[$UeS~b_g!gr=!s`q6-c*&o#-;fsO!Fwy!*a.d}E<Sxsm(FcDD9KI$l0wR|(5T');
define('LOGGED_IN_SALT',   '.Ga_{|{?*XD%F@s50GTnLbk(=S[&g|`R[G6Q+P6nw1u:_SZm(N==|bkPA+:}gO4b');
define('NONCE_SALT',       'doi_}E[V*5y=JJp+:8|rT<(&sc+@*h+=rJBJ?wJM4HD]).N5T6D@,B.YRFw+.V-5');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

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
