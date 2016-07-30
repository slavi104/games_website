<?php
if(isset($_POST['key']) && !empty($_POST['key'])) {
    $key = $_POST['key'];
    echo $key;
}
?>