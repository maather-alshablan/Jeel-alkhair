<?php 
require_once('header.php'); 
  $request_state='معلق';

if(isset($_POST['submit'])){

    define('SITE_ROOT', realpath(dirname(__FILE__)));
    $file_name = $_FILES['file']['name'];
    $file_path = SITE_ROOT.'/files/cvs/'. time(). $file_name;
    $user_cv = 'files/cvs/'. time(). $file_name; 
    move_uploaded_file($_FILES['file']['tmp_name'], $file_path);

    $name=$_POST['name'];
    $phone=$_POST['phone-number'];
    $employee='employee';


    $stmt=$con->prepare("INSERT INTO requests(user_name, user_phone, user_cv, 	user_type, request_date, request_state) VALUES(?, ?, ?, ?, NOW(),?)");
    $stmt->bind_param("sisss", $name, $phone, $user_cv, $employee,$request_state);
    $query=$stmt->execute();

    if($query){
        echo'<script> alert("تم ارسال طلبك بنجاح");</script>';

    }else{
        echo'<script> alert(" عذرًا لم يتم ارسال طلبك لخطأ ما ");</script>';

    }

    $stmt->close();
    $con->close();

}


if(isset($_POST['submit2'])){

    define('SITE_ROOT', realpath(dirname(__FILE__)));
    $file_name = $_FILES['file1']['name'];
    $file_path = SITE_ROOT.'/files/cvs/'. time(). $file_name;
    $user_cv = 'files/cvs/'. time(). $file_name; 
    move_uploaded_file($_FILES['file1']['tmp_name'], $file_path);

    $name=$_POST['namev'];
    $phone=$_POST['phone-numberv'];
    $employee='volunteer';


    $stmt=$con->prepare("INSERT INTO requests(user_name, user_phone, user_cv, 	user_type, request_date,  request_state) VALUES(?, ?, ?, ?, NOW(),?)");
    $stmt->bind_param("sisss", $name, $phone, $user_cv, $employee,$request_state);
    $query=$stmt->execute();

    if($query){
        echo'<script> alert("تم ارسال طلبك بنجاح");</script>';

    }else{
        echo'<script> alert(" عذرًا لم يتم ارسال طلبك لخطأ ما ");</script>';

    }

    $stmt->close();
    $con->close();

}








?>

<div class="w3-row">
    <img src="images/fixed3.jpeg" width="100%" height="150px">
</div>

<br>
<br>
<div class="w3-row-padding">

        <p class="w3-col m1 l1 w3-right"></p>

        <div class=" w3-col  m3 l2 w3-right"   >
            <button  class="w3-col m12 l12 sub-button  " type="button"  id="j1">التوظيف</button>
            <button  class="w3-col m12 l12 sub-button  " type="button"  id="j2">التطوع</button>
             
        </div>

    

        <div class="w3-col m8 l8 w3-right sub-style"  id="ji1">
            
            <br>
            <div class="w3-row">
                <p class="sec-title w3-right"> التوظيف </p>
            </div>

            <div class="w3-row-padding">
                <form action="join-us.php" method="post" enctype="multipart/form-data">
                    <div class="w3-col l12  w3-right">
                                <p class="w3-col l2 m2 s1 w3-right"></p> 
                                <label class="w3-right w3-col l10 " style="text-align:right" for="name">الاسم  </label>
                                <p class="w3-col l2 m2 s1 w3-right"></p> 
                                <input class="w3-col l8  s12 w3-right label-color"  type="text" id="name" name="name" >
                    </div>


                    <div class="w3-col l12  w3-right">
                                <p class="w3-col l2 m2 s1 w3-right"></p>
                                <label  class="w3-right w3-col l10 " style="text-align:right" for="phone-number"> رقم الجوال</label>
                                <p class="w3-col l2 m2 s1 w3-right"></p> 
                                <input  class="w3-col l8  s12 w3-right label-color"  type="text" id="phone-number" name="phone-number" >
                    </div>  

                    <div class="w3-col l12  w3-right">
                                <p class="w3-col l2 m2 s1 w3-right"></p>
                                <label  class="w3-right w3-col l10 " style="text-align:right" for="cv"> السيرة الذاتية</label>
                                <p class="w3-col l2 m2 s1 w3-right"></p> 
                                <input  class="w3-col l8  s12 w3-right label-color"  type="file" id="id-number" name="file" >
                    </div> 

                    <input type="submit" name="submit" value="ارسال">
                    <br>
                    <br>
                </form>
            </div>

        </div>

        <div class="w3-col m8 l8 w3-right sub-style"  id="ji2" style="display:none;">
            <br>
            <div class="w3-row">
                <p class="sec-title w3-right"> التطوع </p>
            </div>

            <div class="w3-row-padding">
                <form action="join-us.php" method="post" enctype="multipart/form-data">
                        <div class="w3-col l12  w3-right">
                                    <p class="w3-col l2 m2 s1 w3-right"></p> 
                                    <label class="w3-right w3-col l10 " style="text-align:right" for="namev">الاسم</label>
                                    <p class="w3-col l2 m2 s1 w3-right"></p> 
                                    <input class="w3-col l8  s12 w3-right label-color"  type="text" id="namev" name="namev" >
                        </div>


                        <div class="w3-col l12  w3-right">
                                    <p class="w3-col l2 m2 s1 w3-right"></p>
                                    <label  class="w3-right w3-col l10 " style="text-align:right" for="phone-numberv"> رقم الجوال</label>
                                    <p class="w3-col l2 m2 s1 w3-right"></p> 
                                    <input  class="w3-col l8  s12 w3-right label-color"  type="text" id="phone-numberv" name="phone-numberv" >
                        </div>  

                        <div class="w3-col l12  w3-right">
                                    <p class="w3-col l2 m2 s1 w3-right"></p>
                                    <label  class="w3-right w3-col l10 " style="text-align:right" for="cv2"> السيرة الذاتية</label>
                                    <p class="w3-col l2 m2 s1 w3-right"></p> 
                                    <input  class="w3-col l8  s12 w3-right label-color"  type="file" id="cv2" name="file1" >
                        </div> 

                        <input type="submit" name="submit2" value="ارسال">
                        <br>
                        <br>
                </form>
            </div>

        </div>

</div>

<?php require_once('footer.php'); ?>