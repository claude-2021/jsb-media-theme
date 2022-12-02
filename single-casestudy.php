<?php
get_header();
WPBMap::addAllMappedShortcodes();
?>
<main id="main">
<?php $content = $post->post_content; ?>
        <?php echo apply_filters( 'the_content', $content ); ?>   
</main>
<?php get_footer()?>