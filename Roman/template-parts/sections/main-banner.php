<?php
    $section_id = get_sub_field('section_id');
    if( !$section_id ) {
        $section_id = 'section-' . get_row_index();
    }
?>
<section id="<?php echo esc_attr($section_id); ?>" class="roman-banner <?php if ( get_sub_field('section_alignment') == 'center' ): ?>roman-banner--centered<?php endif ?> roman-color--<?php echo get_sub_field('text_style'); ?> <?php if ( get_sub_field('background_type') == 'image' ): ?>roman-banner--img-bg<?php endif ?>" 
    style="
    <?php if ( get_sub_field('background_type') == 'image' ): ?>
        background-image: url(<?php echo get_sub_field('background_image'); ?>);
    <?php elseif ( get_sub_field('background_type') == 'color-gradient' ) : ?>
        background: <?php echo get_sub_field('background_gradient'); ?>;
    <?php else : ?>
        background-color: <?php echo get_sub_field('background_color'); ?>;
    <?php endif; ?>
    ">
    <div class="roman-container">
        <div class="roman-row">
            <div class="roman-banner-wrap">
                <?php if ( get_sub_field('headline') ): ?>
                    <h1><?php echo get_sub_field('headline'); ?></h1>
                <?php endif ?>
                <?php if ( get_sub_field('subtitle') ): ?>
                    <h2><?php echo get_sub_field('subtitle'); ?></h2>
                <?php endif ?>    
                <?php if ( get_sub_field('copy') ): ?>
                    <div class="roman-banner-copy"><?php echo get_sub_field('copy'); ?></div>
                <?php endif ?>
                <?php 
                $link = get_sub_field('button');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a rel="nofollow" class="roman-btn roman-btn--<?php echo get_sub_field('button_style'); ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div> 
    </div>
</section>
