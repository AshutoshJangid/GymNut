<?php include 'connect.php';
// echo "<pre>"; print_r($_POST['name']);echo "<pre>";

if($_POST['reg_id']){
    
    if($_POST['type']=='monthly'){
        $toDate = date('Y-m-d', strtotime("+1 months", strtotime($_POST['fromDate'])));
    }
    else if($_POST['type']=='quarterly'){
        $toDate = date('Y-m-d', strtotime("+3 months", strtotime($_POST['fromDate'])));
    }
    else if($_POST['type']=='half_yearly'){
        $toDate = date('Y-m-d', strtotime("+6 months", strtotime($_POST['fromDate'])));
    }
    else if($_POST['type']=='yearly'){
        $toDate = date('Y-m-d', strtotime("+1 year", strtotime($_POST['fromDate'])));
    }
    // echo $_POST['fromDate']."<br>";
    // echo $toDate;
    // die;
    $plan_insert = mysqli_query($con,"INSERT INTO `gn_plans`(`reg_id`, `type`, `cardio`, `plan_start`, `plan_end`) VALUES ('$_POST[reg_id]','$_POST[type]','$_POST[cardio]','$_POST[fromDate]','$toDate')");
    $userID = mysqli_insert_id($con);
    if($plan_insert){
        echo "DONE";
    }else{
        echo "User Not Registered ";
    }
    
    }
else if($_POST['nameEdit']){
    $update_detail = mysqli_query($con,"UPDATE `gn_nuts` SET `name`='$_POST[nameEdit]',`mobile`='$_POST[mobileEdit]',`email`='$_POST[emailEdit]' WHERE `id` = '$_POST[reg_id]'");
    echo "UPDATE `gn_nuts` SET `name`='$_POST[nameEdit]',`mobile`='$_POST[mobileEdit]',`email`='$_POST[emailEdit]' WHERE `id` = '$_POST[reg_id2]'";
 
}
else if($_POST['regNo']){
    $entry_today = mysqli_query($con,"INSERT INTO `gn_entry` (`reg_id`) VALUES ($_POST[regNo])");
    if($entry_today){
        $select_name = mysqli_fetch_assoc(mysqli_query($con,"SELECT name from `gn_nuts` where id='$_POST[regNo]'"));
        echo $select_name['name'];
    }
   }
else{
$register = mysqli_query($con,"INSERT INTO `gn_nuts`(`name`, `gender`, `mobile`, `email`) VALUES ('$_POST[name]','$_POST[gender]','$_POST[mobile]','$_POST[email]')");
$userID = mysqli_insert_id($con);
if($register){
    echo $userID;
}else{
    echo "User Not Registered ";
}
}
