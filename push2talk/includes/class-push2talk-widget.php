<?php

class push2talk_Widget extends WP_Widget {
 
    function __construct() {
        parent::__construct( false, __( 'PushToTalk Button', 'push2talk' ) );
    }
 
    function widget( $args, $instance ) {
        $html = file_get_contents(plugin_dir_path( __DIR__ ) . 'public/widget/build/index.html');
        $html = str_replace('href="/static', 'href="'. plugin_dir_url( __DIR__ ) .
            'public/widget/build/static', $html);
        $html = str_replace('src="/static', 'src="'. plugin_dir_url( __DIR__ ) .
            'public/widget/build/static', $html);

        echo '<script>';
        echo 'var pluginDirUrl = "' . plugin_dir_url( __DIR__ ) . '";';
        echo '</script>';
        echo $html;
    }

    function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['primary'] = ( ! empty( $new_instance['primary'] ) ) ? sanitize_text_field( $new_instance['primary'] ) : '';
        $instance['secondary'] = ( ! empty( $new_instance['secondary'] ) ) ? sanitize_text_field( $new_instance['secondary'] ) : '';

        return $instance;
    }
 
    function form( $instance ) {

        echo '<h3>Options</h3>';
        echo '<div class="colours">';

        $primary = ! empty( $instance['primary'] ) ? $instance['primary'] : esc_html__( '#222222', 'push2talk' );
        $secondary = ! empty( $instance['secondary'] ) ? $instance['secondary'] : esc_html__( '#333333', 'push2talk' );
        
        echo '<p>';
        echo esc_attr_e( 'Primary Colour', 'push2talk' );
        echo '<input 
                class="widefat"
                id="' . esc_attr( $this->get_field_id( 'primary' ) ) . '"
                type="text"
                name="' . esc_attr( $this->get_field_name( 'primary' ) ) . '"
                value="' . esc_attr( $primary ) . '"
            ';
        echo ' />';
        echo '</p>';

        echo '<p>';
        echo esc_attr_e( 'Secondary Colour', 'push2talk' );
        echo '<input 
                class="widefat"
                id="' . esc_attr( $this->get_field_id( 'secondary' ) ) . '"
                type="text"
                name="' . esc_attr( $this->get_field_name( 'secondary' ) ) . '"
                value="' . esc_attr( $secondary ) . '"
            ';
        echo ' />';
        echo '</p>';


        echo '</div>';
    }
}
 
add_action( 'widgets_init', 'push2talk_register_widget' ); 
function push2talk_register_widget() {
    register_widget( 'push2talk_Widget' );
}
