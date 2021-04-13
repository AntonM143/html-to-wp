<?php
get_header();
?>

<?php?>
<h1>Blogg</h1>
    <article>
    <?php
        while(have_posts()){
            the_post(); ?>
            <?php the_post_thumbnail();?>
            <?php the_title('<h2>', '</h2>');?>
        
        <ul class="meta">
            <li >
                <i class="fa fa-calendar"></i> <?php
                the_time();?>
            </li>
            <li>
                <i class="fa fa-user"></i><?php
                the_author();?>
            </li>
            <li>
                <i class="fa fa-tag"></i> <?php
                the_category(', ');?>
            </li>
        </ul>
        
        <p>
            <?php the_content();?>
        </p>
    <?php }?>
    </article>
<?php
get_footer();
?>