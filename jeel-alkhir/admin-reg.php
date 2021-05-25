<?php require_once('header.php');

if(!isset($_SESSION['jeel_user_id'])) {
  header("location:index.php");
}

?>

<br>
<br>
<div id="mySidebar" class="sidebar w3-right">
  <a href="javascript:void(0)" class="closebtn w3-right" onclick="closeNav()">×</a>
  <a href="#">التسجيل</a>
  <a href="#">التوظيف</a>
  <a href="#">التطوع</a>
  

</div>

<div class="w3-row " id="main">
  <button class="openbtn w3-right" onclick="openNav()"> ☰ </button>  
</div>

<div class="w3-row">

    <p class="w3-col l2 m2 w3-right"></p>
    <br>
    <div class="w3-row">
       <p class="sec-title w3-right"> بيانات الطفل  </p>
    </div>

    <?php 
    

    $stmt=$con->prepare("SELECT  question_id ,question_content FROM questions ");
    $stmt->execute();
    $query=$stmt->bind_result($question_id,$question_content);
    $stmt->store_result();
    $num_of_rows=$stmt->num_rows;


    if($num_of_rows==0){
        echo'<p>لا يوجد اسئلة</p>';

    }elseif($num_of_rows>0){
      echo' 
      <div class="w3-row">
      <p class="w3-col l3 m3 s1 w3-right"></p>
      <div class="w3-col l6 m6 s10 w3-right">';
      while ($stmt->fetch()) {
        
        $row=array();
        $row['question_id']=$question_id;
        $row['question_content']=$question_content;
        $student_id=$_GET['student_id'];
         
       
        $stmt1=$con->prepare("SELECT answer FROM answers  WHERE question_id = ? and student_id = ?");
        $stmt1->bind_param("ii",$question_id, $student_id);
        $stmt1->execute();
        $query1=$stmt1->bind_result($answer);
        $stmt1->store_result();
        $num_of_rows1=$stmt1->num_rows;

        if($num_of_rows1 == 0) {
        } else {

          $stmt1->fetch();
        $row1=array();
      
        $row1['answer']=$answer;

        echo'
       
        <label class="w3-right w3-col l12 m12 s12 " style="text-align:right" for="name">'.$question_content.'</label>
        <input class="w3-col l12 m12 s12 w3-right border-green"  type="text" disabled="true" value="'.$answer.'">
        ';
        }

        $stmt1->close();
        
          
     
    }
   echo' </div>
        </div>';
  }
  $stmt->close();
  $con->close();

?>

           

                
   
</div>




<?php require_once('footer.php'); ?>
