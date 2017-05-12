 <div class="col-md-6 ">
 <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');} ?> </a>
 	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
 	<h6><?php the_date(); ?> <?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class='meta-sep'>|</span><span class='edit-link'>", "</span>" ) ?> <span class='meta-sep'>|</span> 	<a href="#"></span><?php echo get_the_category_list(', '); ?></a>
    </h6>
 	<p><?php the_content(); ?></p>
     <p><p>Matiere :</p>
     <ul>
         <li>Cours Poo</li>
         <li>TP Poo</li>
     </ul>
     <p>Enseignant :</p>
     <ul>
         <li><?php echo get_post_meta($post->ID , 'meta-prof' , true); ?></li>
     </ul>

     <p>Nombre D'absence :</p>
     <ul>
         <li><?php echo get_post_meta($post->ID , 'meta-abs' , true); ?></li>
     </ul>
 </div>