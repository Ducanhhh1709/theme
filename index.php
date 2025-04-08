<?php
// Ensure WordPress environment is loaded
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
require_once( ABSPATH . 'wp-blog-header.php' );

// Ensure WordPress is loaded properly
if ( ! class_exists( 'WP_Query' ) ) {
    die( 'Error: WordPress environment not loaded properly.' );
}

get_header();
?>

<div class="content">
   <h1>Welcome to My Theme</h1>
   <p>This is a simple WordPress theme template.</p>
</div>

<?php
// Display latest posts
$args = array(
    'post_type'      => 'post',  // Loại nội dung (bài viết)
    'posts_per_page' => 5,       // Số lượng bài viết muốn hiển thị
    'orderby'        => 'date',  // Sắp xếp theo ngày đăng
    'order'          => 'DESC',  // Mới nhất trước
);

$query = new WP_Query($args);

// Include the footer
get_footer();