<h1> Simple Wood Goods</h1>

<div class='posts'>
	<?php foreach($posts as $post): ?>

		<article>
			<h2><?=$post['post_date']?></h2>
			<h3><?=$post['post_title']?> posted:</h2>
			<h4><?=$post['post_description']?></h4>
		</article>
		
	<?php endforeach; ?>

</div>


