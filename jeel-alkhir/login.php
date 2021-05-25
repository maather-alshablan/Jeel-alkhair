<?php require_once('header.php'); 

    if(isset($_SESSION['jeel_user_id'])) {
        header("location:admin.php");
    }
    /*$hash=password_hash("123", PASSWORD_DEFAULT);
    $sql = "UPDATE users  SET user_password = '$hash' WHERE user_id = 1";
    mysqli_query($con, $sql);
    */
    

if(isset($_POST['login'])){


    $email=$_POST['email'];
    $password=$_POST['password'];
   

    $stmt=$con->prepare("SELECT user_id ,user_name, user_email,	user_password FROM users WHERE user_email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $query=$stmt->bind_result($user_id,$user_name,$user_email,$user_password);
    $stmt->store_result();
    $num_of_rows=$stmt->num_rows;


    if($num_of_rows==0){
        echo'<script> alert("البريد الإلكتروني او كلمة المرور خاطئة");</script>';

    }elseif($num_of_rows==1){
        $stmt->fetch();
        $row=array();
        $row['user_id']=$user_id;
        $row['user_name']=$user_name;
        $row['user_email']=$user_email;
        $row['user_password']=$user_password;
        if(password_verify($password,$row['user_password'])){
            $_SESSION['jeel_user_id']=$user_id;
            echo'<script> location.href="admin.php";</script>';

        }else{

        echo'<script> alert("البريد الإلكتروني او كلمة المرور خاطئة");</script>';

            
        }
        $stmt->close();
        $con->close();

    }

}




?>


<br>
<br>
<br>
<br>

<p class="w3-col m2 l2 w3-right"></p>

<div class="w3-col m8 l8 w3-right sub-style"  id="1i">
         <br>
         <div class="w3-row w3-center">
            <img src="images/log-in.png" height="150">
         </div>

         <div class="container w3-row">
            <p class="w3-col l2 m2 s1 w3-right"></p>
             <form action="login.php" class="w3-col l8 m8 s10 w3-right" method="post">
                
                <div class="w3-col l12 m12 w3-right">
                    <label class="w3-right" for="name">الإيميل</label>
                    <input class="w3-col l12 m12 s12"  type="email" id="email" name="email"  required>
                </div>


                <div class="w3-col l12 m12 w3-right">
                    <label  class="w3-right" for="password"> كلمة المرور</label>
                    <input  class="w3-col l12 m12 s12"  type="password" id="password" name="password"  required>
                </div>   

                <div class="w3-col l12 m12 w3-right">
                    <br>
                    <p class="w3-col l5 m5 s4 w3-right"></p>
                    <input   class="w3-col l2 m2 s4 w3-right"  type="submit" value="Login" name="login">
                    <br>   
                    <br>   
                </div>


                
            </form>
         </div>

         

</div>

<?php require_once('footer.php'); ?>
