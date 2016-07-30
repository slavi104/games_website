<?php
    require_once 'header.php';
    if ($_POST) {
    	$text = rtrim($_POST['search_text']);

    	$articles = fRecordSet::buildFromSQL('Article', 'SELECT articles.* FROM articles');
    	$div = '';
    	foreach ($articles as $article) {
    		$content = $article->getText();
    		if (strlen(strstr($content,$text,true)) > 0) {

    			$finded_content = strstr($content,$text,true);
                $div = '<div class="articles" data-id=' . $article->getId() . '>
                                
                  <div class="img_articles" style="float:left">
                    <img style="width:300px; height:230px" src="' . $article->getImage() . '"/>
                  </div>
                  <div>
                    <div class="article-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $article->getTitle() . '
                    </div>
                    <br>
                    </br>
                    <div style="width:775px" class="article_text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . substr($finded_content, -400, 400) . ' <span style="color:red; background:yellow;">'. $text .'</span> ...  
                    </div>
                  </div>

               
              </div><div class="clear"></div><br><br>';

    			echo $div;/*'
    			<div style="border: 2px solid black;">
	    			<p>
	    				<br>
		    			<span>
		    				<img src="' . $article->getImage() . '">
		    			</span>
		    			<span>
		    				<h2><b>' . $article->getTitle() . '</b></h2>
		    				<br> ... ' . substr($finded_content, -400, 400) .'
		    				<span style="color:red; background:yellow;">'. $text .'</span> ... 
		    			</span>
	    			</p><br>
    			</div><br>';*/
    		}
    	
    	}
    }
?>