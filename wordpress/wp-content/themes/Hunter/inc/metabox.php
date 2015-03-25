<?php

// Load animate.css

	add_action( 'admin_enqueue_scripts', 'load_admin_style' );
	function load_admin_style() {
	wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/css/animate.css', false, '1.0.0' );
	}

//Metaboxes required for different post formats

add_action( 'add_meta_boxes', 'fab_meta_box_add' );

// Define metaboxes

function fab_meta_box_add() {
    add_meta_box( 'fab-audiourl-metabox', __('Audio URL', 'fabthemes'), 'fab_meta_audiourl', 'post', 'normal', 'high' );
    add_meta_box( 'fab-videourl-metabox', __('Video URL', 'fabthemes'), 'fab_meta_videourl', 'post', 'normal', 'high' );
    add_meta_box( 'fab-linkurl-metabox', __('Link URL', 'fabthemes'), 'fab_meta_linkurl', 'post', 'normal', 'high' );
	add_meta_box( 'fab-linktext-metabox', __('Link Text', 'fabthemes'), 'fab_meta_linktext', 'post', 'normal', 'high' );	
	add_meta_box( 'fab-quote-metabox', __('Quote Line', 'fabthemes'), 'fab_meta_quotetext', 'post', 'normal', 'high' );
	add_meta_box( 'fab-quote-author-metabox', __('Quote Author', 'fabthemes'), 'fab_meta_quote_author', 'post', 'normal', 'high' );

}


// construct metaboxes

function fab_meta_audiourl( $post ) {
	$values = get_post_custom( $post->ID );
	$audio_url = isset( $values['audio_url'] ) ? esc_attr( $values['audio_url'][0] ) : '';
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
	?>
		<p>
			<input type="text" class="widefat" name="audio_url" id="audio_url" value="<?php echo $audio_url; ?>" />
		</p>
	<?php		
}

function fab_meta_videourl( $post ) {
	$values = get_post_custom( $post->ID );
	$video_url = isset( $values['video_url'] ) ? esc_attr( $values['video_url'][0] ) : '';
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
	?>
		<p>
			<input type="text" class="widefat format_detail" name="video_url" id="video_url" value="<?php echo $video_url; ?>" />
		</p>
	<?php		
}


function fab_meta_linkurl( $post ) {
	$values = get_post_custom( $post->ID );
	$link_url = isset( $values['link_url'] ) ? esc_attr( $values['link_url'][0] ) : '';
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
	?>
		<p>
			<input type="text" class="widefat format_detail" name="link_url" id="link_url" value="<?php echo $link_url; ?>" />
		</p>
	<?php		
}

function fab_meta_linktext( $post ) {
	$values = get_post_custom( $post->ID );
	$link_text = isset( $values['link_text'] ) ? esc_attr( $values['link_text'][0] ) : '';
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
	?>
		<p>
			<input type="text" class="widefat format_detail" name="link_text" id="link_text" value="<?php echo $link_text; ?>" />
		</p>
	<?php		
}


function fab_meta_quotetext( $post ) {
	$values = get_post_custom( $post->ID );
	$quote_text = isset( $values['quote_text'] ) ? esc_attr( $values['quote_text'][0] ) : '';
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
	?>
		<p>
					<input type="text" class="widefat format_detail" name="quote_text" id="quote_text" value="<?php echo $quote_text; ?>" />
		</p>
	<?php		
}

function fab_meta_quote_author( $post ) {
	$values = get_post_custom( $post->ID );
	$quote_author = isset( $values['quote_author'] ) ? esc_attr( $values['quote_author'][0] ) : '';
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
	?>
		<p>
			<input type="text" class="widefat format_detail" name="quote_author" id="quote_author" value="<?php echo $quote_author; ?>" />
		</p>
	<?php		
}


//Save metabox

add_action( 'save_post', 'fab_meta_box_save' );

function fab_meta_box_save( $post_id ) {

 	// Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;

	// now we can actually save the data
	$allowed = array( 
		'a' => array( // on allow a tags
		'href' => array() // and those anchords can only have href attribute
		)
	);


 	// Save audio url
 	if( isset( $_POST['audio_url'] ) ) {
		update_post_meta( $post_id, 'audio_url', wp_kses( $_POST['audio_url'], $allowed ) );
	}
	
 	// Save video url
 	if( isset( $_POST['video_url'] ) ) {
		update_post_meta( $post_id, 'video_url', wp_kses( $_POST['video_url'], $allowed ) );
	}
	
 	// Save link url
 	if( isset( $_POST['link_url'] ) ) {
		update_post_meta( $post_id, 'link_url', wp_kses( $_POST['link_url'], $allowed ) );
	}

 	// Save link text
 	if( isset( $_POST['link_text'] ) ) {
		update_post_meta( $post_id, 'link_text', wp_kses( $_POST['link_text'], $allowed ) );
	}
		
 	// Save quote text
 	if( isset( $_POST['quote_text'] ) ) {
		update_post_meta( $post_id, 'quote_text', wp_kses( $_POST['quote_text'], $allowed ) );
	}
		
 	// Save quote author
 	if( isset( $_POST['quote_author'] ) ) {
		update_post_meta( $post_id, 'quote_author', wp_kses( $_POST['quote_author'], $allowed ) );
	}
		

}


// Conditional metaboxes

function meta_box_conditional()
{
wp_enqueue_script( 'jquery' );

$script = '
  <script type="text/javascript">

   jQuery( document ).ready( function($){
           
   $(" #fab-audiourl-metabox, #fab-videourl-metabox, #fab-linkurl-metabox, #fab-linktext-metabox, #fab-quote-metabox, #fab-quote-author-metabox").hide();

   $( "input[name=\"post_format\"]" ).change( function() {
   	   $(" #fab-audiourl-metabox, #fab-videourl-metabox, #fab-linkurl-metabox, #fab-linktext-metabox, #fab-quote-metabox, #fab-quote-author-metabox").hide();
   });


   $("input#post-format-video").change(function() {
	  $( "#fab-videourl-metabox" ).show();	
   });

   if($("#post-format-video").is(":checked"))
	  $( "#fab-videourl-metabox" ).show();



   $("input#post-format-audio").change(function() {
	  $( "#fab-audiourl-metabox" ).show();	
   });

   if($("#post-format-audio").is(":checked"))
	  $( "#fab-audiourl-metabox" ).show();



   $("input#post-format-link").change(function() {
	  $( "#fab-linkurl-metabox" ).show();	
	  $( "#fab-linktext-metabox" ).show();	
   });

   if($("#post-format-link").is(":checked")){
	  $( "#fab-linkurl-metabox" ).show();
	  $( "#fab-linktext-metabox" ).show();
   }


   $("input#post-format-quote").change(function() {
	  $( "#fab-quote-metabox" ).show();	
	  $( "#fab-quote-author-metabox" ).show();	
   });

   if($("#post-format-quote").is(":checked")){
	  $( "#fab-quote-metabox" ).show();
	  $( "#fab-quote-author-metabox" ).show();
   }

  });
  </script>';

    return print $script;
}
add_action( 'admin_footer', 'meta_box_conditional' );
