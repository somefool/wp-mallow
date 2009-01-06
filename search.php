<?php // get header ?>
<?php include "header.php"; ?>

<?php // get get my custom functions ?>
<?php include "myfunctions.php"; ?>

<body id="archives">

<div id="shadow">

<div id="rap">

<?php // get the nav etc ?>
<?php include "topbanner.php"; ?>


<?php // get sidebar ?>
<?php include("sidebar.php"); ?>


<div id="content">

<h3>Search results for '<?php echo($s); ?>'.</h3>
	<?php if (have_posts()) : ?>

		
		<div class="navigation">
			<div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post">
<!-- Post title -->
<h3 class="storytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>&nbsp;&nbsp;<span><?php comments_popup_link_title(__('0'), __('1'), __('%'), __(''), __(''), 'Comments: '.get_the_title()); ?></span><?php edit_post_link(" <small>e</small>"); ?></h3>
<!-- Post meta -->
<div class="meta">
Posted on <?php the_time('F jS, Y') ?>. <!-- By <?php the_author() ?>. --> About <?php the_category(', ') ?>.</div>		

				
				<div class="entry">
					<?php the_excerpt() ?>
				</div>
		
				
				<!--
				<?php trackback_rdf(); ?>
				-->
			</div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>
		</div>
	
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<?php include "searchform.php"; ?>

	<?php endif; ?>
		
		<div style="clear: both;">&nbsp;</div>

	</div>


<?php // get footer ?>
<?php include('footer.php'); ?>


</div>

</div>

</body>

</html>
