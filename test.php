<?php
require_once "header.php";
if($_GET["id"]) 
{
    require_once "controller.php";
   	try 
    {
   		$tests = fRecordSet::buildFromSQL('Test', "SELECT tests.* FROM tests WHERE tests.Id='" . $_GET["id"] . "'");
      foreach ($tests as $test) 
      {
         $html = "";
            
            $html .= '<form id="test-form" method="POST" action="test.php?id='.$test->getId().'">';
            $html .= '<h1><div id="testName">'.$test->getTitle().'</div></h1>';
            $arr = explode('@', $test->getContent());
            for($i=0; $i<count($arr)-1; $i+=2)
            {
              $html .= '<br><div id="question"><b>'.$arr[$i].'</b></div>';
              $answers = explode('$', $arr[$i + 1]);
              for($j=0; $j<count($answers)-1; $j+=2)
              {
                $name = str_replace(" ", "_", $arr[$i]);
                $html .= '<input  id="answer" type="radio" name="'.$name.'" value="'.$answers[$j+1].'"><i>'.$answers[$j].'</i><br>';
              }
            }
            $html .= '<input id="submit-test" type="submit" value="Приключване на теста!"></input>';
            $html .= '</form>'; 
      }
    }
    catch (Exception $e) 
    {
   	   echo $e->getMessage();
   	}
   	echo $html;
}
if ($_POST) 
{
  try 
    {
      $tests = fRecordSet::buildFromSQL('Test', "SELECT tests.* FROM tests WHERE tests.Id='" . $_GET["id"] . "'");
    
      $sum = 0;
      foreach ($tests as $test) 
      {
        $arr = explode('@', $test->getContent());
        for($i=0; $i<count($arr)-1; $i+=2)
        {
          $name = str_replace(" ", "_", $arr[$i]);
          if (!isset($_POST[$name])) 
          {
            $sum = "no answer on question ".$name."<br>";
            break;
          }
          else
          {
            $selected_radio = $_POST[$name];
            $sum+=$selected_radio;
          }
        }
      }
      echo '<div id="result">'.$sum.'</div>';
      if ($sum>0 && isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true) {
        $userId  = fSession::get('current_user_id');
        $users = fRecordSet::buildFromSQL('User', "SELECT users.* FROM users WHERE users.Id='" . $userId . "'");
        foreach ($users as $user) 
        {
          try 
          {
                $user->setScore($user->getScore()+$sum);
                $user->store();
          } catch (Exception $e) 
          {
            echo $e->getMessage();
          }
        }
      }
      else if ($sum>0) {
        echo "If you want to save your points you should log in!";
      }
      
    }
    catch (Exception $e) 
    {
       echo $e->getMessage();
    }
}
?>