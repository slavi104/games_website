<?php
    require_once 'header.php';

?>

<div id="content">
<table id="users">
    <thead>
        <tr>
            <th>User Name</th>
            <th>Score</th>
            <th>Number</th>
            <th>Created on</th>
        </tr>
    </thead>
    <tbody id="tb">
    </tbody>
</table>

<?php
    require_once 'header.php';
$users = fRecordSet::buildFromSQL('User', 'SELECT users.* FROM users');
$lastPage = ceil((count($users)-1)/5);
$div='<span class="hidden">'.$lastPage.'</span>';
echo $div;
?>
<script>
    makePaging("getUsers.php", 5, '#tb');
</script>
<div id="pages">

</div>
<?php
    require_once 'footer.php';
?>