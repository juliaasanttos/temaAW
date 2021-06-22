<?php get_header(); ?>
    <div class="row">
        <div class="col-12 jb-bg">
            <div class="jumbotron">
                <h3 class="display-4">Seja bem vinde!</h3>
                <p class="lead"><?php bloginfo('description'); ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>Top 3 bandas fantásticas!</h2>
            <p>Sim, eu não tenho criatividade nenhuma para temas, como adivinhou???? (eu real não sei sobre o que fazer, desculpa!!) Lorem ipsum, dolor sit amet consectetur adipisicing elit.
               Molestias ducimus unde amet accusantium. Vero esse molestiae cupiditate optio?
               Ex reprehenderit eum harum voluptas quo sit rerum ab mollitia minus eos.</p>
        </div>
    </div>

    <hr>

    <div class="row">
        <?php /* loop posts */
            if(have_posts()){
                while (have_posts()){
                    the_post();
        ?>
            <div class="col-4">
                <h3><?php the_title(); ?></h3>
                <div class="fotothumb"><?php the_post_thumbnail();?></div>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Leia mais</a>
                <hr>
            </div>
        <?php
                } /* while */
            } /* if */
        ?>
    </div>

<?php get_footer(); ?>