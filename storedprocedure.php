<?php
$server="localhost";
$username='root';
$password='';
$database='blueprint1';

$db=mysqli_connect("$server","$username","$password");
mysqli_select_db($db,$database);

$get_the=mysqli_query($db,"CALL test()");
$fist=$second=$third=array();
while($fetch=mysqli_fetch_assoc($get_the)){
    $fist[]=$fetch['short_state'];
    $second[]=$fetch['statename'];
    $third[]=$fetch['touristplace'];
}

?>

<table>
    <thead>
        <tr>
            <th>Short State</th>
            <th>State Name</th>
            <th>Tourist Place</th>
        </tr>
    </thead>
    <tr>
        <td><?php echo $fist[0] ?></td>
        <td><?php echo $second[0] ?></td>
        <td><?php echo $third[0] ?></td>
    </tr>
    <tr>
        <td><?php echo $fist[1] ?></td>
        <td><?php echo $second[1] ?></td>
        <td><?php echo $third[1] ?></td>
    </tr>
</table>