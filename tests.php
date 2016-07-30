<?php require_once "header.php"; ?>
<div id="content">
	<div class="test_category" data-type="history">
		<img class="category_img" src="images/categories/history.jpg">
		<span class="category_name"><h3>История</h3></span>
	</div>
	<div class="test_category" data-type="geography">
		<img class="category_img" src="images/categories/geography.jpg">
		<span class="category_name"><h3>География</h3></span>
	</div>
	<div class="test_category" data-type="iq">
		<img class="category_img" src="images/categories/iq.jpg">
		<span class="category_name"><h3>IQ</h3></span>
	</div>
	<div class="test_category" data-type="music">
		<img class="category_img" src="images/categories/music.jpg">
		<span class="category_name"><h3>Музика</h3></span>
	</div>
	<div class="test_category" data-type="movies">
		<img class="category_img" src="images/categories/movies.jpg">
		<span class="category_name"><h3>Кино</h3></span>
	</div>
	<div class="test_category" data-type="general">
		<img class="category_img" src="images/categories/general.jpg">
		<span class="category_name"><h3>Общи</h3></span>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function () {
	$('.test_category').on('click', function(){
		var category = $(this).data('type');
		$.ajax({
			type: 'post',
			url: 'testCategories.php',
			data: {
				category:category
			},
			dataType: 'html'
		}).done(function(data){
			$('#content').empty();
			$('#content').append(data);
		});
	});
});
</script>
<?php
	if ($_POST) 
	{
		$totalScore = 0;
		foreach ($_POST as $key => $value) 
		{
			$totalScore += $value;
		}
		try {
			$user = new User(fSession::get('current_user_id'));
		    $user->setScore($totalScore);
		    $user->store();
		} catch (Exception $e) 
		{
			echo $e->getMessage();
		}
	}
?>
<?php
	require_once 'footer.php';
?>