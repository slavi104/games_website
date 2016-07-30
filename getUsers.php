
<?php 
    if(isset($_POST['number']) && !empty($_POST['number'])) {
    $number = $_POST['number'];
    $numberTrsOnPage = $_POST['numberTrsOnPage'];
    $countTrs = 0;
    $count = 1;
    require_once "controller.php";
   	try {
   		 $users = Functions::getUsers();
                $topUsers = array();
                for($i=0; $i<count($users); $i++)
                {
                    $topUsers[$users[$i]->getId()] = $users[$i]->getScore();
                }
                arsort($topUsers);
                if($number > count($topUsers))
                {
                    return false;
                }
                
                foreach($topUsers as $key=>$value) 
                {
                    if($countTrs >= $numberTrsOnPage)
                    {
                        break;
                    }
                    if($count >= $number){
                    $user = new User(array("id" => $key));
                    echo '<tr>';
                    echo '<td><a href="profile.php?id='.$user->getId().'">'.$user->getUserName().'</a></td>';
                    echo '<td>'.$user->getScore().'</td>';
                    echo '<td>'.($count).'</td>';
                    echo '<td>'.$user->getCreated().'</td>';
                    echo '</tr>';
                    $countTrs++;
                    }
                    $count++;
                }
   	} catch (Exception $e) {
   		echo $e->getMessage();
   	}
}
   
?>