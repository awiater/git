<?php $postmeta = get_post_custom(get_the_id()); if(isset($postmeta["link_post_url"][0])){	$link = $postmeta["link_post_url"][0];} else {	$link = "#";}?>	<div class="entry">		<div class = "meta">			<div class="blogContent">				<div class="blogcontent"><?php the_content(esc_html__('','fashy')); ?> </div>			</div>		</div>			</div>	