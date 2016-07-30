<?php
require_once 'header.php';
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
	else {
     if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true)
     {
         $id = fSession::get('current_user_id');
     }
}
$user = new User($id);

?>
<div id="content">
    <form action="upload_file.php" method="POST" enctype="multipart/form-data">

        <input type='hidden' name='is_avatar' value='1' />

        <!-- <h3>Username:  </h3>
        <h3>Scores: <?php echo $user->getScore()?></h3>
        <h3>Email: <?php echo $user->getEmail()?></h3> -->

        
        <div class="articlesFull" style="cursor:auto;">
                                    
            <div class="img_articles" style="float:left">
                <img style="width:300px; height:230px" src="<?php echo $user->getAvatar(); ?>"/>
            </div>
            
            <div>
                <div class="article-title" style="height: 230px;">
                   <h2 class="h2-contact">User Name: <input id="userName-input" value="<?php echo $user->getUserName()?>" name='username'/></h2>
                   <h2 class="h2-contact">Email: <?php echo $user->getEmail();?></h2>
                   <h2 class="h2-contact">Score: <?php echo $user->getScore();?></h2>
                    <label for="file">Avatar:</label>
                    <input type="file" name="file" id="file">
                    <input type="submit" name="submit" value="SAVE">
                </div>
            </div>
        </div>
    </form>
</div>


<?php
    require_once 'footer.php';
?>