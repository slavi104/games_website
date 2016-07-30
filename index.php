<?php
    require_once 'header.php';
?>
<div id="content">
       <?php 
            $article = Functions::getLastArticle();
            echo  '<div class="articles" style="margin-bottom: -100px;" data-id=' . $article->getId() . '>
                                
                                  <div class="img_articles" style="float:left">
                                    <img style="width:300px; height:230px" src="' . $article->getImage() . '"/>
                                  </div>
                                  <div>
                                    <div class="article-title">' . $article->getTitle() . '
                                    </div>
                                    <div class="article_text">' .$article->getText().'
                                    </div>
                                  </div>

                               
                              </div><div class="clear"></div><br><br>';
       ?>
</div>
<h2 class="h2-titles" style="margin-top: 65px;">GAMES</h2>
<div id = "content">
  <div class="hover-description">
    <a href="Games/MapGame/index.php">
      <div class = "game">
        <div class = "screenshot">
          <img class = "screenshot" src = "images/mapGame.jpg"/>
          <h3 class="name-h3-index">Градовете в България</h3>
          <p class="description-paragraph" style="display:none;"> Целта на играта е да познаете координатите на 5 града в България, като за всеки град 
            разполагате с 10 секунди за да дадете отговор.</p>
        </div>
      </div>
    </a>
  </div>
  <div class="hover-description">
    <a href="squirrel.php">
      <div class = "game">
        <div class = "screenshot">
          <img class = "screenshot" src = "images/hungrySquirrel.png"/>
          <h3 class="name-h3-index" style="width:278px;">Познай думата - Hungry Squirrel</h3>
          <p class="description-paragraph" style="display:none;">Целта е да познаеш думата с възможно най-малко ходове. Играта разполага с мултиплеър за игра с вашите приятели и сингълплеър. </p>
        </div>
      </div>
    </a>
  </div>
</div>
<h2 class="h2-titles" style="margin-bottom:25px;">TEST YOUR BRAIN WITH NEXT VIDEO</h2>
<video width="670" height="410" controls>
  <!-- <source src="movie.ogg" type="video/ogg"> -->
  <source src="video/National.Geographic.Test.your.Brain.You.Wont.Believe.Your.Eyes.mkv" type="video/mp4">
  <object data="video/National.Geographic.Test.your.Brain.You.Wont.Believe.Your.Eyes.mkv" width="800" height="450">
    <embed width="800" height="450" src="video/National.Geographic.Test.your.Brain.You.Wont.Believe.Your.Eyes.mkv">
  </object>
</video>
<script type="text/javascript">
$( document ).ready(function() {
  $('.articles').on('click', function(){

      //alert($(this).data("id"));

      $.ajax({
        type: 'post',
        url: "article.php",
        data: {
            id: $(this).data("id")
        },
        dataType: 'html'
      }).done(function(data){
              if(data != false)
              {
                  $("#content").empty();
                  $("#content").append(data);
              }
              $("#pages").addClass("hidden");
      }); 
  });
  $( ".hover-description" ).mouseover(function() {

    var descr = $(this).children().children().children().find('p').html();
    var name = $(this).children().children().children().find('h3').html();
    $(this).children().children().children().find('h3').html(descr);
    $(this).children().children().children().find('p').html(name);


  });
  $( ".hover-description" ).mouseout(function() {

    var descr2 = $(this).children().children().children().find('p').html();
    var name2 = $(this).children().children().children().find('h3').html();
    $(this).children().children().children().find('h3').html(descr2);
    $(this).children().children().children().find('p').html(name2);

  });
});
</script>

<?php
	require_once 'footer.php';
?>