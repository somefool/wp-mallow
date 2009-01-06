<div id="topimage">

<div id="supernavcontainer">
	<ul id="supernav">
		<li><a title="The Weblog" href="<?php bloginfo('url'); ?>/">Blog</a></li> <?php // home link ?>
		<li><a title="link1" href="<?php bloginfo('url'); ?>/1/">Link 1</a></li> <?php // static page 1 ?>
		<li><a title="link2" href="<?php bloginfo('url'); ?>/2/">Link 2</a></li> <?php // static page 2 ?>
	</ul>
</div>


</div>

<div id="blogtitle">

  <h1 style="float:left;"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php bloginfo('description'); ?></span></h1>

	<form method="get" id="titlesearch" action="<?php bloginfo('url'); ?>">
			<input type="text" size="18" value="search" name="s" id="s" />
			<input type="submit" id="searchsubmit" name="Submit" value="<?php _e('Go!'); ?>" />
		</form>
		
		
</div>