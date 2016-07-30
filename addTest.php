<?php
	require_once "header.php";
	if($_POST) {

		require_once "controller.php";

		$code = fCryptography::randomString(32, 'hexadecimal');
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);

		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg")
		|| ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/x-png")
		|| ($_FILES["file"]["type"] == "image/png"))
		&& ($_FILES["file"]["size"] < 20000)
		&& in_array($extension, $allowedExts)) {
		  if ($_FILES["file"]["error"] > 0) {
		    //echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
		  } else {
		    //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		    //echo "Type: " . $_FILES["file"]["type"] . "<br>";
		    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
		    if (file_exists("C:\/xampp\htdocs\GitHub\GamesWebSite\images\/" . $code . $_FILES["file"]["name"])) {
		     // echo $code . $_FILES["file"]["name"] . " already exists. ";
		    } else {
		      move_uploaded_file($_FILES["file"]["tmp_name"],
		      "C:\/xampp\htdocs\GitHub\GamesWebSite\images\/" . $code . $_FILES["file"]["name"]);
		      //echo "Stored in: " . "C:\/xampp\htdocs\GitHub\GamesWebSite\images\/" . $_FILES["file"]["name"];
		    }
		  }
		} else {
		  echo "Invalid file";
		}


		$number = $_POST["numberRows"];
		$testName = $_POST["testName"];
		$category = $_POST["category"];
		$content = "";
		$title=$testName;

		$test = $_POST["0"]."@";
		$test.= $_POST["answer0-1"]."$";
		$test.= $_POST["points0-1"]."$";
		$test.= $_POST["answer0-2"]."$";
		$test.= $_POST["points0-2"]."$";
		$test.= $_POST["answer0-3"]."$";
		$test.= $_POST["points0-3"]."$";

		for ($i=1; $i < $number; $i++){ 

			$test.= "@".$_POST["".$i.""]."@";
			$test.= $_POST["answer".$i."-1"]."$";
			$test.= $_POST["points".$i."-1"]."$";
			$test.= $_POST["answer".$i."-2"]."$";
			$test.= $_POST["points".$i."-2"]."$";
			$test.= $_POST["answer".$i."-3"]."$";
			$test.= $_POST["points".$i."-3"]."$";
        }

        try {

			$testobj = new Test();
			$testobj->setCategory($category);
			$testobj->setTitle($title);
			if (isset($_FILES["file"]["name"])) {
				$testobj->setImage('images/'.$code.$_FILES["file"]["name"]);
			}
			$testobj->setContent($test);
			$testobj->store();


		} catch (Exception $e) {

			echo $e->getMessage();

		}

        $content = '<p>New test was made successfully!</p>';
        echo $content;

	}
?>

<div id="content">

	<p>
		<label>Test title:</label>
		<input type="text" name="title" id="title"></input>
	</p>
	<p>
		<label>How many questions?</label>
		<input type="text" name="number" id="number"></input>
	</p>
	<p>
		<label>Choose Test Category</label>
		<select id="mySelect">
		  <option value="history">History</option>
		  <option value="geography">Georgaphy</option>
		  <option value="music">Music</option>
		  <option value="IQ">IQ</option>
		  <option value="movies">Movies</option>
		  <option value="general">General</option>
		</select>
	</p>
	<input type="button"  id="step1" value="Continue">  </input>
	
</div>
<?php
	require_once "footer.php"
?>
<script type="text/javascript">
 $(document).ready(function () {
 	Step1();
 });
</script>