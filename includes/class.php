<?php

class My_Custom_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'my_custom_widget',
            'My Custom Widget',
            array('description' => 'A simple custom widget')
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget']; // 展示在widget前面的东西<div>

        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // widget content output
        echo 'Hello, World!';

        echo $args['after_widget']; // 展示在widget后面的东西</div>
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'New title';
        $tag_id = !empty($instance['tag_id']) ? $instance['tag_id'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input
                    class="widefat"
                    id="<?php echo $this->get_field_id('title'); ?>"
                    name="<?php echo $this->get_field_name('title'); ?>"
                    type="text"
                    value="<?php echo esc_attr($title); ?>"
            >

            <input
                    class="widefat"
                    id="<?php echo $this->get_field_id('tag_id'); ?>"
                    name="<?php echo $this->get_field_name('tag_id'); ?>"
                    type="text"
                    value="<?php echo esc_attr($tag_id); ?>"
            >
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['tag_id'] = (!empty($new_instance['tag_id'])) ? strip_tags($new_instance['tag_id']) : '';
        return $instance;
    }
}

