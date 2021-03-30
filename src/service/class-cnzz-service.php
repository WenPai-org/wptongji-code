<?php
/**
 * CNZZ统计服务
 *
 * @package WenPai\TongJi
 */

namespace WenPai\TongJi\Src\Service;

/**
 * CNZZ统计服务类
 *
 * @since 1.0.0
 */
class Cnzz_Service extends Base_Service implements Service {

    public function echo_count_code() {
        echo <<<html
<div style="display:none;">
<script type="text/javascript" src="https://s4.cnzz.com/z_stat.php?id={$this->meta->get_id()}&web_id={$this->meta->get_id()}"></script>
</div>
html;
    }

}
