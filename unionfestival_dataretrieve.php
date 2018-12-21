<?php 

include("dbconnnection.php");
if(isset($_GET['start']) && isset($_GET['limit'])){
    $start=$_GET['start'];
    $limit=$_GET['limit'];
$get_the_data=mysqli_query($db,"CALL `unionfestival`('$start')");
    
$image=array();
$description=array();
$name=array();
$id=array();
while($fetch=mysqli_fetch_assoc($get_the_data)){
    $image[]=$fetch['image'];
    $description[]=$fetch['description'];
    $name[]=$fetch['name'];
    $id[]=$fetch['id'];
}

    function short($a){
        $x=explode(" ",$a);
        return implode(" ",array_splice($x,"0","30"));
    }
    $x=(int)count($image)/3;
    for($i=0;$i<$x;$i++){
echo "<div class='Aa201811232308Av_'>
                            <div class='first_image Aa201811232310Aa_'>
                                <div class='image'>
                                <div class='images'>
                                <img src='".$image[(int)$i]."' >
                                </div>
                                </div>
                                <div class='Aa201811232355Ar_'><a href='redirection.php?id=".$id[(int)$i]."'><button >Learn More</button></a></div>
                                <div class='content'>
                                <p>".short($description[$i]).".</p>
                                </div>
                            </div>
                            <div class='second_image Aa201811232310Aa_'>
                                <div class='image'>
                                <div class='images'>
                                <img src='".$image[(int)$i+1]."' >
                                </div>
                                </div>
                                <div class='Aa201811232355Ar_'><a href='redirection.php?id=".$id[(int)$i+1]."'><button >Learn More</button></a></div>
                                <div class='content'>
                                <p>".short($description[(int)$i+1]).".</p>
                                </div>
                            </div>
                            <div class='third_image Aa201811232310Aa_'>
                                <div class='image'>
                                <div class='images'>
                                <img src='".$image[(int)$i+2]."' >
                                </div>
                                </div>
                                <div class='Aa201811232355Ar_'><a href='redirection.php?id=".$id[(int)$i+2]."'><button >Learn More</button></a></div>
                                <div class='content'>
                                <p>".short($description[(int)$i+2]).".</p>
                                </div>
                            </div>
                            </div>";
    }
}else{
    echo "start is not set";
}

?>






