<?php if (!empty($news) && is_array($news)){
	// var_dump($news);

	foreach ($news as $news_item) {
		?>
		<h2><a href="/news/<?= esc($news_item['slug'], 'url'); ?>"><?= esc($news_item['title'])?></a></h2>
		<p><?= esc($news_item['body']);?></p>

		<?php
	}

} else {
	echo "<h2>No News</h2>";
	echo "<p>Unable to find any news for you</p>";
}