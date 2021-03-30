<?php
/**
 * 统计服务的服务商接口文件
 *
 * @package WenPai\TongJi
 */

namespace WenPai\TongJi\Src\Service;

/**
 * 统计服务的服务商接口
 *
 * @since 1.0.0
 */
interface Service {

    public function __construct( Service_Meta $meta );

    public function register_hook();

    public function echo_count_code();

}
