<?php 
get_header();
?>
	<section class="hero" style="background-image: url('<?php header_image(); ?>');">
		<hgroup>
			<h1>Hello!</h1>
			<h2>My name is Ryan</h2>
			<h2>And I love building awesome things for the web</h2>
		</hgroup>
	</section>
	<section class="portfolio items">
		<h2>Portfolio Items</h2>
		<div class="grid">
			<?php
				get_template_part( 'parts/loops/loop', 'portfolio' );
			?>
		</div>
	</section>
<?php
get_footer();
?>