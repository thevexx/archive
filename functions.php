<?php

function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .
	                               '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css'
	);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() .
	                                '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

add_theme_support( 'post-thumbnails' );


function wpdocs_custom_excerpt_length( $length ) {
    return 5;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



function create_post_ModulePost(){
	register_post_type('ModulePost',
		array(
			'labels'=>array(
				'name'=>__('Module Post'),
			),
			'public'=>true,
			'hierarchical'=>true,
			'has_archive'=>true,
			'supports'=>array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
			),
			'taxonomies'=>array(
				'post_tag',
				'category',
			)
		)
	);
	register_taxonomy_for_object_type('category','ModulePost');
	register_taxonomy_for_object_type('post_tag','ModulePost');
}
add_action('init','create_post_ModulePost');


function prfx_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
	$prfx_stored_meta = get_post_meta( $post->ID );
	?>

	<p>
		<label for="meta-prof" class="prfx-row-title"><?php _e( 'Enseignant affecté', 'prfx-textdomain' )?></label>
		<input type="text" name="meta-prof" id="meta-prof" value="<?php if ( isset ( $prfx_stored_meta['meta-prof'] ) ) echo $prfx_stored_meta['meta-prof'][0]; ?>" />
			<br>
		<label for="meta-abs" class="prfx-row-title"><?php _e( 'Nombre d’absence', 'prfx-textdomain' )?></label>
		<input type="number" name="meta-abs" id="meta-abs" value="<?php if ( isset ( $prfx_stored_meta['meta-abs'] ) ) echo $prfx_stored_meta['meta-abs'][0]; ?>" />
	</p>

	<?php
}
function prfx_meta_save( $post_id ) {

	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}

	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-prof' ] )||isset( $_POST[ 'meta-abs' ] ) ) {
		update_post_meta( $post_id, 'meta-prof', sanitize_text_field( $_POST[ 'meta-prof' ] ) );
		update_post_meta( $post_id, 'meta-abs', sanitize_text_field( $_POST[ 'meta-abs' ] ) );

	}

}
add_action( 'save_post', 'prfx_meta_save' );

function prfx_custom_meta() {
	add_meta_box( 'prfx_meta', __( 'Enseignant et Nombre D\'absence', 'prfx-textdomain' ), 'prfx_meta_callback', 'post' );
}
add_action( 'add_meta_boxes', 'prfx_custom_meta' );