<?php
/**
 * 插件装载文件
 *
 * @package WenPai\TongJi
 */

namespace WenPai\TongJi;

use WenPai\TongJi\Src\Core;

/** 载入Composer的自动加载程序 */
require_once 'vendor/autoload.php';

/** 载入设置项 */
if ( is_admin() && ! ( defined('DOING_AJAX' ) && DOING_AJAX) ) {
    require_once 'setting.php';
}

/** 载入框架核心功能 */
if ( ! is_admin() && ! ( defined('DOING_AJAX' ) && DOING_AJAX) ) {
    $core = new Core(
        wptj_get_option( 'services', 'wptj', [] )
    );
}
