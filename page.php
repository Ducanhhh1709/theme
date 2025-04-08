<?php
if (!defined('ABSPATH')) {
    require_once(dirname(__FILE__) . '/../../../../wp-blog-header.php');
}

if (!defined('ABSPATH')) {
    die('<p>Error: WordPress environment not loaded properly.</p>');
}

if (function_exists('get_header')) {
    get_header();
} else {
    echo '<p>Error: WordPress environment not loaded.</p>';
}
?>

<main>
    <?php
    if (function_exists('have_posts')) {
        while (have_posts()) : the_post();
        if (function_exists('the_title')) {
            the_title('<h1>', '</h1>');
        } else {
            echo '<p>Error: the_title function is not available.</p>';
        }
        endwhile;
    } else {
        echo '<p>Error: WordPress environment not loaded.</p>';
    }
    ?>
</main>

<?php get_footer(); ?>

