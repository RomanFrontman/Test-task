<?php
    $section_id = get_sub_field('section_id');
    if( !$section_id ) {
        $section_id = 'section-' . get_row_index();
    }
?>
<section id="<?php echo esc_attr($section_id); ?>" class="roman-icon-box-section">
    <div class="roman-container">
        <div class="roman-section-title<?php if (get_sub_field('title_style')): ?> roman-color--<?php echo get_sub_field('title_style'); ?><?php endif; ?>">
            <?php if (get_sub_field('section_title')): ?>
                <h2><?php echo get_sub_field('section_title'); ?></h2>
            <?php endif; ?>
        </div>
        <div class="roman-icon-box-grid">
            <?php if( have_rows('icon_boxes') ): ?>
                <?php while( have_rows('icon_boxes') ): the_row(); ?>
                    <div class="roman-icon-box">
                        <?php $icon = get_sub_field('icon'); ?>
                        <?php if( !empty( $icon ) ): ?>
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                        <?php endif; ?>
                        <div class="roman-icon-box-item">
                            <h3 class="roman-icon-box-title"><?php the_sub_field('title'); ?></h3>
                            <p class="roman-icon-box-description"><?php the_sub_field('description'); ?></p>
                            <div class="roman-btn-block roman-btn-block--<?php echo get_sub_field('button_alignment'); ?>">
                                <?php 
                                $link = get_sub_field('button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a rel="nofollow" class="roman-btn roman-btn--primary<?php echo get_sub_field('button_style'); ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>