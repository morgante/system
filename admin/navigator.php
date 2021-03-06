<?php namespace Habari; ?>
<div class="container main navigator">
	<span class="columns older"><a href="#" onclick="timeline.skipLoupeLeft();return false">&laquo; <?php _e('Older'); ?></a></span>
	<span class="columns currentposition"><?php _e('no results'); ?></span>
	<span class="columns search">
		<input id="search" type="search" placeholder="<?php _e('Type and wait to search'); ?>" value="<?php echo Utils::htmlspecialchars($search_args); ?>">
	</span>
<?php if( isset( $special_searches ) ) : ?>
	<div class="columns filters">
		<ul class="dropbutton special_search">
			<?php foreach ( $special_searches as $term => $text ): ?>
			<li><a href="#<?php echo $term; ?>" title="<?php _e( "Filter results for '%s'" , array( $text ) ); ?>"><?php echo $text; ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
<?php endif; ?>
	<span class="columns newer"><a href="#" onclick="timeline.skipLoupeRight();return false"><?php _e('Newer'); ?> &raquo;</a></span>

	<div class="timeline">
		<div class="years">
			<?php $theme->display( 'timeline_items' )?>
		</div>

		<div class="track">
			<div class="handle">
				<span class="resizehandleleft"></span>
				<span class="resizehandleright"></span>
			</div>
		</div>

	</div>

</div>
