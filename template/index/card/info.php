<?php
    $author   = get_the_author_meta( 'display_name', $post->post_author );
?>
<!--文章信息-->
<div class="div-info">
	<div class="header">
		<ul>
			<li class="active">文章信息</li>
			<!-- <li>修改记录</li>-->
		</ul>
	</div>
	<ul class="ul">
		<li><?=$author;?>创建于：<span><?=the_time("Y-m-d H:i");?></span></li>
		<li>最后编辑于：<span><?=get_post_modified_time("Y-m-d H:i");?></span></li>
		<li>字数统计：<span><?=mb_strlen(get_the_content()); ?></span></li>
	</ul>
</div>