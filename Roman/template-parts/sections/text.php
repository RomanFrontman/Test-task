<?php
    $section_id = get_sub_field('section_id');
    if( !$section_id ) {
        $section_id = 'section-' . get_row_index();
    }
?>
<section id="<?php echo esc_attr($section_id); ?>" class="roman-text-section">
    <div class="roman-container">
        <div class="roman-section-title<?php if (get_sub_field('title_style')): ?> roman-color--<?php echo get_sub_field('title_style'); ?><?php endif; ?>">
            <?php if (get_sub_field('section_title')): ?>
                <h2><?php echo get_sub_field('section_title'); ?></h2>
            <?php endif; ?>
        </div>
        <div class="roman-text-copy">
            <?php echo get_sub_field('copy'); ?>
        </div>
        <div class="roman-btn-block roman-btn-block--<?php echo get_sub_field('button_alignment'); ?>">
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

    <div class="mai-popup">
        <div class="popup-inner df fd-c jc-sb ai-c">
            <p class="mai-wpcf7-response-output"></p>
            <button class="popup-button">OK</button>
        </div>
    </div>
</section>