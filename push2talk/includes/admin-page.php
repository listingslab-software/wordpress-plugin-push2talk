<?php

function push2talk_admin(){
    
    // echo '<h1>Push2talk</h1>';
    // // echo '<h2>Reaching out with accuracy</h2>';
    // echo '<ul>';

    // echo '<li>
    //         <a class="button" href="' . admin_url() . '/widgets.php">Add Widget</a>
    //       </li>';
    // echo '</ul>';
    
    $html = file_get_contents(plugin_dir_path( __DIR__ ) . 'admin/manager/build/index.html');
    $html = str_replace('href="/static', 'href="'. plugin_dir_url( __DIR__ ) .
        'admin/manager/build/static', $html);
    $html = str_replace('src="/static', 'src="'. plugin_dir_url( __DIR__ ) .
        'admin/manager/build/static', $html);
    echo $html;
 //    echo '<div class="footer">';


 //    echo '<span class="footerIcon"><a 
 //                href="https://listingslab.com/work/wordpress/plugins/push2talk/"
 //                target="_blank"
 //                rel="noopener">';
 //    echo '<img 
 //                src="' . plugins_url('push2talk') . '/admin/svg/listingslab.svg" 
 //                alt="Listingslab" />';
 //     echo '</a></span>';

     
 //    echo '<span class="footerIcon"><a 
    //      href="https://github.com/listingslab-software/wordpress-plugin-push2talk"
    //      target="_blank"
    //      rel="noopener">';
    // echo '<img 
    //          src="' . plugins_url('push2talk') . '/admin/svg/github.svg" 
    //          alt="Github" />';
    // echo '</a></span>';

    
 //     echo '</div>';


}













 //    echo '<h2>Example JSON</h2>';
 //     echo '<div class="json">';
 //    $example_form = file_get_contents(plugin_dir_path( __FILE__ ) . 'exampleForm.js');
 //    echo '<pre>';
 //    print_r($example_form);
 //    echo '</pre>';
 //    echo '</div>';