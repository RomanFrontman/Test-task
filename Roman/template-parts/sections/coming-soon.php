<?php
$title = get_sub_field('title');
$description = get_sub_field('description');
$sub_title = get_sub_field('sub_title');
$description_2 = get_sub_field('description_2');
$form_id = get_sub_field('form');

?>

<section class="coming-soon">
    <div class="container">
        <div class="coming-soon-main">
            <?php if ($title) { ?>
                <h1 class="coming-soon-title">
                    <?php echo $title; ?>
                </h1>
            <?php } ?>
            <?php if ($description) { ?>
                <p class="coming-soon-description">
                    <?php echo $description; ?>
                </p>
            <?php } ?>
        </div>
        <div class="coming-soon-bottom">
            <div class="coming-soon-card">
                <?php if ($sub_title) { ?>
                    <h2 class="coming-soon-card-title">
                        <?php echo $sub_title; ?>
                    </h2>
                <?php } ?>
                <?php if ($description_2) { ?>
                    <div class="coming-soon-card-description">
                        <?php echo $description_2; ?>
                    </div>
                <?php } ?>
            </div>

            <?php if ($form_id) { ?>
                <div class="contact-form">
                    <?php echo do_shortcode( '[contact-form-7 id="'.$form_id.'"]' ); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

                    