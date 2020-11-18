<?php
/**
 * The template for displaying all 404 pages
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.1
 */

get_header(); ?>
<div class="container-404">
    <figure>
        <img src="/wp-content/themes/accelerate-theme-child/img/404-icon.png" alt="Missed Target">
    </figure>
    <div>
        <h1>Whoops, Missed the target…</h1>
        <p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
        <p>Feel free to take a look around our <span><a href="<?php echo site_url('/blog/') ?>">blog</a></span> or some of our featured <span><a href="<?php echo site_url('/case-studies/') ?>">work</a></span>.</p>
    </div>
</div>

<?php get_footer(); ?>
