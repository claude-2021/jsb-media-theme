<?php
get_header();
WPBMap::addAllMappedShortcodes();
$content = $post->post_content;
?>
<main id="main">
        <?php echo apply_filters( 'the_content', $content ); ?>
        <section id="ReadyToCook" class="skills">
        <div class="container text-center" data-aos="fade-down">
            <div class="">
                <h2 class="span1">Ready to cook up <span class="span2">a powerful campaign?</span></h2>
                <a href="#ReadyToCook" class="btn-get-started scrollto">Let’s connect</a>
            </div>
        </div>
    </section>
</main>
<?php get_footer()?>