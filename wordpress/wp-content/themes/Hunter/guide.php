<?php
function theme_guide(){
add_theme_page( 'Theme guide','Theme documentation','edit_themes', 'theme-documentation', 'fabthemes_theme_guide');
}
add_action('admin_menu', 'theme_guide');

function fabthemes_theme_guide(){ ?>

		
<div id="welcome-panel" class="about-wrap">
<div class="container">

<div class="row">

	<div class="col3 col">
		<img src="<?php echo get_template_directory_uri() ?>/screenshot.png" />
	</div>
	<div class="col34 col">
		<h2>Welcome to <?php echo wp_get_theme(); ?> WordPress theme!</h2>
		<p> <?php echo wp_get_theme(); ?> is a free premium responsive WordPress theme from fabthemes.com. This theme is built 
			on <b>Bootstrap 3</b> framework. This is a tumblog type theme with different post formats. 
			The theme comes with metaboxes to manage post format content, options to customize and the color scheme of 
			the theme is customizable. </p>
	</div>

</div>

<div class="row">

	<div class="col col1">
		<h3>Required Plugins</h3>
		<p> The theme often requires few plugins to work the way it is originally intended to. 
			You will find a notification on the admin panel prompting you to install the required plugins. 
			Please install and activate the plugins.  
		</p>
		<ol>
			<li><b> Zilla likes </b> ( Pre packaged in the theme )</li>
		</ol>
	</div>

</div>	

<div class="row">

	<div class="col col1">
		<h3>Theme setup</h3>
		<p>Download the theme zip file from Fabthemes.com. Open your WordPress admin panel and go to <b> Appearence > Themes</b> . Click <b> Add new </b> and then <b> Upload the theme </b> to your themes directory and activate it.  </p>
	</div>

</div>

<div class="row">

	<div class="col col1"> 
		<h3>Theme Options </h3>
		<p> Theme comes with an options panel to customize its settings. </p>
	 </div>
	 <div class="col col3">
	 	<h4> 1. Header Image</h4>
	 	<p> This is the option to set a custom background image for the header space. This image will be shown as fullscreen section on the homepage.</p>
	 </div>
	 <div class="col col3">
	 	<h4> 2. Custom styling</h4>
	 	<p> Use this options to color customize your theme.</p>
	 </div>
	 <div class="col col3">
	 	<h4> 3. Banner settings </h4>
	 	<p> Use this options to customize the banner ads on the sidebar.</p>
	 </div>

</div>

<div class="row">

	<div class="col col1">
		<h3> Post Formats</h3>
		<p> The them supports various post formats. In the post editor window you can find the post format selection section. 
			How to make the different post format entries are explained below.</p>
	</div>
	<div class="col col2">
		<h4> Image format </h4>
		<p> This format is meant to display a single image item. Add the image as featured image of the post</p>
	</div>

	<div class="col col2">
		<h4> Audio format</h4>
		<p> This format shows an audio post. When this format is selected you will find a metabox to enter the audio url.</p>
		
	</div>
	<div class="clear"></div>
	<div class="col col2">
		<h4> Video format</h4>
		<p> This format shows the video entries. When this format is selected you will find a metabox to enter the video url.</p>
	</div>

	<div class="col col2">
		<h4> Link format</h4>
		<p> This format shows link entries. When this format is selected you will find metaboxes to enter the link url and anchor text.</p>
	</div>
	<div class="clear"></div>
	<div class="col col2">
		<h4> Quote format</h4>
		<p> This format shows quote entries. When this format is selected you will find metaboxes to enter the quote url and the attribution name.</p>
	</div>

	<div class="col col2">
		<h4> Gallery format</h4>
		<p> This format shows gallery entries. You can insert a gallery in the post and that will be styled into a slider by the template.</p>
	</div>
	<div class="clear"></div>
	<div class="col col2">
		<h4> Aside format</h4>
		<p> This format shows asides. They are formatted similar to short post entries but without the title section.</p>
	</div>

	<div class="col col2">
		<h4> Status format</h4>
		<p> This format shows status updates. The a short post entry will be formatted differently to appear as a status. </p>
	</div>

</div>


<div class="row">
	<div class="col col1">
			<?php echo file_get_contents(dirname(__FILE__) . '/FT/license-html.php'); ?>
	</div>
</div>


</div>
</div>



<style media="screen" type="text/css">

	.container{	width: 960px;}
	.row { background: #fff;  margin-bottom: 20px; padding: 20px 0px;}
	.row:before, .row:after {  display: table;  content: " ";}
	.row:after {  clear: both;	}
	.row:before, .row:after {  display: table;  content: " ";}
	.row:after { clear: both; }
	.col{ padding:0px 20px 0px 20px;  position:relative; 	 }
	.col1{ width: 920px;}
	.col2{ width: 440px; float: left;}
	.col3{ width: 280px; float: left;}
	.col34{ width: 600px; float: left;}
	.col h2{ font-weight: 700; font-size: 30px;}
	.col h3{ font-weight: 300; font-size: 24px; margin:0px 0px 20px 0px; background: #333; color:#fff; padding: 10px; }
	.col h4{ font-weight: bold; font-size: 16px; margin:10px 0px;}
	.clear{clear: both;}

</style>	

<?php }
