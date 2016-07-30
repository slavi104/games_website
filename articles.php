<?php
require_once "header.php";
?>
<div id="content"></div>
	<?php

	$articles = fRecordSet::buildFromSQL('Article', 'SELECT articles.* FROM articles');
	$lastPage = ceil((count($articles)-1)/4);

	?>

	<?php
		echo '<span class="hidden">'.$lastPage.'</span>';
	?>

	<script type="text/javascript">
	$(document).ready(function () {
		makePaging("getArticles.php", 4, '#content');
	});
	</script>
	<div id="pages"></div>


<?php
	require_once 'footer.php';
?>