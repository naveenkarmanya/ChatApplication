<?php 
session_start();
$Link=mysqli_connect("localhost","dbuser","123","userdata");
if($_POST["message"]=="insert"){
    
   
    $data=$_POST["data"];
    $time=date("Y-m-d h:i:sa");
    $query="insert into chat (user_id, message, timestamp)values( '".$_SESSION["user"]."','$data','$time')";
    $result=mysqli_query($Link,$query);
    
    
}
if($_POST["message"]=="fetch"){
    
    $queryfetch="select * from chat";
    
    $resultfetch=  mysqli_query($Link, $queryfetch);
   while($row=  mysqli_fetch_assoc($resultfetch)){
       if($row["user_id"]==1)
    {
        $name='naveen';
    }
 else if($row["user_id"]==2){
        $name='pawan';
    }
       echo "<a href='#'>".$name."</a>".'says&nbsp<br>'. $row["message"].'<br>';
   }
}


?>