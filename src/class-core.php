<?php
/**
 * 插件核心功能
 *
 * @package WenPai\TongJi
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
        $services = $this->servce_order( $services );
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

    private function servce_order( array $services ): array {
        $len = count($services);
        for( $i = 1; $i < $len; $i++ ) {
            for( $j = 0; $j < $len - $i; $j++ ){
                if( $services[$j]['level'] < $services[$j + 1]['level'] ) {
                    $tmp = $services[$j];
                    $services[$j]   = $services[$j+1];
                    $services[$j+1] = $tmp;
                }
            }
        }

        return $services;
    }

}
