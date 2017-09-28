<?php
class epFrontPageButtonWidget extends WP_Widget
{
  public function __construct()
  {
    $id_base = 'ep_front_page_button_widget';
    $name = 'EP: Front Page Button';

    $class_name = 'epFrontPageButtonWidget';
    $description = __('Everyday Publishing\'s boxes for the front page.');
    $widget_options = array('classname' => $class_name, 'description' => $description);

    $control_options = array();

    parent::__construct($id_base, $name, $widget_options, $control_options);
  }

  public function widget($args, $instance)
  {
    $widget_title = apply_filters('widget_title', $instance['title']);
    $widget_page = get_permalink($instance['ep_page_id']);

    echo $args['before_widget'];

    if (!empty($widget_title))
    {
      echo $args['before_title'] . $widget_title . $args['after_title'];
      echo '<div  class="ep-widget-button"><a href="' . $widget_page . '">LEARN MORE</a></div>';
    }

    echo $args['after_widget'];
  }

  public function form($instance)
  {
    $title = esc_html('New Title', 'text_domain');
    $page_id = 2;

    if (!empty($instance['title']))
    {
      $title = $instance['title'];
    }

    if (!empty($instance['ep_page_id']))
    {
      $page_id = $instance['ep_page_id'];
    }

    echo '<p>';
    echo '<label for="' . esc_attr( $this->get_field_id( 'title' ) ) . '">' . esc_attr_e( 'Title:', 'text_domain' ) . '</label>';
    echo '<input class="widefat" id="' . esc_attr( $this->get_field_id( 'title' ) ) . '" name="' . esc_attr( $this->get_field_name( 'title' ) ) . '" type="text" value="' . esc_attr( $title ) . '">';
    echo '</p>';

    $args = array('depth' => 0, 'child_of' => 0, 'selected' => $page_id, 'echo' => 1, 'name' => esc_attr( $this->get_field_name( 'ep_page_id' ) ), 'id' => esc_attr( $this->get_field_id( 'ep_page_id' ) ), 'class' => 'widefat', 'show_option_none' => null, 'show_option_no_change' => null, 'option_none_value' => null);

    echo '<p>';
    echo '<label for="' . esc_attr( $this->get_field_id( 'ep_page_id' ) ) . '">' . esc_attr_e( 'Page: ', 'text_domain' ) . '</label>';
    wp_dropdown_pages($args);
    echo '</p>';
  }

  public function update($new_instance, $old_instance)
  {
    $instance = array();

    if (!empty($new_instance['title']))
    {
      $instance['title'] = strip_tags($new_instance['title']);
    }
    else
    {
      $instance['title'] = '';
    }

    $instance['ep_page_id'] = $new_instance['ep_page_id'];

    return $instance;
  }
}
