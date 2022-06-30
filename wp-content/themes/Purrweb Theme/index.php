<?php get_header(); ?>
<div class="page__wrapper">
    <main>
        <h1>Все товары</h1>
        <div class="cards__wrapper">
            <?php
            $posts = get_posts([
                'post_type' => 'products'
            ]);
            if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
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
    </main>
    <?php the_widget('Foo_Widget'); ?>
</div>
<?php get_footer(); ?>