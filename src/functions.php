<?php
/**
 * 公共函数
 *
 * @package WenPai\TongJi
 */

function wptj_get_option( string $option, string $section, $default = '' ) {
    $options = get_option( WPTJ_PREFIX . "_{$section}" );

    if ( isset( $options[ $option ] ) ) {
        return $options[ $option ];
    }

    return $default;
}
