<?php
/*
Template Name: Exercice
*/
get_header();
?>
<main>
    <section>
        <?php
        $image = get_field('image');
        echo '<img class="imgFloat"  src="'.$image['url'].'" />';
        ?>
        <p><?php the_field('text')?></p>

</section>
</main>
<?php get_footer();
