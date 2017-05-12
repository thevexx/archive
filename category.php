<?php if ( have_posts() ) :
	header('Content-Type: application/json');

	$myarray = array();

	while ( have_posts() ) : the_post(); ?>
		<?php //$p = get_template_part( 'single-modulepost', get_post_format() );
        $abst = get_post_meta($post->ID , 'meta-abs' , true);
        if($abst >= 4){
	        array_push($myarray, array('etudiant' =>  get_the_tags()[0]->name  ));
        }
		?>
	<?php endwhile;
	$myJSON = json_encode($myarray);
    echo $myJSON;


	?>


<?php else : ?>
	<?php// get_template_part( 'single-modulepost', 'none' ); ?>
<?php endif; ?>