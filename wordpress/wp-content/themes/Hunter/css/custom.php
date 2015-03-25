<?php
	header("Content-type: text/css;");
	
	if( file_exists('../../../../wp-load.php') ) :
		include '../../../../wp-load.php';
	else:
		include '../../../../../wp-load.php';
	endif;
?>

<?php
	// Styles	
	$primary 	= ft_of_get_option('fabthemes_primary_color','#769A38');
	$secondary	= ft_of_get_option('fabthemes_secondary_color','');
	$link 		= ft_of_get_option('fabthemes_link_color','');
	$hover 		= ft_of_get_option('fabthemes_hover_color','');
	$header		= ft_of_get_option('fabthemes_headerpic','');
	
?>
#masthead{ background-image:url(<?php echo $header ?>);}

.search-box, .audio-format .audioplayer, .audio-format .audioplayer .mejs-controls,
.link-format, .quote-format, #comments h2.comments-title span, #comments #respond p.form-submit input{
	background: <?php echo $primary ?>!important;
}
#comments #respond p.form-submit input{
	border-color:<?php echo $primary ?>!important;
}
#comments ol.comment-list li .comment-body .comment-meta .comment-metadata a.comment-reply-link{
	color: <?php echo $primary ?>!important;
}

.main-navigation{
	background: <?php echo $secondary ?>;
}
/* draw any selected text yellow on red background */
::-moz-selection { color: #fff;  background: #222; }
::selection      { color: #fff;  background: #222; } 
/* Links */

a, .hentry .entry-header .entry-meta span {
	color: <?php echo $link ?>;
}

a:visited {
	color: <?php echo $link ?>;
}

a:hover,
a:focus,
a:active {
	color:<?php echo $hover ?>;
	text-decoration: none;
}


