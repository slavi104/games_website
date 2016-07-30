<?php
if(isset($_POST['category']) && !empty($_POST['category'])) 
{
    $category = $_POST['category'];
    require_once "controller.php";
   	try 
    {
   		$tests = fRecordSet::buildFromSQL('Test', "SELECT tests.* FROM tests WHERE tests.category='" . $category . "'");
      $html = "";
      foreach ($tests as $test) 
      {
        $html .= '<a href="test.php?id='.$test->getId().'"><div><img style="width:200px;" src="' . $test->getImage() . '"/></div><span class="testTitle">'.$test->getTitle().'</span></a>';
   	  } 
    }
    catch (Exception $e) 
    {
   	   echo $e->getMessage();
   	}
    if ($html == "") {
      $html = "There are no tests in category ".$category." :((";
    }
   	echo $html;
}
?>