<?php
/**
 * 公共函数
 *
 * @package WenPai\TongJi
 */

if ( ! function_exists( 'wptj_get_option' ) ) {
    function wptj_get_option( string $option, string $section, $default = '' ) {
        $options = is_multisite() ? get_site_option( WPTJ_PREFIX . "_{$section}" ) : get_option( WPTJ_PREFIX . "_{$section}" );

        if ( isset( $options[ $option ] ) ) {
            return $options[ $option ];
        }

        return $default;
    }
}
