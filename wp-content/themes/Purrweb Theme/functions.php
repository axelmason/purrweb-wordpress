<?php

add_theme_support('post-thumbnails');
add_theme_support('widgets');
// add_theme_support('widgets-block-editor');

add_action('wp_enqueue_scripts', 'enqueue_scripts');

function enqueue_scripts()
{
    wp_enqueue_style('main-css', get_template_directory_uri().'/style.css', array(), '1.0');
    wp_enqueue_script('jquery', get_template_directory_uri().'/media/js/jquery-3.6.0.js', array('jquery'));
    wp_enqueue_script('jcarousel-js', 'https://sorgalla.com/jcarousel/dist/jquery.jcarousel.min.js', array('jquery'));
    wp_enqueue_script('main-js', get_template_directory_uri().'/media/js/main.js', array('jquery'), '1.0');
}


add_action('init', 'register_cpt_products');

// Функция register_cpt_products
function register_cpt_products() {

    $labels = array(
        'name' => _x('Товары', 'products')
    );

    $args = array(
        'labels' => $labels,
        'supports' => array('title', 'editor','thumbnail'),
        'taxonomies' => array('products'),
        'menu_icon' => 'dashicons-buddicons-activity',
        'public' => true
    );

    register_post_type('products', $args);
    
    flush_rewrite_rules();
}


/**
 * Adds Foo_Widget widget.
 */
class Foo_Widget extends WP_Widget {
 
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'side-widget', // Base ID
            'side-widget', // Name
            array( 'description' => __( 'side-widget', 'text_domain' ), ) // Args
        );
    }
 
    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) { ?>
    <section class="sidebar">
        <h1>Все товары</h1>
        <div class="cards__wrapper">
            <?php
            $posts = get_posts([
                'post_type' => 'products',
                'numberposts' => 3
            ]);
            if ($posts) : foreach ($posts as $post) : the_post(); ?>
                    <div class="card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="card-image">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="card-content">
                            <div class="card-name">
                                <?php
                                if (get_field('name_for_users')) {
                                    echo get_field('name_for_users');
                                } else {
                                    echo the_title();
                                }
                                ?>
                            </div>
                            <div class="card-price">Цена: <?php echo get_field('price'); ?></div>
                            <button class="card-button" onclick='alert(`Вы кликнули на запись с заголовком "<?php echo the_title() ?>"`)'>Нажми на меня</button>
                        </div>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </section>
    <?php }
 
    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        if ( isset( $instance[ 'count' ] ) ) {
            $count = $instance[ 'count' ];
        }
        else {
            $count = 3;
        }
        ?>
        <p>
            <?php print_r($count); ?>
            <label for="<?php echo $this->get_field_name( 'count' ); ?>"><?php _e( 'Count:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>" type="number" value="<?php echo esc_attr( $count ); ?>" />
         </p>
    <?php
    }
 
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['count'] = ( !empty( $new_instance['count'] ) ) ? strip_tags( $new_instance['count'] ) : '';
 
        return $instance;
    }
 
} // class Foo_Widget


// register Foo_Widget widget
add_action( 'widgets_init', 'register_foo' );
     
function register_foo() { 
    register_widget( 'Foo_Widget' ); 
}