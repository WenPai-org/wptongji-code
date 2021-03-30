<?php
/**
 * 统计服务元数据
 *
 * @package WenPai\TongJi
 */

namespace WenPai\TongJi\Src\Service;

/**
 * 统计服务元数据类
 *
 * @since 1.0.0
 */
class Service_Meta {

    /**
     * @since 1.0.0
     * @var string
     */
    private $name;

    /**
     * @since 1.0.0
     * @var string
     */
    private $id;

    /**
     * @since 1.0.0
     * @var string
     */
    private $position;

    /**
     * @since 1.0.0
     * @var int
     */
    private $level;

    public function set_name( string $name ) {
        $this->name = $name;
    }

    public function set_id( string $id ) {
        $this->id = $id;
    }

    public function set_position( string $position ) {
        $this->position = $position;
    }

    public function set_level( int $level ) {
        $this->level = $level;
    }

    public function get_name(): string {
        return $this->name;
    }

    public function get_id(): string {
        return $this->id;
    }

    public function get_position(): string {
        return $this->position;
    }

    public function get_level(): int {
        return $this->level;
    }

}