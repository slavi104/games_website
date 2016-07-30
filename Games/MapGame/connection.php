<?php
    $connection = mysqli_connect('localhost', 'ihriulr4', 'xYY!5eu5s:FQ', 'ihriulr4_games_for_brains');
    if(!$connection)
    {
        echo '<div class="error">DB Error! Please, try again later</div>';
        exit;
    }
    mysqli_set_charset($connection, 'utf8');
?>