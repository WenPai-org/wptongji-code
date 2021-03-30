<?php
/**
 * 百度统计服务
 *
 * @package WenPai\TongJi
 */

namespace WenPai\TongJi\Src\Service;

/**
 * 百度统计服务类
 *
 * @since 1.0.0
 */
class Baidu_Service extends Base_Service implements Service {

    public function echo_count_code() {
        echo <<<html
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?{$this->meta->get_id()}";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
html;
    }

}
