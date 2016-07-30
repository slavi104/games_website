<!DOCTYPE html>

<?php

    error_reporting(E_ERROR | E_PARSE);
    session_start();
    //$root = "/newhungry/";
    $root = "/GitHub/GamesWebSite/";
    require_once "controller.php";
    require_once "resources/includes/head_include.php";
    
     if ($_POST) 
     {
         if(isset($_POST['emaillog']))
         {
	           $pass = trim($_POST['pass']);
	           $email = trim($_POST['emaillog']);
	           fUTF8::clean($pass);
	           fUTF8::clean($email);		
            try 
            {
              	$user = new User(array('email'=>$email));
                $user->setIsActive(1);
                $user->store();
              	$passHash = $user -> getPassword();
	         } catch (fExpectedException $e) 
           {
            echo $e->printMessage();
	         }
        	if (fCryptography::checkPasswordHash($pass,$passHash)) {
        		fSession::open();
        		fSession::set('current_user_id', $user->getId());
            fSession::set('current_user_name', $user->getUserName());
            if($user->getId() == 1 || $user->getId() == 2 || $user->getId() == 3)
            {
              fSession::set('is_admin', true);
            }
            else
            {
              fSession::set('is_admin', false);
            }
            $_SESSION['isLogged'] = true;
        		} else {
        			echo 'Error in email or password';
        		}
                 }
        	}
  $lang = "EN";
   if($lang == "EN")
   {
       $home = "Home";
       $articles = "Articles";
       $tests = "Tests";
       $games = "Games";
       $users = "Users";
       $contacts = "Contacts";
       if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true)
       {
           $profile = fSession::get('current_user_name');
       }
       $register = "Register";
       $login = "Login";
       $logout = "Logout";
       $addArticle = "Add Article";
       $addTest = "Add Test";
   }
   else
   {
      $home = "Начало";
       $articles = "Статии";
       $tests = "Тестове";
       $games = "Игри";
       $users = "Потребители";
       $contacts = "Контакти";
       if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true)
       {
           $profile = fSession::get('current_user_name');
       }
       $register = "Регистрация";
       $login = "Вход";
       $logout = "Изход";
       $addArticle = "Добави статия";
       $addTest = "Добави Тест";
   }
    
?>
<html>
    <head>
        <title>Games for brains</title>
        <link type="text/css" rel="stylesheet" href=<?php echo $root."style/style.css"?>>
        <link rel="stylesheet" type="text/css" href=<?php echo $root."style/articles-style.css"?>>
        <link rel="stylesheet" type="text/css" href=<?php echo $root."style/contacts-style.css"?>>
        <link rel="stylesheet" type="text/css" href=<?php echo $root."style/games-style.css"?>>
        <meta charset="utf-8"/>
        <script language="javascript" type="text/javascript" src=<?php echo $root."js/jquery-1.10.2.js"?>></script>
        <script language="javascript" type="text/javascript" src=<?php echo $root."js/jquery-ui.js"?>></script>
        <script language="javascript" type="text/javascript" src=<?php echo $root."js/jquery-ui1.js"?>></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
        <script src=<?php echo $root."js/GlobalFunctions.js"?>></script>
        <script src=<?php echo $root."js/ValidationForms.js"?>></script>
        <?php if (function_exists("add_to_head")) { echo add_to_head(); } ?>
    </head>
    <body>  
        <header>
          <div id="headerWrapper">
            <div id="logo">

            </div>
          </div>
            <nav id="menu">
              <ul>
                  <li class="nav-buttons"><a href=<?=$root."index.php"?>><?php echo $home?></a></li>
                  <li class="nav-buttons"><a href=<?=$root."articles.php"?>><?php echo $articles?></a>
                  <?php 
                      if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true)
                      {
                          if (fSession::get('is_admin')) {

                              echo '<ul style="z-index:1;" class="subMenu">';
                              echo '<li class="nav-buttons"><a href="'.$root.'addArticle.php">'.$addArticle.'</a></li>';
                              echo '</ul></li>';
                          }
                      }
                  ?>
                  </li>
                  <li class="nav-buttons"><a href=<?=$root."tests.php"?>><?php echo $tests?></a>
                  <?php 
                      if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true)
                      {
                          if (fSession::get('is_admin')) {

                              echo '<ul style="z-index:1;" class="subMenu">';
                              echo '<li class="nav-buttons"><a href="'.$root.'addTest.php">'.$addTest.'</a></li>';
                              echo '</ul></li>';
                          }
                      }
                  ?>
                  </li>
                  <li class="nav-buttons"><a href=<?=$root."games.php"?>><?php echo $games?></a></li>
                  <li class="nav-buttons"><a href=<?=$root."users.php"?>><?php echo $users?></a></li>
                  <li class="nav-buttons"><a href=<?=$root."contacts.php"?>><?php echo $contacts?></a></li>
                  <?php 
                      if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true)
                      {
                          echo '<li class="nav-buttons"><a href="'.$root.'profile.php">'. fSession::get('current_user_name') .'</a>';
                          echo '<ul style="z-index:1;" class="subMenu">';
                          echo '<li class="nav-buttons"><a href="'.$root.'changeProfile.php">Edit Profile</a></li>';
                          echo  '<li><a href="'.$root.'logout.php">'.$logout.'</a></li>';
                          echo '</ul></li>';
                          
                      }
                      else
                      {
                          echo '<li class="nav-buttons"><a href="'.$root.'registration.php">'.$register.'</a></li>';
                      }
                  ?>
                  
              </ul>
                
            </nav>
          <script>

          $( document ).ready(function() {
            $( ".nav-buttons" ).mouseover(function() {
              if ($(this).children().last().attr('class') == "subMenu") {
                  $(this).children().last().show();
              };
              
            });
            $( ".nav-buttons" ).mouseout(function() {
              if ($(this).children().last().attr('class') == "subMenu") {
                $(this).children().last().hide();
              }
            });
          });
          </script>
          <aside>
                  <!-- <span> TODO fb</span>
                  <span> TODO google+</span> -->
                  <?php
                      if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true)
                      {
                          
                      }
                      else
                      {
                          echo '<div id="login">
                                    <form method="POST" style="text-align: right; margin-top: 15px;">
                                        <div>
                                        <label>Mail:</label><input type="text" id="emaillog" name="emaillog">
                                        </div>
                                        <div>
                                        <label>Password:</label><input type="password" id="pass" name="pass">
                                        </div>
                                        <input type="submit" value="Login">
                                    </form>
                                </div>';
                      }
                  ?>
                
                </aside>
          <form method="post" action='search.php'>
                <div id='search_container'>
                  <input placeholder="Search..." name='search_text'>
                  <input type='submit' id="search-button" value=''>
                </div>
                </form>
        </header>
        <div id="wrapper1">
        

        
        
        
        <script type="text/javascript">
        var toggleCheck = 1;
        function checkInvitation () {

          $.ajax({
              type: 'post',
              url: "<?php echo ''.$root.'checkInvitation.php'?>",
              data: {
                id:"<?php echo fSession::get('current_user_id'); ?>"
              },
              dataType: 'html'
            }).done(function(data){

              if (toggleCheck === 1) {
                $('#request_holder').append(data);
                toggleCheck = 0;
              } else {
                //$('#game_invitation').remove();
              };
              
          });

        }

        $(document).ready(function () {
          setInterval(checkInvitation, 1000);
        });
        </script>

        
