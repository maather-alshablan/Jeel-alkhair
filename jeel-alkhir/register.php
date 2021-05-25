<?php 

require_once('header.php');

if(isset($_POST['submit'])){



    $question_one = $_POST['name'];
    $question_two = $_POST['nName'];
    $question_three = $_POST['birthday'];
    $question_four = $_POST['age'];
    $question_five = $_POST['pre'];
    $question_six = $_POST['sch-name'];
    $question_seven = $_POST['save'];
    $question_eight = $_POST['save-name'];
    $question_nine = $_POST['pro'];
    $question_ten = $_POST['pro-name'];

    $question_eleven = $_POST['ple'];
    $question_twelve = $_POST['pro-letters'];
    $question_thirteen = $_POST['breakfast'];
    $question_fourteen = $_POST['breakfast-re'];
    $question_fifteen= $_POST['eat'];
    $question_sixteen = $_POST['eat-re'];
    $question_seventeen = $_POST['family'];
    $question_eighteen = $_POST['live'];
    $question_nineteen = $_POST['brothers'];

    $question_twenty = $_POST['oreder'];
    $question_twenty_one = $_POST['parent'];
    $question_twenty_two = $_POST['catch'];
    $question_twenty_three = $_POST['change'];
    $question_twenty_four  = $_POST['bathroom'];
    $question_twenty_five= $_POST['remember'];
    $question_twenty_six = $_POST['collaborate'];
    $question_twenty_seven = $_POST['take'];
    $question_twenty_eight  = $_POST['aggressive'];
    $question_twenty_nine= $_POST['hyperactive'];

    $question_thirty= implode(" , ",$_POST["1"]);
    $question_thirty_one= implode(" , ",$_POST["2"]);
    
    $question_thirty_two= $_POST['health'];
    $question_thirty_three= $_POST['health-re'];
    $question_thirty_four = $_POST['fname'];
    $question_thirty_five = $_POST['nationality'];
    $question_thirty_six  = $_POST['id-number'];
    $question_thirty_seven= $_POST['issuing'];
    $question_thirty_eight = $_POST['qualification'];
    $question_thirty_nine = $_POST['job'];
    $question_fourty  = $_POST['work-place'];
    $question_fourty_one  = $_POST['work-address'];
    $question_fourty_two= $_POST['work-number'];
 
    $question_fourty_three= $_POST['phone-number'];
    $question_fourty_four= $_POST['Mname'];
    $question_fourty_five = $_POST['Mnationality'];
    $question_fourty_six= $_POST['Mid-number'];
    $question_fourty_seven= $_POST['Missuing'];
    $question_fourty_eight= $_POST['Mqualification'];
    $question_fourty_nine= $_POST['Mjob'];
    $question_fifty= $_POST['Mwork-place'];
    $question_fifty_one= $_POST['Mwork-address'];
    $question_fifty_two= $_POST['Mwork-number'];
    $question_fifty_three= $_POST['Mphone-number'];

    $question_fifty_four= $_POST['emr-name'];
    $question_fifty_five= $_POST['emr-number'];
    $question_fifty_six = $_POST['rules'];
    $question_fifty_seven = $_POST['rules-re'];
    $question_fifty_eight  = $_POST['behave'];
    $question_fifty_nine= $_POST['hit'];
    $question_sixty = $_POST['hit-re'];
    $question_sixty_one= $_POST['talk'];
    $question_sixty_two  = $_POST['tv'];
    $question_sixty_three= $_POST['tv-re'];
 
    $question_sixty_four= $_POST['hours'];
    $question_sixty_five= $_POST['midday'];
    $question_sixty_six = $_POST['sleep'];
    $question_sixty_seven = $_POST['goal'];
    $question_sixty_eight  = $_POST['ch'];
    $question_sixty_nine= $_POST['fees'];
 
    $pending='pending';
    
 
 if($question_sixty_nine=='تحويل بنكي'){

    define('SITE_ROOT', realpath(dirname(__FILE__)));
    $file_name = $_FILES['file']['name'];
    $file_path = SITE_ROOT.'/files/receipts/'. time(). $file_name;
    $user_receipt = 'files/receipts/'. time(). $file_name; 
    move_uploaded_file($_FILES['file']['tmp_name'], $file_path);

    $stmt=$con->prepare("INSERT INTO students( student_name, register_date, payment_state, payment_receipt, payment_type) VALUES(?, NOW(),?, ?, ?)");
    $stmt->bind_param("ssss", $question_one , $pending ,  $user_receipt, $question_sixty_nine );
}else{
     $stmt=$con->prepare("INSERT INTO students( student_name, register_date, payment_state, payment_receipt, payment_type) VALUES(?, NOW(),?, NULL,?)");
     $stmt->bind_param("sss", $question_one , $pending , $question_sixty_nine );

}

    $query=$stmt->execute();

    if($query){

     $stmt2 = $con->prepare("SELECT student_id FROM students ORDER BY student_id DESC LIMIT 1");
     $stmt2->execute();
     $stmt2->bind_result($student_id);
     $stmt2->fetch();
     $row2 = array();
     $row2['student_id'] = $student_id;
     $stmt2->close();
   
     $stmt1=$con->prepare("INSERT INTO answers(student_id, question_id, answer) 
     VALUES
     (?,2,?),
     (?,3,?),
     (?,4,?),
     (?,5,?),
     (?,6,?),
     (?,7,?),
     (?,8,?),
     (?,9,?),
     (?,10,?),
     (?,11,?),
     (?,12,?),
     (?,13,?),
     (?,14,?),
     (?,15,?),
     (?,16,?),
     (?,17,?),
     (?,18,?),
     (?,19,?),
     (?,20,?),
     (?,21,?),
     (?,22,?),
     (?,23,?),
     (?,24,?),
     (?,25,?),
     (?,26,?),
     (?,27,?),
     (?,28,?),
     (?,29,?),
     (?,30,?),
     (?,31,?),
     (?,32,?),
     (?,33,?),
     (?,34,?),
     (?,35,?),
     (?,36,?),
     (?,37,?),
     (?,38,?),
     (?,39,?),
     (?,40,?),
     (?,41,?),
     (?,42,?),
     (?,43,?),
     (?,44,?),
     (?,45,?),
     (?,46,?),
     (?,47,?),
     (?,48,?),
     (?,49,?),
     (?,50,?),
     (?,51,?),
     (?,52,?),
     (?,53,?),
     (?,54,?),
     (?,55,?),
     (?,56,?),
     (?,57,?),
     (?,58,?),
     (?,59,?),
     (?,60,?),
     (?,61,?),
     (?,62,?),
     (?,63,?),
     (?,64,?),
     (?,65,?),
     (?,66,?),
     (?,67,?),
     (?,68,?),
     (?,69,?) ");

     $stmt1->bind_param("isisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisisis", 
     $student_id , $question_two,
     $student_id , $question_three,  
     $student_id , $question_four,
     $student_id , $question_five, 
     $student_id , $question_six, 
     $student_id , $question_seven, 
     $student_id , $question_eight,
     $student_id , $question_nine,
     $student_id , $question_ten,  
     $student_id , $question_eleven,
     $student_id , $question_twelve, 
     $student_id , $question_thirteen, 
     $student_id , $question_fourteen, 
     $student_id , $question_fifteen,
     $student_id , $question_sixteen,
     $student_id , $question_seventeen,  
     $student_id , $question_eighteen,
     $student_id , $question_nineteen, 
     $student_id , $question_twenty, 
     $student_id , $question_twenty_one, 
     $student_id , $question_twenty_two,
     $student_id , $question_twenty_three,
     $student_id , $question_twenty_four,  
     $student_id , $question_twenty_five,
     $student_id , $question_twenty_six, 
     $student_id , $question_twenty_seven, 
     $student_id , $question_twenty_eight, 
     $student_id , $question_twenty_nine,
     $student_id , $question_thirty,
     $student_id , $question_thirty_one,
     $student_id , $question_thirty_two,  
     $student_id , $question_thirty_three,
     $student_id , $question_thirty_four, 
     $student_id , $question_thirty_five, 
     $student_id , $question_thirty_six, 
     $student_id , $question_thirty_seven,
     $student_id , $question_thirty_eight,
     $student_id , $question_thirty_nine,  
     $student_id , $question_fourty,
     $student_id , $question_fourty_one, 
     $student_id , $question_fourty_two, 
     $student_id , $question_fourty_three, 
     $student_id , $question_fourty_four,
     $student_id , $question_fourty_five,
     $student_id , $question_fourty_six,  
     $student_id, $question_fourty_seven,
     $student_id , $question_fourty_eight, 
     $student_id , $question_fourty_nine, 
     $student_id , $question_fifty, 
     $student_id , $question_fifty_one,
     $student_id , $question_fifty_two,
     $student_id , $question_fifty_three,  
     $student_id, $question_fifty_four,
     $student_id , $question_fifty_five, 
     $student_id , $question_fifty_six, 
     $student_id , $question_fifty_seven, 
     $student_id , $question_fifty_eight,
     $student_id , $question_fifty_nine,
     $student_id , $question_sixty,
     $student_id , $question_sixty_one,
     $student_id , $question_sixty_two,
     $student_id , $question_sixty_three,
     $student_id , $question_sixty_four,
     $student_id , $question_sixty_five,
     $student_id , $question_sixty_six,
     $student_id , $question_sixty_seven,
     $student_id , $question_sixty_eight,
     $student_id , $question_sixty_nine);
     $query1=$stmt1->execute();
     $stmt1->close();
        echo'<script> alert("تم ارسال طلبك بنجاح");</script>';


    }else{
        echo'<script> alert(" عذرًا لم يتم ارسال طلبك لخطأ ما ");</script>';

    }

    $stmt->close();
    $con->close();

}








?>


<div class="w3-row">
  <p class="titles">  التسجيل </p>
</div>

<div class="w3-row">
  <p class="titles">   بيانات الطفل الشخصية والاجتماعية </p>
</div>

<div class="container w3-row">
  <p class="w3-col l2 m2 s1 w3-right"></p>
  <form action="register.php" class="w3-col l8 m8 s10 w3-right" method="post" enctype="multipart/form-data">


    <div class="w3-col l6  w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
          <label class="w3-right w3-col l10 " style="text-align:right" for="name">اسم الطفل رباعيًا</label>
          <p class="w3-col l2 m2 s1 w3-right"></p> 
          <input class="w3-col l8  s12 w3-right border-green"  type="text" id="name" name="name"  required>
    </div>


    <div class="w3-col l6  w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p>
          <label  class="w3-right w3-col l10 " style="text-align:right" for="nName">اسم الدلع </label>
          <p class="w3-col l2 m2 s1 w3-right"></p> 
          <input  class="w3-col l8  s12 w3-right border-green"  type="text" id="nName" name="nName" required >
    </div>   

    <div class="w3-col l6  w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
          <label class="w3-right w3-col l10 "  style="text-align:right" for="birthday"> تاريخ الميلاد </label>
          <p class="w3-col l2 m2 s1 w3-right"></p> 
          <input   class="w3-col l8  s12 w3-right border-blue" type="date" id="birthday" name="birthday" required >
    </div>

    <div class="w3-col l6 w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
          <label class="w3-right w3-col l10 " style="text-align:right" for="age"> عمر الطفل </label>
          <p class="w3-col l2 m2 s1 w3-right"></p> 
          <input   class="w3-col l8 s12 w3-right border-blue" type="number" id="age" name="age"  required >
    </div>

    <div class="w3-col l6 w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 

          <div class="w3-row ">
               <p class="w3-col l2  w3-right"></p> 
               <label class="w3-right  " style="text-align:right" for="pre-school"> هل سبق له الالتحاق بمدرسة؟ </label>
               <input class="w3-right " type="radio" id="pre-no" name="pre" value="لا" checked >
               <label class="w3-right" for="pre-no"> لا </label>
               <input class="w3-right " type="radio" id="pre-yes" name="pre" value="نعم" >
               <label class="w3-right" for="pre-yes"> نعم </label>
          </div>    

        <p class="w3-col l2 m2 s1 w3-right"></p> 
        <input  class="w3-col l8 s12 w3-right border-red"  type="text" id="sch-name" name="sch-name" placeholder="اسم المدرسة"  style="display: none;">
   </div>  

   <div class="w3-col l6  w3-right">

          <p class="w3-col l2 m2 s1 w3-right"></p> 
          <div class="w3-row ">
               <p class="w3-col l2  w3-right"></p> 
               <label class="w3-right w3-col l8 "style="text-align:right"  for="save-name">هل يحفظ شيء من القرآن؟</label>
               <input class="w3-right checkbox" type="radio" id="save-no" name="save" value="لا" checked >
               <label class="w3-right" for="pre-no"> لا </label>
               <input class="w3-right checkbox" type="radio" id="save-yes" name="save" value="نعم" >
               <label class="w3-right" for="pre-yes"> نعم </label>
          </div>    

        <p class="w3-col l2 m2 s1 w3-right"></p> 
        <input  class="w3-col l8 s12 w3-right border-red"  type="text" id="save-name" name="save-name" placeholder="السور" style="display: none;" >
   </div>  

   <div class="w3-col l6  w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
          <div class="w3-row">
               <p class="w3-col l2  w3-right"></p> 
               <label class="w3-right w3-col l8 " style="text-align:right" for="pro-name">هل لدى الطفل مشاكل في النطق؟</label>
               
               <input class="w3-right checkbox" type="radio" id="pro-no" name="pro" value="لا" checked>
               <label class="w3-right" for="pro-no"> لا </label>
               <input class="w3-right checkbox" type="radio" id="pro-yes" name="pro" value="نعم">
               <label class="w3-right" for="pro-yes"> نعم </label>
          </div>
        <p class="w3-col l2 m2 s1 w3-right"></p> 
        <input  class="w3-col l8  s12 w3-right border-purple"  type="text" id="pro-name" name="pro-name" placeholder="ماهو" style="display: none;" >
   </div>  


   <div class="w3-col l6  w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l8 " style="text-align:right" for="pro-letters">هل هناك حروف يصعب نطقها ؟</label>
        
        <input class="w3-right checkbox" type="radio" id="ple-no" name="ple"  value="لا" checked>
        <label class="w3-right" for="ple-no"> لا </label>
        <input class="w3-right checkbox" type="radio" id="ple-yes" name="ple"  value="نعم">
        <label class="w3-right" for="ple-yes"> نعم </label>

        <p class="w3-col l2 m2 s1 w3-right"></p> 
        <input  class="w3-col l8  s12 w3-right border-purple"  type="text" id="pro-letters" name="pro-letters" placeholder="ماهي الحروف" style="display: none;" >
   </div>  

   <div class="w3-col l6  w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l8 "  style="text-align:right" for="breakfast">هل يتناول الفطور في الصباح ؟</label>
        
        <input class="w3-right checkbox" type="radio" id="breakfast-no" name="breakfast"  value="لا" checked>
        <label class="w3-right" for="breakfast-no"> لا </label>
        <input class="w3-right checkbox" type="radio" id="breakfast-yes" name="breakfast"value="نعم" >
        <label class="w3-right" for="breakfast-yes"> نعم </label>

        <p class="w3-col l2 m2 s1 w3-right"></p> 
        <input  class="w3-col l8 s12 w3-right border-orange"  type="text" id="breakfast-re" name="breakfast-re" placeholder="السبب"  style="display: none;">
   </div>  

   <div class="w3-col l6  w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l8 " style="text-align:right" for="eat">هل يعتمد على نفسه عند الأكل ؟</label>
        
        <input class="w3-right checkbox" type="radio" id="eat-no" name="eat" value="لا" checked >
        <label class="w3-right" for="eat-no"> لا </label>
        <input class="w3-right checkbox" type="radio" id="eat-yes" name="eat" value="نعم" >
        <label class="w3-right" for="eat-yes"> نعم </label>

        <p class="w3-col l2 m2 s1 w3-right"></p> 
        <input  class="w3-col l8 s12 w3-right border-orange"  type="text" id="eat-re" name="eat-re" placeholder="السبب" style="display: none;">
   </div>  

   <div class="w3-col l6  w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l10 " style="text-align:right" for="family"> الحالة الإجتماعية للوالدين؟ </label>
        <p class="w3-col l2 m2 s1 w3-right"></p> 
        <input  class="w3-col l8 s12 w3-right border-gold"  type="text" id="family" name="family" required >
   </div>  

   <div class="w3-col l6  w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l10 " style="text-align:right" for="live">مع من يعيش الطـفل؟</label>
        <p class="w3-col l2 m2 s1 w3-right"></p> 
        <input  class="w3-col l8  s12 w3-right border-gold"  type="text" id="live" name="live" required>
   </div>  


   <div class="w3-col l6  w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l10" style="text-align:right" for="brothers"> عدد الأخوة </label>
        <p class="w3-col l2 m2 s1 w3-right"></p> 
        <input  class="w3-col l8 s12 w3-right border-green"  type="number" id="brothers" name="brothers" required>
   </div> 

   <div class="w3-col l6  w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l10 " style="text-align:right" for="oreder">ترتيب الطفل </label>
        <p class="w3-col l2 m2 s1 w3-right"></p> 
        <input  class="w3-col l8  s12 w3-right border-green"  type="number" id="oreder" name="oreder"  required>
   </div> 

   <div class="w3-col l6  w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l8 " style="text-align:right" for="parent">هل الوالدين على قيد الحياة؟</label>
        
        <input class="w3-right checkbox" type="radio" id="parent-no" name="parent"  value="لا"  >
        <label class="w3-right" for="parent-no"> لا </label>
        <input class="w3-right checkbox" type="radio" id="parent-yes" name="parent" value="نعم" checked >
        <label class="w3-right" for="parent-yes"> نعم </label>
    </div>

   <div class="w3-col l6 w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l8 " style="text-align:right" for="catch">هل يجيد مسك القلم بطريقة صحيحة؟</label>
        
        <input class="w3-right checkbox" type="radio" id="catch-no" name="catch"  value="لا" checked >
        <label class="w3-right" for="catch-no"> لا </label>
        <input class="w3-right checkbox" type="radio" id="catch-yes" name="catch" value="نعم">
        <label class="w3-right" for="catch-yes"> نعم </label>
    </div>


   <div class="w3-col l6  w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l8" style="text-align:right" for="change">هل يعتمد على نفسه عند تبديل الملابس ؟</label>
        
        <input class="w3-right checkbox" type="radio" id="change-no" name="change" value="لا" checked >
        <label class="w3-right" for="change-no"> لا </label>
        <input class="w3-right checkbox" type="radio" id="change-yes" name="change" value="نعم" >
        <label class="w3-right" for="change-yes"> نعم </label>
    </div>

    <div class="w3-col l6 w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l8 " style="text-align:right" for="bathroom">هل يعتمد على نفسه عند دخول الحمام؟</label>
        
        <input class="w3-right checkbox" type="radio" id="bathroom-no" name="bathroom" value="لا" checked>
        <label class="w3-right" for="bathroom-no"> لا </label>
        <input class="w3-right checkbox" type="radio" id="bathroom-yes" name="bathroom" value="نعم" >
        <label class="w3-right" for="bathroom-yes"> نعم </label>
    </div>

    <div class="w3-col l6 w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l8 " style="text-align:right" for="remember">هل يحتاج للتذكير بالحمام؟</label>
        
        <input class="w3-right checkbox" type="radio" id="remember-no" name="remember" value="لا">
        <label class="w3-right" for="remember-no"> لا </label>
        <input class="w3-right checkbox" type="radio" id="remember-yes" name="remember" value="نعم" checked >
        <label class="w3-right" for="remember-yes"> نعم </label>
    </div>

    <div class="w3-col l6 w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l8 " style="text-align:right" for="collaborate">هل يتعاون مع من حوله؟</label>
        
        <input class="w3-right checkbox" type="radio" id="collaborate-no" name="collaborate" value="لا" >
        <label class="w3-right" for="collaborate-no"> لا </label>
        <input class="w3-right checkbox" type="radio" id="collaborate-yes" name="collaborate" value="نعم" checked >
        <label class="w3-right" for="collaborate-yes"> نعم </label>
    </div>

    <div class="w3-col l6 w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l8 " style="text-align:right" for="take">هل يأخذ ممتلكات الغير ؟</label>
        
        <input class="w3-right checkbox" type="radio" id="take-no" name="take"  value="لا" checked>
        <label class="w3-right" for="take-no"> لا </label>
        <input class="w3-right checkbox" type="radio" id="take-yes" name="take" value="نعم" >
        <label class="w3-right" for="take-yes"> نعم </label>
    </div>

    <div class="w3-col l6  w3-right ">
           <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l8 " style="text-align:right" for="aggressive">هل هو عنيف مع الأخرين ؟</label>
        
        <input class="w3-right checkbox" type="radio" id="aggressive-no" name="aggressive"  value="لا" checked>
        <label class="w3-right" for="aggressive-no"> لا </label>
        <input class="w3-right checkbox" type="radio" id="aggressive-yes" name="aggressive"  value="نعم">
        <label class="w3-right" for="aggressive-yes"> نعم </label>
    </div>

    <div class="w3-col l6 w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right w3-col l8 " style="text-align:right" for="hyperactive">هل يميل للنشاط الزائد ؟</label>
        
        <input class="w3-right checkbox" type="radio" id="hyperactive-no" name="hyperactive"  value="لا" checked>
        <label class="w3-right" for="hyperactive-no"> لا </label>
        <input class="w3-right checkbox" type="radio" id="hyperactive-yes" name="hyperactive"  value="نعم">
        <label class="w3-right" for="hyperactive-yes"> نعم </label>
    </div>

    <p class="w3-col l6 w3-right"></p>
    

    <div class="w3-row w3-right">
          <p class="w3-col l2 w3-right"></p> 
          <div class="w3-col l10 w3-right">
               <label class="w3-right  " style="text-align:right" for="behavioral-problems">هل لدى الطفل مشاكل سلوكية ؟</label>
               
               <input class="w3-right checkbox" type="checkbox" id="bad-words" name="1[]" value="التلفظ بالفاظ نابية" >
               <label class="w3-right" for="bad-words">التلفظ بألفاظ نابية</label>
               <input class="w3-right checkbox" type="checkbox" id="bite" name="1[]" value="العض" >
               <label class="w3-right" for="bite">العض</label>
               <input class="w3-right checkbox" type="checkbox" id="beating" name="1[]"  value="الضرب">
               <label class="w3-right" for="beating">الضرب</label>
               <input class="w3-right checkbox" type="checkbox" id="stealing" name="1[]" value="السرقة" >
               <label class="w3-right" for="stealing">السرقة </label>
               <input class="w3-right checkbox" type="checkbox" id="lying" name="1[]" value="الكذب">
               <label class="w3-right" for="lying">الكذب</label>
              
          </div>
    </div>

    <div class="w3-col l12 m12 w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right " style="text-align:right" for="appar-adj">ما الصفة الظاهرة على الطفل؟</label>
        
        <input class="w3-right checkbox" type="checkbox" id="selfishness" name="2[]" value="الأنانية وحب الذات" >
        <label class="w3-right" for="selfishness"> الأنانية وحب الذات </label>
        <input class="w3-right checkbox" type="checkbox" id="jealous" name="2[]" value="الغيرة">
        <label class="w3-right" for="jealous"> الغيرة </label>
        <input class="w3-right checkbox" type="checkbox" id="confidence" name="2[]" value="عدم الثقة بالنفس">
        <label class="w3-right" for="confidence"> عدم الثقة بالنفس </label>
        <input class="w3-right checkbox" type="checkbox" id="fear" name="2[]" value="الخوف" >
        <label class="w3-right" for="fear"> الخوف </label>
        <input class="w3-right checkbox" type="checkbox" id="introversionr" name="2[]" value="الانطواء" >
        <label class="w3-right" for="introversion"> الانطواء </label>
        
    </div>

    <div class="w3-col l6 w3-right">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
        <label class="w3-right " style="text-align:right" for="health-problems">هل يعاني الطفل من مشاكل صحية  ؟</label>
        
        <input class="w3-right checkbox" type="radio" id="health-no" name="health" value="لا" checked>
        <label class="w3-right" for="health-no"> لا </label>
        <input class="w3-right checkbox" type="radio" id="health-yes" name="health"  value="نعم">
        <label class="w3-right" for="health-yes"> نعم </label>

        <p class="w3-col l2 m2 s1 w3-right"></p> 
        <textarea class="w3-col l8  s11 w3-right border-gold"  type="text" id="health-re" name="health-re" placeholder="اذكريها"  style="display:none;"></textarea>
        
   </div>  



 <div class="w3-row">
     <hr>
     <p class="titles">   بيانات الأم والأب </p>
 </div>




               <div class="w3-col l6  w3-right ">
                    
                         <p class="w3-col l2 m2 s1 "></p>
                         <label class=" w3-col l12" style="text-align:right" for="fname">اسم الأب  رباعيًا</label>
                         <p class="w3-col l2 m2 s1 "></p> 
                         <input class="w3-col l8  s12  label-color"  type="text" id="fname" name="fname" required >
               </div>


               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="nationality"> الجنسية</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right label-color"  type="text" id="nationality" name="nationality" required >
               </div>  

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="id-number"> رقم الهوية</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right label-color"  type="text" id="id-number" name="id-number" required>
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10  " style="text-align:right" for="issuing"> جهة الإصدار</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right label-color"  type="text" id="issuing" name="issuing"  required>
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="qualification"> المؤهل العلمي</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right label-color"  type="text" id="qualification" name="qualification" required >
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="job"> الوظيقة</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right label-color"  type="text" id="job" name="job" required >
               </div> 


               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="work-place"> جهة العمل</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right label-color"  type="text" id="work-place" name="work-place" required>
               </div> 


               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="work-address"> عنوان العمل</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right label-color"  type="text" id="work-address" name="work-address" required >
               </div> 


               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="work-number"> هاتف العمل </label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right label-color"  type="text" id="work-number" name="work-number" required >
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="phone-number"> الجوال </label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right label-color"  type="text" id="phone-number" name="phone-number" required>
               </div> 


               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <label class="w3-right w3-col l10 " style="text-align:right" for="Mname">اسم الأم  رباعيًا</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input class="w3-col l8  s12 w3-right input-color"  type="text" id="Mname" name="Mname" required>
               </div>


               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="Mnationality"> الجنسية</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right input-color"  type="text" id="Mnationality" name="Mnationality" required >
               </div>  

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="Mid-number"> رقم الهوية</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right input-color"  type="text" id="Mid-number" name="Mid-number" required >
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10  " style="text-align:right" for="Missuing"> جهة الإصدار</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right input-color"  type="text" id="Missuing" name="Missuing" required >
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="Mqualification"> المؤهل العلمي</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right input-color"  type="text" id="Mqualification" name="Mqualification"  required>
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="Mjob"> الوظيقة</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right input-color"  type="text" id="Mjob" name="Mjob" required>
               </div> 


               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="Mwork-place"> جهة العمل</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right input-color"  type="text" id="Mwork-place" name="Mwork-place" required>
               </div> 


               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="Mwork-address"> عنوان العمل</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right input-color"  type="text" id="Mwork-address" name="Mwork-address" required >
               </div> 


               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="Mwork-number"> هاتف العمل </label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right input-color"  type="text" id="Mwork-number" name="Mwork-number" required>
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="Mphone-number"> الجوال </label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right input-color"  type="text" id="Mphone-number" name="Mphone-number" required >
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="emr-name"> اسم قريب لحالات الطوارئ </label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right border-red"  type="text" id="emr-name" name="emr-name" required>
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="emr-number"> رقم الجوال </label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right border-red"  type="text" id="emr-number" name="emr-number" required>
               </div> 

               <div class="w3-col l6  w3-right">
                    <p class="w3-col l2 m2 s1 w3-right"></p> 
                    <label class="w3-right w3-col l8 " style="text-align:right" for="rules">هل يوجد قوانين وضوابط يلتزم بها الطفل في المنزل ؟</label>
                    
                    <input class="w3-right checkbox" type="radio" id="rules-no" name="rules"  value="لا" checked>
                    <label class="w3-right" for="rules-no"> لا </label>
                    <input class="w3-right checkbox" type="radio" id="rules-yes" name="rules" value="نعم" checked>
                    <label class="w3-right" for="rules-yes"> نعم </label>

                    <p class="w3-col l2 m2 s1 w3-right"></p> 
                    <input  class="w3-col l8 s12 w3-right border-blue"  type="text" id="rules-re" name="rules-re" placeholder="السبب"  style="display:none;">
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="behave"> كيف يكون تصرفك عند ارتكاب طفلك أي خطأ؟ </label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right border-blue"  type="text" id="behave" name="behave" required>
               </div> 

               <div class="w3-col l6  w3-right">
                    <p class="w3-col l2 m2 s1 w3-right"></p> 
                    <label class="w3-right w3-col l8 " style="text-align:right" for="hit">هل تستخدمين الضرب كوسيلة تربوية ؟</label>
                    
                    <input class="w3-right checkbox" type="radio" id="hit-no" name="hit"  value="لا" checked>
                    <label class="w3-right" for="hit-no"> لا </label>
                    <input class="w3-right checkbox" type="radio" id="hit-yes" name="hit" value="نعم">
                    <label class="w3-right" for="hit-yes"> نعم </label>

                    <p class="w3-col l2 m2 s1 w3-right"></p> 
                    <input  class="w3-col l8 s12 w3-right border-red"  type="text" id="hit-re" name="hit-re" placeholder="السبب" style="display:none;">
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="talk">هل تجيدين لغة الحوار مع طفلك؟</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right border-red"  type="text" id="talk" name="talk" required>
               </div> 

               <div class="w3-col l6  w3-right">
                    <p class="w3-col l2 m2 s1 w3-right"></p> 
                    <label class="w3-right w3-col l8 " style="text-align:right" for="tv">هل يقضي وقتًا طويلاً في مشاهدة التلفاز؟</label>
                    
                    <input class="w3-right checkbox" type="radio" id="tv-no" name="tv" value="لا" checked>
                    <label class="w3-right" for="tv-no"> لا </label>
                    <input class="w3-right checkbox" type="radio" id="tv-yes" name="tv" value="نعم">
                    <label class="w3-right" for="tv-yes"> نعم </label>

                    <p class="w3-col l2 m2 s1 w3-right"></p> 
                    <input  class="w3-col l8 s12 w3-right border-purple"  type="text" id="tv-re" name="tv-re" placeholder="السبب" style="display:none;">
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="hours">كم ساعة؟</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right border-purple"  type="number" id="hours" name="hours" required>
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="midday">هل ينام في النهار؟</label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right border-orange"  type="text" id="midday" name="midday" required>
               </div> 

               <div class="w3-col l6  w3-right">
                         <p class="w3-col l2 m2 s1 w3-right"></p>
                         <label  class="w3-right w3-col l10 " style="text-align:right" for="sleep">وقت النوم ليلًا (الساعة) </label>
                         <p class="w3-col l2 m2 s1 w3-right"></p> 
                         <input  class="w3-col l8  s12 w3-right border-orange"  type="text" id="sleep" name="sleep" required>
               </div> 


               <div class="w3-col l6 w3-right">
               <p class="w3-col l2 m2 s1 w3-right"></p> 
                    <label class="w3-right " style="text-align:right" for="goal">ما هو هدفك من تسجيل طفلك في الروضة </label>
               
                    <p class="w3-col l2 m2 s1 w3-right"></p> 
                    <textarea class="w3-col l8  s11 w3-right border-gold"  type="text" id="goal" name="goal" required ></textarea>
               </div>  

               <div class="w3-col l6 w3-right">
               <p class="w3-col l2 m2 s1 w3-right"></p> 
                    <label class="w3-right " style="text-align:right" for="choose">لماذا اخترت روضتنا بالتحديد </label>
               
                    <p class="w3-col l2 m2 s1 w3-right"></p> 
                    <textarea class="w3-col l8  s11 w3-right border-gold"  type="text" id="ch" name="ch" required></textarea>
                    
               </div>  



               
          


     <div class="container w3-row">
          <br>
          <br>
          <hr>


     <div class="w3-col l12 w3-right ">
               <p class="w3-col l2 m2 s1 w3-right"></p> 
          <label class="w3-right w3-col l8 " style="text-align:right" for="fees">تسديد الرسوم</label>
          
          <input class="w3-right checkbox" type="radio" id="fees-no" name="fees"  value="كاش">
          <label class="w3-right" for="fees-no"> كاش </label>
          <input class="w3-right checkbox" type="radio" id="fees-yes" name="fees" value="تحويل بنكي" >
          <label class="w3-right" for="fees-yes"> تحويل بنكي </label>
     </div>

          <div class="w3-col l12 ">
          <p class="w3-col l2 m2 s1 w3-right"></p> 
          <label class="w3-right w3-col l8 " style="text-align:right" for="fees" id="label-re">الرجاء ارفاق صورة الايصال</label>
          <input  class="w3-col l8  s12 w3-right label-color"  type="file" id="receipt" name="file" >
          <br>
          <br>
          </div>    
          
     <br>
     <br>
     </div>
     <input type="submit" name="submit" value="ارسال">
 </form>
</div>

<?php require_once('footer.php'); ?>
