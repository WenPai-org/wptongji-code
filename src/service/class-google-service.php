<?php
/**
 * Google统计服务
 *
 * @package WenPai\TongJi
 */

namespace WenPai\TongJi\Src\Service;

/**
 * Google统计服务类
 *
 * @since 1.0.0
 */
class Google_Service extends Base_Service implements Service {

    public function echo_count_code() {
        echo <<<html
<script async src="https://www.googletagmanager.com/gtag/js?id={$this->meta->get_id()}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '{$this->meta->get_id()}');
</script>
html;
    }

}
