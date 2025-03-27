<?php
 include 'views/header.php';
?>
<form id="loginform" action="models/register_user.php" method="POST">
  
    <label for="uname">Username</label>
      <?php 
        if(isset($_GET['uname_error'])){
             if($_GET['uname_error']==1){
                echo "<span class='error_msg'>Invalid Username</span>";
            }
        }
    ?>
        <input type="text" name="uname" id="uname" placeholder="Username" required>
        
    <label for="email">Email</label>
         <?php 
        if(isset($_GET['email_error'])){
             if($_GET['email_error']==1){
                echo "<span class='error_msg'>Invalid Email</span>";
            }
        }
    ?>
        <input type="text" name="email" id="email" placeholder="Email" required>
        
    <label for="fname">First name</label>
        <input type="text" name="fname" id="fname" placeholder="First Name" required>
    <label for="lname">Last name</label>
        <input type="text" name="lname" id="lname" placeholder="Last Name" required>
        
            <div id="cbgender">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="nbinary">Non-Binary</option>
                    <option value="pfrnts">Prefer not to say</option>
                </select>
            </div>
        
        <label for="bdate">Birthday</label>
        <input type="date" name="bdate" id="bdate" required>
    <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" placeholder="Password" required>
         <label for="conpass">Confirm Password</label>
        <input type="password" name="conpass" id="conpass" placeholder="Password" required>
    <input type="checkbox" name="signedin" id="signedin" value="signedin"> 
    <label for="signedin">Agree:<a href="" style="color: #0000ff">End-user License</a></label>
    <input type="submit" value="login"> 
    
</form>


<?php
 include 'views/footer.php';
?>

