<?php
header("Content-type:text/html;charset=UTF-8");
include_once ("index.php");
if(count($_POST["Student Id"]) >= 0){
    echo "<script>alert('Please select a record');history.go(-1);</script>";
}else{


    for($i=0;$i<count($_POST["Student Id"]);$i++){
       
        $sql = "delete from studentinfo where id=".$_POST["Student Id"][$i];

        mysqli_query($con,$sql);
    }




}
?>