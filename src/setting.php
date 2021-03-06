<?php
/**
 * 设置项注册文件
 *
 * @package WenPai\TongJi
 */

namespace WenPai\TongJi\Src;

use WenPai\Framework\Setting;

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
                            'La51'   => '51啦',
                        )
                    ),
                    array(
                        'name'        => 'id',
                        'type'        => 'text',
                        'label'       => '统计ID',
                        'placeholder' => '51c7408*************ad45aa19d',
                        'desc'        => <<<html
<ul style="margin-top: 5px; color: #646970;">
    <li>查看帮助：<a href="https://wptongji.com/blog/baidu-tongji">百度统计ID的获取方法</a></li>
    <li style="display: none;">查看帮助：<a href="https://wptongji.com/blog/cnzz-tongji">CNZZ统计ID的获取方法</a></li>
    <li style="display: none;">查看帮助：<a href="https://wptongji.com/blog/google-analytics">谷歌统计ID的获取方法</a></li>
    <li style="display: none;">查看帮助：<a href="https://wptongji.com/blog/51la-tongji">51啦统计ID的获取方法</a></li>
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
                        'name'              => 'level',
                        'label'             => '优先级',
                        'placeholder'       => '1',
                        'desc'              => '优先级范围0~99，优先级高的代码将被优先执行',
                        'min'               => 0,
                        'max'               => 99,
                        'step'              => '1',
                        'type'              => 'number',
                        'default'           => '1',
                    ),
                ),
            ),
        ),
    ),
) );

add_action( 'admin_footer', function () {
    echo <<<html
<script>
function selectedIndex(){
$("section.card select option:selected").each(function (){
       var i = $(this).index();
       $(this).parent().parent().parent().next().find("li").eq(i).show().siblings().hide();
})
$('section.card select').change(function () {
    var i = $(this).get(0).selectedIndex;
    $(this).addClass('select').siblings().removeClass('select');
    $(this).parent().parent().next().find("aside ul li ").eq(i).show().siblings().hide();
});
};
selectedIndex();
$('.add-card').on('click', function () {
selectedIndex();
})
</script>
html;
} );
