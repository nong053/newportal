<?php
include("config.php");



$dataDeploy1=$_POST['dataDeploy1'];
$dataDeploy2=$_POST['dataDeploy2'];
$dataDeploy3=$_POST['dataDeploy3'];
$dataDeploy4=$_POST['dataDeploy4'];
$dataDeploy5=$_POST['dataDeploy5'];
$dataDeploy6=$_POST['dataDeploy6'];
$dataDeploy7=$_POST['dataDeploy7'];
$dataDeploy8=$_POST['dataDeploy8'];
$dataDeploy9=$_POST['dataDeploy9'];
$dataDeploy10=$_POST['dataDeploy10'];
$dataDeploy11=$_POST['dataDeploy11'];
$dataDeploy12=$_POST['dataDeploy12'];
$dataDeploy13=$_POST['dataDeploy13'];

if($_POST['action']=="save"){
    //echo"savevvvv";
  
    $strSQL="UPDATE medical_report_tbl 
    SET 
    data_report_status1='$dataDeploy1',
    data_report_status2='$dataDeploy2' ,
    data_report_status3='$dataDeploy3' ,
    data_report_status4='$dataDeploy4' ,
    data_report_status5='$dataDeploy5' ,
    data_report_status6='$dataDeploy6' ,
    data_report_status7='$dataDeploy7' ,
    data_report_status8='$dataDeploy8' ,
    data_report_status9='$dataDeploy9' ,
    data_report_status10='$dataDeploy10' ,
    data_report_status11='$dataDeploy11' ,
    data_report_status12='$dataDeploy12' ,
    data_report_status13='$dataDeploy13' 

    WHERE id=1; "
    
    ;
    //echo $strSQL;
	$result=mysqli_query($conn,$strSQL);
	if($result){
		echo'["success"]';
	}else{
        echo mysqli_error($conn);
    }

}


if($_POST['action']=="getData"){
    $strSQL="select * from medical_report_tbl";
	$result=mysqli_query($conn,$strSQL);
    $myArray=[];
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
    }

?>