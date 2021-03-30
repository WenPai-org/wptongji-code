<?php
/**
 * 统计服务对象生成的工厂类文件
 *
 * @package WenPai\TongJi
 */

namespace WenPai\TongJi\Src\Factory;

use WenPai\TongJi\Src\Service\Base_Service;
use WenPai\TongJi\Src\Service\Service_Meta;

/**
 * 用于生成统计服务对象的工厂类
 *
 * @since 1.0.0
 */
class Service_Factory {

    public static function get_service( Service_Meta $meta ): Base_Service {
        $class_name = "WenPai\\TongJi\\Src\\Service\\{$meta->get_name()}_Service";

        return new $class_name( $meta );
    }

}
