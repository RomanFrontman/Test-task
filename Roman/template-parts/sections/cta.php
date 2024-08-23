<section id="<?php echo esc_attr($section_id); ?>" class="roman-cta roman-color--<?php echo get_sub_field('text_style'); ?> <?php if ( get_sub_field('background_type') == 'image' ): ?>roman-cta--img-bg<?php endif ?>" 
    style="
        <?php if ( get_sub_field('background_type') == 'image' ): ?>
            background-image: url(<?php echo get_sub_field('background_image'); ?>);
        <?php elseif ( get_sub_field('background_type') == 'color-gradient' ): ?>
            background: <?php echo get_sub_field('background_gradient'); ?>;
        <?php else : ?>
            background-color: <?php echo get_sub_field('background_color'); ?>;
        <?php endif ?>
    ">
    <div class="roman-container">
        <div class="roman-cta-wrap <?php if ( get_sub_field('cta_appearance') == 'space_between' ): ?>roman-cta-wrap--space_between<?php endif ?>">

            <?php if ( get_sub_field('headline') ): ?>
                <h2 class="roman-cta-headline <?php if ( get_sub_field('cta_appearance') == 'space_between' ): ?>roman-cta-headline--space_between<?php endif ?>">
                    <?php echo get_sub_field('headline'); ?>  
                </h2>
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
</section>