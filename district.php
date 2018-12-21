<?php 
    $server="localhost";
$username='root';
$password='';
$database='district';

$db=mysqli_connect("$server","$username","$password");
mysqli_select_db($db,$database);
if(isset($_GET['st'])){
    $state=$_GET['st'];
    $get_the_district=mysqli_query($db,"SELECT  `district` FROM `$state` ");
    
    $district=array();
    while($fetch_district=mysqli_fetch_assoc($get_the_district)){
        $district[]=$fetch_district['district'];
    }
    echo json_encode($district);
}
?>
