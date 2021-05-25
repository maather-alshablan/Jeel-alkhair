<?php require_once('header.php');

if(!isset($_SESSION['jeel_user_id'])) {
  header("location:index.php");
}
//accept volunteer code
if(isset($_POST['accept'])){

    $request_id=$_POST['request_id'];
    $state='تم القبول';

    $stmt=$con->prepare("UPDATE requests SET  request_state=?  Where request_id=?");
    $stmt->bind_param("si",$state, $request_id);
    $query=$stmt->execute();

    if($query){
        echo'<script> alert("تم القبول بنجاح");</script>';

    }else{
        echo'<script> alert(" عذرًا حدث خطأ ما ");</script>';

    }

    $stmt->close();

}
//rejected code
if(isset($_POST['reject'])){

    $request_id=$_POST['request_id'];
    $state='تم الرفض';
    
    $stmt=$con->prepare("UPDATE requests SET  request_state=?  Where request_id=?");
    $stmt->bind_param("si",$state, $request_id);
    $query=$stmt->execute();

    if($query){
        echo'<script> alert("تم الرفض بنجاح");</script>';

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
           <p class="sec-title w3-right">التوظيف</p>
    </div>

<?php 
    $user_type='employee';

    $stmt=$con->prepare("SELECT request_id ,user_name, user_phone,	user_cv, request_date, user_type, request_state FROM requests  Where user_type=? ORDER BY request_id desc");
    $stmt->bind_param("s", $user_type);
    $stmt->execute();
    $query=$stmt->bind_result($request_id,$user_name,$user_phone,$user_cv,$request_date,$user_type,$request_state);
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
                    <th style="text-align:right">رقم الجوال</th>
                    <th style="text-align:right">السيرة الذاتية</th>
                    <th style="text-align:right">تاريخ الطلب</th>
                    <th style="text-align:right">الحالة</th>
                    <th style="text-align:right">خيارات</th>
                        </tr>
                    </thead>
                    <tbody>';
            $counter=0;
        while ($stmt->fetch()) {
            $counter+=1;
            $row=array();
            $row['request_id']=$request_id;
            $row['user_name']=$user_name;
            $row['user_phone']=$user_phone;
            $row['user_cv']=$user_cv;
            $row['request_date']=$request_date;
            $row['user_type']=$user_type;
            $row['request_state']=$request_state;

          echo' <tr>
            <td style="text-align:right">'.$counter.'</td>
            <td style="text-align:right">'.$user_name.'</td>
            <td style="text-align:right">'.$user_phone.'</td>
            <td style="text-align:right"><a href="'.$user_cv.'" target="_blank">فتح</a></td>
            <td style="text-align:right">'.$request_date.'</td>';
            
            if($request_state=='معلق'){
                echo'<td style="text-align:right" class="w3-text-blue">'.$request_state.'</td>';
            }
            elseif($request_state=='تم القبول'){
                echo'<td style="text-align:right" class="w3-text-green">'.$request_state.'</td>';
            }
            else{
                echo'<td style="text-align:right" class="w3-text-red">'.$request_state.'</td>';
            }
           echo' 
            <td style="text-align:center" >';
            if($request_state=='معلق'){
                echo'<form action="employee.php" method="post">
                <button name="accept" type="submit" class="btn btn-primary" >قبول</button>
                <button name="reject" type="submit" class="btn btn-danger" onclick="return confirm(\' هل انت متأكد ؟\')">رفض</button>
                <input type="hidden" name="request_id" value="'.$request_id.'" >
                


                </form>';
            }else{
                echo'-';
            }
             echo'   
            </td>
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