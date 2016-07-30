<?php
require_once 'header.php';
?>

<div id="content">
<script>
$( document ).ready(function() {
    checkFormInputs()
});

</script>
<div id="registrationForm">
    <h2>Registration:</h2>
    <form method="POST" id="registrationForm">
        <div class="labelAndInput">
            <label>Username:</label>
            <input type="text" id="name" name="username">
            <span class="errorloc"></span>
        </div>
        <div class="labelAndInput">
            <label>Mail:</label>
            <input type="text" id="email" name="email">
            <span class="errorloc"></span>
        </div>
        
        <div class="labelAndInput">
            <label>Password:</label>
            <input type="password" id="pass1" name="pass1">
            <span class="errorloc"></span>
        </div>
        <div class="labelAndInput">
            <label>Gender:</label>
            <input type="radio" name="sex" value="male">Male<br>
            <input type="radio" name="sex" value="female">Female
        </div>
        <div class="labelAndInput">
            <label>Reapeat password:</label>
            <input type="password" id="pass2" name="pass2">
            <span class="errorloc"></span>
        </div>
        
        <input type="submit" id="registerButton" value="Register" href="/index.php">
    </form>
</div>

</div>
<?php
	if ($_POST){
                if(isset($_POST['pass2']))
                {
                    $name = trim($_POST['username']);
                    $pass1 = trim($_POST['pass1']);
                    $pass2 = trim($_POST['pass2']);
                    $email = trim($_POST['email']);
                    $sex = trim($_POST['sex']);
                    fUTF8::clean($name);
                    fUTF8::clean($pass1);
                    fUTF8::clean($pass2);
                    fUTF8::clean($email);
                    if($pass1==$pass2){

                            $active_users = fRecordSet::buildFromSQL('User','SELECT users.* FROM users');

                            foreach ($active_users as $user) {
                                    $email_from_db = $user->getEmail();
                                    if ($email_from_db == $email) {
                                            echo "Email is already taken";
                                            die;
                                    }
                                }
                            foreach ($active_users as $user) {
                                    $name_from_db = $user->getUserName();
                                    if ($name_from_db == $name) {
                                            echo "Used username is already taken";
                                            die;
                                    }
                                }
                            

                            if (strlen($pass1)<5) {
                                    echo "Password should be with more than 5 symbols!";
                            }
                            $hashedPass = fCryptography::hashPassword($pass1);
                            //set information for new user in database
                            try {
                                $user = new User();
                                $user->setUserName($name);
                                $user->setPassword($hashedPass);
                                $user->setEmail($email);
                                if ($sex == 'male') {
                                    $user->setAvatar('images/profile_pictures/defaultMale.png');
                                }
                                else
                                {
                                    $user->setAvatar('images/profile_pictures/defaultFemale.png');
                                }
                                
                                $user->setCreated(new fTimestamp());
                                $user->store();
                            } catch (fExpectedException $e) {
                                echo $e->printMessage();
                            }
                    }
                    else
                    {
                            echo "Your passwords aren't equal!!!";
                    }
                }
	}
?>
<?php
    require_once 'footer.php';
?>