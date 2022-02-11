<div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="site-page-content">
            <?php
            the_content();
            THIWebsite_link_page();
            ?>
        </div>
    <?php
        THIWebsite_comment_form();
    endwhile;
    ?>
</div>