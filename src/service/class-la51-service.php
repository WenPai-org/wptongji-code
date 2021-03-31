<?php
/**
 * 51啦统计服务
 *
 * @package WenPai\TongJi
 */

namespace WenPai\TongJi\Src\Service;

/**
 * 51啦统计服务类
 *
 * 51啦统计的类名之所以是La51是因为数字不能作为类名的开头
 *
 * @since 1.0.0
 */
class La51_Service extends Base_Service implements Service {

    public function echo_count_code() {
        echo <<<html
<script type="text/javascript" src="//js.users.51.la/{$this->meta->get_id()}.js"></script>
html;
    }

}
