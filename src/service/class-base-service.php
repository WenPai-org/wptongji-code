<?php
/**
 * 服务商基类文件
 *
 * @package WenPai\TongJi
 */

namespace WenPai\TongJi\Src\Service;

/**
 * 服务商基类
 *
 * @since 1.0.0
 */
class Base_Service implements Service {

    const HEADER = 'head';

    const FOOTER = 'foot';

    /**
     * @since 1.0.0
     * @var Service_Meta
     */
    protected $meta;

    public function __construct( Service_Meta $meta ) {
        $this->meta = $meta;
    }

    public function register_hook() {
        if ( self::HEADER === $this->meta->get_position() ) {
            add_action( 'wp_head', array( $this, 'echo_count_code' ) );
        } elseif ( self::FOOTER === $this->meta->get_position() ) {
            add_action( 'wp_footer', array( $this, 'echo_count_code' ) );
        }
    }

    public function echo_count_code() {
        /** TODO:该方法应该由子类实现，主要需要做的工作就是将站点ID嵌入到统计代码里面 */
    }

}
