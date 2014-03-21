<div id="carousel-timeline" class="touchcarousel">
	<ul class="touchcarousel-container">
<?php if($timeline) {?>
		<li class="touchcarousel-item cover front">
			<div class="item-container">
				<section class="section article">
					<article class="wrap">
						<h1 class="title"><?php print $timeline['headline']; ?></h1>
						<p class="description"><?php print $timeline['text']; ?></p>
						<div class="meta">
							<cite class="author"><?php print $timeline['extra']['author']; ?></cite>
							<time pubdate datetime="<?php print JNTimeLine_prettyTime($datalist[$i]['startDate']); ?>" title="<?php print JNTimeLine_prettyTime($datalist[$i]['startDate']); ?>" class="date"><?php print JNTimeLine_prettyTime($datalist[$i]['startDate']); ?></time>
						</div>
						<ul class="social">
							<li class="twitter"><a href="https://twitter.com/share?text=" target="_blank"><span><?php print $lang->_t('share_twitter'); ?></span></a></li>
							<li class="facebook"><a href="https://facebook.com/sharer.php?u=" target="_blank"><span><?php print $lang->_t('share_facebook'); ?></span></a></li>
							<li class="googleplus"><a href="https://plus.google.com/share?url=" target="_blank"><span><?php print $lang->_t('share_googleplus'); ?></span></a></li>
							<li class="kakaotalk"><a href="https://plus.google.com/share?url=" target="_blank"><span><?php print $lang->_t('share_kakaotalk'); ?></span></a></li>
							<li class="embed"><a href="#"><span><?php print $lang->_t('share_embed'); ?></span></a></li>
						</ul>
					</article>
				</section>
			</div>
		</li>
<?php }
	for($i=0; $i<@count($datalist); $i++) {
		if($datalist[$i]['permalink']) $datalist[$i]['headline'] = '<a href="'.$datalist[$i]['permalink'].'" title="'.htmlspecialchars($datalist[$i]['headline']).'" target="_blank">'.$datalist[$i]['headline'].'</a>'; ?>
		<li id="<?php print $datalist[$i]['unique']; ?>" class="touchcarousel-item">
			<div class="item-container">
				<div class="item-flipper">
					<section id="touchcarousel-<?php print $datalist[$i]['unique']; ?>-article" class="section article">
						<article class="wrap">
							<time pubdate datetime="<?php print JNTimeLine_prettyTime($datalist[$i]['startDate']); ?>" title="<?php print JNTimeLine_prettyTime($datalist[$i]['startDate']); ?>" class="pubdate"><?php print JNTimeLine_prettyTime($datalist[$i]['startDate']); ?></time>
<?php						if($datalist[$i]['asset']['media']) {?>
								<div class="feature">
									<?php print $taogi_theme->figure($datalist[$i]['asset']); ?>
<?php							if(@count($datalist[$i]['media'])) {?>
									<p class="switch"><a href="javascript://" class="switch_gallery"><?php print (count($datalist[$i]['media']) > 1 ? $lang->_t('view_n_media',count($datalist[$i]['media'])) : $lang->_t('view_1_media')); ?></a></p>
<?php							}?>
								</div>
<?php						} else if($datalist[$i]['media']) {?>
								<div class="feature">
									<?php print $taogi_theme->figure($datalist[$i]['media'][0]); ?>
									<p class="switch"><a href="javascript://" class="switch_gallery"><?php print (count($datalist[$i]['media']) > 1 ? $lang->_t('view_n_media',count($datalist[$i]['media'])) : $lang->_t('view_1_media')); ?></a></p>
								</div>
<?php						}?>
							<div class="title-description">
								<h2 class="title"><?php print $datalist[$i]['headline']; ?></h2>
								<div class="description"><p><?php print strip_tags($datalist[$i]['text'],'<a>'); ?><span class="more">... <a href="#"><?php print $lang->_t('read_more'); ?></a></span></p></div>
							</div>
						</article>
					</section>
<?php			if($datalist[$i]['media'] || $datalist[$i]['asset']['media']) {?>
					<section id="touchcarousel-<?php print $datalist[$i]['unique']; ?>-gallery" class="section media fixed">
						<article class="wrap">
							<div class="gallery-wrap">
								<ul class="gallery-container">
								</ul>
							</div>
							<div class="media-nav">
								<a class="switch_nav" href="javascript://">Open / Close</a>
								<a class="switch_mode" href="javascript://"><?php print $lang->_t('view_article'); ?></a>
								<p class="caption">Media description...</p>
								<ul class="thumbnails">
<?php						if(@count($datalist[$i]['media'])) {
								for($j=0; $j<@count($datalist[$i]['media']); $j++) {
									print $taogi_theme->thumbnail($datalist[$i]['media'][$j]);
								}
							} else if($datalist[$i]['asset']['media']) {
									print $taogi_theme->thumbnail($datalist[$i]['asset']);
							}?>
								</ul>
							</div>
						</article>
					</section>
<?php			}?>
				</div>
			</div>
		</li>
<?php }?>
<?php if($timeline) {?>
		<li class="touchcarousel-item cover back">
			<div class="item-container">
				<section class="section article">
					<article class="wrap">
						<h1 class="title"><?php print $timeline['headline']; ?></h1>
						<p class="description"><?php print $timeline['text']; ?></p>
						<div class="meta">
							<cite class="author"><?php print $timeline['extra']['author']; ?></cite>
							<time pubdate datetime="<?php print JNTimeLine_prettyTime($datalist[$i]['startDate']); ?>" title="<?php print JNTimeLine_prettyTime($datalist[$i]['startDate']); ?>" class="date"><?php print JNTimeLine_prettyTime($datalist[$i]['startDate']); ?></time>
						</div>
						<ul class="social">
							<li class="twitter"><a href="https://twitter.com/share?text=" target="_blank"><span><?php print $lang->_t('share_twitter');?></span></a></li>
							<li class="facebook"><a href="https://facebook.com/sharer.php?u=" target="_blank"><span><?php print $lang->_t('share_facebook'); ?></span></a></li>
							<li class="googleplus"><a href="https://plus.google.com/share?url=" target="_blank"><span><?php print $lang->_t('share_googleplus'); ?></span></a></li>
							<li class="kakaotalk"><a href="https://plus.google.com/share?url=" target="_blank"><span><?php print $lang->_t('share_kakaotalk'); ?></span></a></li>
							<li class="embed"><a href="#"><span><?php print $lang->_t('share_embed'); ?></span></a></li>
						</ul>
					</article>
				</section>
			</div>
		</li>
<?php } ?>
	</ul>
</div>