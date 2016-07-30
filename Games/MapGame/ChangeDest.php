<?php
    
    
?>

<?php
    require 'connection.php';
	$query = array(" "," ", " ", " ", " ");
	if($_GET["level"] == 1)
	{
		$level = 1;
	}
	else
	{
		$level = 2;
	}
	if($level == 1)
	{
		for($i=0;$i<=4;$i++)
		{
			do
			{
				$queryEx = 'SELECT * FROM locations WHERE location_ID = "'.rand(1, 258).'"';
			}
			while(in_array($queryEx, $query));
			$query[$i] = $queryEx;
		}
	}
	else
	{
		for($i=0;$i<=4;$i++)
		{
			do
			{
				$queryEx = 'SELECT * FROM locations WHERE location_ID = "'.rand(256, 283).'"';
			}
			while(in_array($queryEx, $query));
			$query[$i] = $queryEx;
		}
	}
	
	for($i=0;$i<=4;$i++)
	{
		$q = mysqli_query($connection, $query[$i]);
		if(!$q)
		{
			echo 'DB error!';
			exit;
		}
		
		$row = $q -> fetch_assoc();
		echo $row['Location_Name'].'<br>';
		echo $row['Location_Lat'].'<br>';
		echo $row['Location_Lng'].'<br>';
	}
?>
