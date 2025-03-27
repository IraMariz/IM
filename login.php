<?php
 include 'views/header.php';
?>
<form id="loginform" action="models/login_user.php" method="POST">
    <label for="uname">Username or Email</label>
    <input type="text" name="uname" id="uname" placeholder="Username or Email" required>
    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass" placeholder="Password" required>
    <input type="checkbox" name="signedin" id="signedin" value="signedin"> 
     <label for="signedin">keep me signed in</label>
    <input type="submit" value="login"> 
    
</form>


<?php
 include 'views/footer.php';
?>
