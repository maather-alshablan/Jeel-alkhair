<?php require_once('header.php'); 

if(isset($_POST['submit'])){

  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['e-mail'];
  $subject=$_POST['subject'];
  $content=$_POST['letter'];


  $to="maather_alshablan@hotmail.com";
  $from=$email;

  $headers = "MIME-Version: 1.0\r\n";
  $headers .= 'From: ' . htmlspecialchars($from) . "\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  $headers .= 'Reply-To: ' . htmlspecialchars($from) . "\r\n";
  $headers.= "X-Mailer: PHP/" . phpversion();

  if(mail($to, $subject, $content, $headers)){
      echo'<script> alert("تم ارسال الرسالة بنجاح");</script>';
      

  }else{
      echo'<script> alert(" عذرًا لم يتم ارسال الرسالة لخطأ ما ");</script>';

  }

}




?>

<div class="w3-row">
  <p class="titles">   للتواصل مع الادارة العامة </p>
</div>

<div class="w3-col s12  text-center">
  <div class="icons-container ">
      <p><i class="fas fa-envelope "> </i> dar.om.alkhir@gmail.com</p>
      <p><i class="fas fa-phone "> </i>  0531915606</p>
      <p><i class="fas fa-map-marker-alt"> </i> المملكة العربية السعودية-جدة-الحمدانية-مقابل قاعة لندن<p>
  </div>
   
</div>

<div class="container w3-row">
  <p class="w3-col l2 m2 s1 w3-right"></p>
  <form action="contact-us.php" class="w3-col l8 m8 s10 w3-right" method="post">
    
    <div class="w3-col l12 m12 w3-right">
      <label class="w3-right" for="name">الاسم</label>
      <input class="w3-col l12 m12 s12"  type="text" id="name" name="name" placeholder="الاسم">
    </div>


    <div class="w3-col l12 m12 w3-right">
      <label  class="w3-right" for="phone">رقم الجوال</label>
      <input  class="w3-col l12 m12 s12"  type="text" id="phone" name="phone" placeholder="مثال:0531915606  ">
    </div>   

    <div class="w3-col l12 m12 w3-right">
      <label class="w3-right" for="e-mail"> البريد الإلكتروني</label>
      <input   class="w3-col l12 m12 s12" type="text" id="e-mail" name="e-mail" >
    </div>

    <div class="w3-col l12 m12 w3-right">
      <label class="w3-right" for="subject"> عنوان الرسالة</label>
      <input   class="w3-col l12 m12 s12" type="text" id="subject" name="subject"  >
    </div>

    <div class="w3-col l12 m12 w3-right">
      <label class="w3-right" for="letter">نص الرسالة</label>
      <textarea   class="w3-col l12 m12 s12" id="letter" name="letter" style="height:200px"></textarea>
   </div>  

    

   <div class="w3-col l12 m12 w3-right">
   <br>
     <p class="w3-col l5 m5 s4 w3-right"></p>
      <input   class="w3-col l2 m2 s4 w3-right" name="submit" type="submit" value="ارسال">
   </div>

  </form>
</div>


<div class="w3-row">
  <br>

  <p class="w3-col l2 m2 s1 w3-right"></p>

  <div class="w3-col l8 m8 s10 w3-right">

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.3563630202752!2d39.19970668505543!3d21.72770598562402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c17de15e50c045%3A0x2652bf30aa7d8943!2z2YXYsdmD2LIg2KzZitmEINin2YTYrtmK2LE!5e0!3m2!1sar!2ssa!4v1597175084475!5m2!1sar!2ssa"  class="w3-col l12 m12 s12 w3-right" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


  </div>  
</div>

<?php require_once('footer.php'); ?>