<?php 
    $prefix = rand();?>
        <style>
            .roman-spacer-<?php echo $prefix ?> {
                height: <?php echo get_sub_field('desktop_height') ?>px;
                background: <?php echo get_sub_field('background') ?>;
            }
            @media only screen and (max-width : 991px) {
                .roman-spacer-<?php echo $prefix ?> {
                    height: <?php echo get_sub_field('tablet_height') ?>px;
                }
            }
            @media only screen and (max-width : 575px) {
                .roman-spacer-<?php echo $prefix ?> {
                    height: <?php echo get_sub_field('mobile_height') ?>px;
                }
            }
        </style>
<div class="roman-spacer roman-spacer-<?php echo $prefix ?>">
    
</div>