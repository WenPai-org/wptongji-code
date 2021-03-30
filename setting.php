<?php
/**
 * 设置项注册文件
 *
 * @package WenPai\TongJi
 */

namespace WenPai\TongJi;

use Wenpai\Framework\Setting;

Setting::create_options( WPTJ_PREFIX, array(
    'menu_title' => '文派统计',
    'menu_slug'  => 'wptj',
    'network'    => true,
) );

Setting::create_section( WPTJ_PREFIX, array(
    array(
        'id'     => 'wptj',
        'title'  => '文派统计',
        'fields' => array(
            array(
                'name'    => 'services',
                'label'   => '统计服务',
                'type'    => 'card',
                'fields'  => array(
                    array(
                        'name'    => 'service',
                        'label'   => '服务商',
                        'desc'    => '选择一个统计服务商',
                        'type'    => 'select',
                        'default' => 'baidu',
                        'options' => array(
                            'Baidu'  => '百度',
                            'Cnzz'   => 'CNZZ',
                            'Google' => '谷歌',
                            'Bing'   => '必应',
                        )
                    ),
                    array(
                        'name'        => 'id',
                        'type'        => 'text',
                        'label'       => '统计ID',
                        'placeholder' => '51c7408*************ad45aa19d',
                        'desc'        => <<<html
<ul>
    <li>百度统计的ID获取方法参考：https://xxx.com</li>
    <li style="display: none;">CNZZ统计的ID获取方法参考：https://xxx.com</li>
    <li style="display: none;">谷歌统计的ID获取方法参考：https://xxx.com</li>
    <li style="display: none;">必应统计的ID获取方法参考：https://xxx.com</li>
</ul>
html
                    ),
                    array(
                        'name'    => 'position',
                        'type'    => 'radio',
                        'label'   => '位置',
                        'desc'    => '选择统计代码插入的位置',
                        'default' => 'head',
                        'options' => array(
                            'head' => '页头',
                            'foot' => '页尾',
                        ),
                    ),
                    array(
                        'name'        => 'level',
                        'type'        => 'text',
                        'label'       => '优先级',
                        'placeholder' => '1',
                        'desc'        => '优先级范围0~99，优先级高的代码将被优先执行',
                    ),
                ),
            ),
        ),
    ),
) );

add_action( 'admin_footer', function () {
    echo <<<html
<script>
$('section.card select').change(function () {
    var i = $(this).get(0).selectedIndex;
    $(this).addClass('select').siblings().removeClass('select');
    $(this).parent().parent().next().find("aside ul li ").eq(i).show().siblings().hide();
});
</script>
html;
} );
