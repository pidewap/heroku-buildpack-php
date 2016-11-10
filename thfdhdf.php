<?php /* Template Name: AGK MP3 */ ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
  <?php
    require_once('wp-content/plugins/agk-mp3/agk-config.php');
    require_once('wp-content/plugins/agk-mp3/js/preload.js');
    require_once('wp-content/plugins/agk-mp3/css/videoiframe.css');
    require_once('wp-content/plugins/agk-mp3/agk-watch.php');
    ?>
    <center><strong><h1>IKLAN ANDA</h1></strong>
</center>
    
    <div style="background: #3B5998; color: white; font-size: 19px; font-weight: bold; padding: 3px; text-align: left; text-shadow: 2px 2px rgba(0,0,0,.5);">
      <p>㋡ Judul ㋡ <?php echo $nama;?></p></div>
  <div class="alert alert-success" role="success"><span>
<div id="loha">Title : <b><?php echo $nama;?></b></br></div>
<div id="loha">Duration :	<b><?php echo $duration;?></b><br></div>
<div id="loha">Channel :	<b><?php echo $channel;?></b><br></div>
<div id="loha">Uploaded :	<b><?php echo $user;?></b><br></div>
<div id="loha">Views :	<b><?php echo $play;?></b><br></div>
<div id="loha">Likes :	<b><?php echo $like;?></b><br></div>
    </span></div>
  
<div style="background: #3B5998; color: white; font-size: 19px; font-weight: bold; padding: 3px; text-align: left; text-shadow: 2px 2px rgba(0,0,0,.5);">
      <p>㋡ Download ㋡ <?php echo $nama;?></p></div>
  
    <div class="alert alert-danger"><span><left><?php echo $agklink ;?></left>
<center><iframe src=http://mp3http.com/youtube2mp3/conversion.php?mp3id=<?php echo $id;?> scrolling=no frameborder=0 width=300 height=33></iframe></center></span></div>
  
      <div style="background: #3B5998; color: white; font-size: 19px; font-weight: bold; padding: 3px; text-align: left; text-shadow: 2px 2px rgba(0,0,0,.5);">
      <p>㋡ Discription ㋡ <?php echo $nama;?></p></div>
<div class="alert alert-warning" role="alert"><span><div id="loha"><?php echo $des;?></div></span></div>
</div>
    <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

</div><!-- .content-area -->
<?php get_footer(); ?>
