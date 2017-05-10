 <div class="col-md-6 ">
 <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');} ?> </a>
 	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
 	<h6><?php the_date(); ?> • <a href="#"><?php the_author(); ?></a></h6>
 	<p><?php the_excerpt(); ?></p>
 	<a href="<?php the_permalink(); ?>">Continue reading...</a><br><br/>
 </div>