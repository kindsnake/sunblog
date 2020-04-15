<?php 

//WordPress 恢复链接管理功能
add_filter('pre_option_link_manager_enabled', '__return_true');
//调用后台侧栏widget
if (function_exists('register_sidebar'))
    register_sidebar();
?>