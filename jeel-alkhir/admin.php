
<?php require_once('header.php');

if(!isset($_SESSION['jeel_user_id'])) {
  header("location:index.php");
}

if(isset($_POST['update_state'])){

    $student_id=$_POST['student_id'];
    $state='done';
    
    $stmt=$con->prepare("UPDATE students SET  payment_state=?  Where student_id=?");
    $stmt->bind_param("si",$state, $student_id);
    $query=$stmt->execute();

    if($query){
      echo'<script> alert("تم تحديث حالة الدفع بنجاح");</script>';

    }else{
        echo'<script> alert(" عذرًا حدث خطأ ما ");</script>';

    }

    $stmt->close();

}



?>

<br>
<br>
<div id="mySidebar" class="sidebar w3-right">
  <a href="javascript:void(0)" class="closebtn w3-right" onclick="closeNav()">×</a>
  <a href="admin.php">التسجيل</a>
  <a href="employee.php">التوظيف</a>
  <a href="volunteer.php">التطوع</a>
  <a href="logout.php">تسجل الخروج</a>
 

</div>

<div class="w3-row " id="main">
  <button class="openbtn w3-right" onclick="openNav()"> ☰ </button>  
</div>

<div class="w3-row">

    <p class="w3-col l2 m2 w3-right"></p>

    <div class="w3-col m8 l8 w3-right sub-style"  id="1i">
         <br>
        <div class="w3-row">
           <p class="sec-title w3-right">التسجيل</p>
    </div>

<?php 
    

    $stmt=$con->prepare("SELECT student_id ,student_name, register_date, payment_state, payment_receipt, payment_type FROM students  ORDER BY student_id desc");
    $stmt->execute();
    $query=$stmt->bind_result($student_id,$student_name,$register_date,$payment_state,$payment_receipt,$payment_type);
    $stmt->store_result();
    $num_of_rows=$stmt->num_rows;


    if($num_of_rows==0){
        echo'<p> لايوجد طلبات </p>';

    }elseif($num_of_rows>0){
        echo' <div class="table-responsive">
        <table class="table table-bordered">
             <thead>
                <tr>
                    <th style="text-align:right" >#</th>
                    <th style="text-align:right">الاسم الرباعي</th>
                    <th style="text-align:right">تاريخ التسجيل</th>
                    <th style="text-align:right">حالة الدفع</th>
                    <th style="text-align:right">طريقة الدفع</th>
                    <th style="text-align:right"> صورة الإيصال</th>
                    <th style="text-align:right">خيارات</th>
                    <th style="text-align:right">للمزيد من التفاصيل</th>
                        </tr>
                    </thead>
                    <tbody>';
            $counter=0;
        while ($stmt->fetch()) {
            $counter+=1;
            $row=array();
            $row['student_id']=$student_id;
            $row['student_name']=$student_name;
            $row['payment_receipt']=$payment_receipt;
            $row['payment_state']=$payment_state;
            $row['register_date']=$register_date;
            $row['payment_type']=$payment_type;
            

          echo' <tr>
            <td style="text-align:right">'.$counter.'</td>
            <td style="text-align:right">'.$student_name.'</td>
            <td style="text-align:right">'.$register_date.'</td>';
            if($payment_state=='done'){
              echo'<td style="text-align:right" class="w3-text-green">تم الدفع</td>';
            }else{
              echo'<td style="text-align:right" class="w3-text-blue">لم يتم الدفع </td>';
            }
            
           echo' <td style="text-align:right">'.$payment_type.'</td>
            <td style="text-align:right">';

            if($payment_type=='كاش'){
              echo'-';


            }else{
              echo'<a href="'.$payment_receipt.'" target="_blank">صورة الإيصال</a>';

            }
            echo'
            </td>';
            
  
           echo' 
            <td style="text-align:center" >';
            if($payment_state=='pending'){
                echo'<form action="admin.php" method="post">
                <button name="update_state" type="submit" class="btn btn-primary" onclick="return confirm(\' هل انت متأكد ؟\')">تحديث حالة الدفع</button>
                <input type="hidden" name="student_id" value="'.$student_id.'" >
                


                </form>';
            }else{
                echo'-';
            }
             echo'   
            </td>
            <td style="text-align:right"><a href="admin-reg.php?student_id='.$student_id.'" target="_blank">مزيد من التفاصيل</a></td>
            </tr>';

        }

        echo'</tbody>
             </table>
            
            </div>'
        ;
    
    }
        
        $stmt->close();
        $con->close();

?>
</div>
                
   
                
                    




<?php require_once('footer.php'); ?>
