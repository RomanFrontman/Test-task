<?php
    $section_id = get_sub_field('section_id');
    if( !$section_id ) {
        $section_id = 'section-' . get_row_index();
    }
?>
<section id="<?php echo esc_attr($section_id); ?>" class="roman-single-image-section">
    <div class="roman-container">
    <div class="roman-section-title<?php if (get_sub_field('title_style')): ?> roman-color--<?php echo get_sub_field('title_style'); ?><?php endif; ?>">
        <?php if (get_sub_field('section_title')): ?>
            <h2><?php echo get_sub_field('section_title'); ?></h2>
        <?php endif; ?>
    </div>
        <?php if ( get_sub_field('image_link') ): ?>
            <a rel="nofollow" href="<?php echo get_sub_field('image_link'); ?>" class="roman-single-image">
                <?php 
                $image = get_sub_field('image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </a>
        <?php else : ?>
            <div class="roman-single-image">
                <?php 
                $image = get_sub_field('image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>  
        <?php endif ?>
    </div>
</section>