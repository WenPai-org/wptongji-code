<?php
/**
 * 插件核心功能
 */

namespace WenPai\TongJi\Src;

use WenPai\TongJi\Src\Factory\Service_Factory;
use WenPai\TongJi\Src\Service\Service_Meta;

/**
 * 核心功能类
 *
 * @since 1.0.0
 */
class Core {

    public function __construct( array $services ) {
        foreach ( $services as $service ) {
            $meta = new Service_Meta();
            $meta->set_name( $service['service'] ?? '' );
            $meta->set_id( $service['id'] ?? '' );
            $meta->set_position( $service['position'] ?? '' );
            $meta->set_level( (int)$service['position'] ?? 1 );

            $service_obj = Service_Factory::get_service( $meta );
            if ( $service_obj ) {

                $service_obj->register_hook();
            }
        }
    }

}
