<?php

if(isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    require_once "controller.php";
   	try {
   		$article = new Article($id);
   		$div = '<div class="articlesFull" style="cursor:auto;" data-id=' . $article->getId() . '>
                                
                  <div class="img_articles" style="float:left">
                    <img style="width:300px; height:230px" src="' . $article->getImage() . '"/>
                  </div>
                    
                  <div>
                    <div class="article-title">'.$article->getTitle().'
                    </div> 
                    <div class="article_text">'.$article->getText().'
                    </div>
                  </div>

               
              </div><div class="clear"></div>';


   	} catch (Exception $e) {
   		echo $e->getMessage();
   	}
   	echo $div;
}
?>
