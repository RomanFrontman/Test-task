<?php

// Check value exists.

if( have_rows('content') ):

    while ( have_rows('content') ) : the_row();

        $layout = get_row_layout();
        $layout = str_replace( '_', '-', $layout );
        include "sections/{$layout}.php";

    endwhile;

// No value.
else :
    // Do something...
endif;

?>