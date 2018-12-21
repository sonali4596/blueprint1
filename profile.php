<?php
include("dbconnnection.php");
session_start();
if(isset($_SESSION['aJGNBaVL_'])){
    $id=$_SESSION['aJGNBaVL_'];
    $get_the_data=mysqli_query($db,"SELECT `firstname`, `lastname`, `phone`, `email` FROM `signup` WHERE `id`='$id'");
    $fethc_the_data=mysqli_fetch_assoc($get_the_data);
    $first_name=$fethc_the_data['firstname'];
    $last_name=$fethc_the_data['lastname'];
    $email=$fethc_the_data['email'];
    $phone=$fethc_the_data['phone'];
}else{
    header("location:blueprint.php");
}
?>



<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8" />
		<meta charset="author" content="Sonali Sinha" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style type="text/css">
			body{
				margin: 0px;
			}
			.Aa201811291203Av_{
				width: 100%;
				min-height: 829px;
				background-color: white;
			}
			.Aa2018112920181218Av_{
				width: 100%;
				min-height: 75px;
				height: auto;
				background-color: aqua;
			}
			.Aa201811291251Av_{
				width: 50%;
				height: 75px;
				float: left;
			}
			.Aa201811291251Av_ i{
				font-size: 50px;margin-left: 30px;padding-top: 10px;color:white;
			}
			.Aa201811291251Av_ a{
				font-size: 20px;
				margin-left: 30px;
				padding-top: 10px;
				color:black;
			}
			.Aa201811291251Aa_{
				width: 40%;
				height: 75px;
				float: right;
				padding-top: 20px;
				text-align: right;
				margin-right: 20px;
			}
			.Aa201811291251Aa_ a{
				font-size: 20px;
				color: black;
				text-decoration: none;
			}
			.Aa201811291251Aa_ a>i{
				font-size: 20px;
				color: black;
				margin-right: 20px;
			}
			.Aa201811291305Av_{
				width: 100%;
				min-height: 400px;
				height: auto;
			}
			.Aa201821111306Aa_{
				float: left;
				width: 20%;
				height: 100%;
				background-color: rgba(0,0,0,0.8);
			}
			.Aa201821111306Av_{
				float: left;
				width: 75%;
				height: 100%;
			}
			.Aa201811291311Av_ div{
				padding: 5px;
				padding-left: 20px;
				padding-bottom: 10px;
			}
			.Aa201811291311Av_ div:first-of-type{
				padding-top: 20px;
			}
			.Aa201811291311Av_ div>a{
				color: white;
				text-decoration: none;
				cursor: pointer;
				
			}
			.Aa201811291324Av_{
				padding-left: 40px
			}
			.Aa201811291326Aa_{
				width: 100%;
				height: 40px;
				margin-bottom: 20px
			}
			.Aa201811291326Aa_ input{
				width: 30%;
				padding: 5px;
				border:1px solid grey;
				border-radius: 10px;
				margin-right: 20px;
			}
			.Aa201811291326Aa_ button{
				width: 10%;
				padding: 5px;
				border:1px solid grey;
				border-radius: 10px;
				margin-right: 20px;
				background-color: aqua;
				border-color: aqua;
				cursor: pointer;
				font-size: 16px;
				display: none;
			}
			.Aa201811291326Av_{
				width: 100%;
				height: 40px;
				margin-bottom: 20px
			}
			.Aa201811291326Av_ input{
				width: 62%;
				padding: 5px;
				border:1px solid grey;
				border-radius: 10px;
				margin-right: 20px;
			}
			.Aa201811291326Av_ button{
				width: 10%;
				padding: 5px;
				border:1px solid grey;
				border-radius: 10px;
				margin-right: 20px;
				background-color: aqua;
				border-color: aqua;
				cursor: pointer;
				font-size: 16px;
				display: none;
			}
			.Aa201811291326Av_ .Aa201811291340Av_{
				background-color: greenyellow;
				border:1px solid greenyellow;
				display: inline-block;
				text-align: center;
				width: 10%;
				padding: 5px;
				border:1px solid grey;
				border-radius: 10px;
				margin-right: 20px;
				background-color: aqua;
				border-color: aqua;
				cursor: pointer;
				font-size: 16px;
			}
			.Aa201811291326Aa_ .Aa201811291340Aa_{
				background-color: greenyellow;
				border:1px solid greenyellow;
				display: inline-block;
				text-align: center;
				width: 10%;
				padding: 5px;
				border:1px solid grey;
				border-radius: 10px;
				margin-right: 20px;
				background-color: aqua;
				border-color: aqua;
				cursor: pointer;
				font-size: 16px;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		
		
		
		
		<div class="Aa201811291203Av_">
			<div class="Aa2018112920181218Av_">
				<div class="Aa201811291251Av_">
					<i class='fa fa-user' ></i><a><?php echo $first_name." ".$last_name?></a>
				</div>
				<div class="Aa201811291251Aa_">
					<a href="delete.php?id=<?php echo $id;  ?>" >Delete <i class="fa fa-minus-circle"></i></a>
					<a href="logout.php"><button>Logout</button></a>
				</div>
			</div>
			<div class="Aa201811291305Av_">
				<div class="Aa201821111306Aa_">
					<div class="Aa201811291311Av_">
						<div><a href="eastfestival.php">East Festivals</a></div>
						<div><a href="eastfood.php">East Food</a></div>
						<div><a href="easttourist.php">East tourism</a></div>
						<div><a href="northentertainment.php">North Entertainment</a></div>
						<div><a href="northfood.php">North Food</a></div>
						<div><a href="northfestival.php">North Festival</a></div>
						<div><a href="northtourist.php">North tourism</a></div>
						<div><a href="southentertainment.php">South Entertainment</a></div>
						<div><a href="southfood.php">South Food</a></div>
						<div><a href="southfestival.php">South Festival</a></div>
						<div><a href="southtourist.php">South Excursion</a></div>
						<div><a href="westfood.php">West Food</a></div>
						<div><a href="westfestival.php">West Festival</a></div>
						<div><a href="westtourist.php">West Excursion</a></div>
						<div><a href="westentertainment.php">West Entertainment</a></div>
						<div><a href="unionfestival.php">Union Teritories Festivals</a></div>
						<div><a href="unionfood.php">Union Teritories Food</a></div>
						<div><a href="uniontourist.php">Union Teritories</a></div>
					</div>
				</div>
				<div class="Aa201821111306Av_">
					<div class="Aa201811291324Av_">
						<div class="Aa201811291326Aa_">
							<form method="post" enctype="application/x-www-form-urlencoded" action="update.php">
								<label>Name</label><br/>
								<input type="text" name="fname" placeholder="First Name" value="<?php echo $first_name ?>" disabled/>
								<input type="text" name="lname" placeholder="Last Name" value="<?php echo $last_name ?>" disabled/>
								<section class="Aa201811291340Aa_">Edit</section>
								<button type="submit" name="s1">Submit</button>
							</form>
						</div>
						<div class="Aa201811291326Av_">
							<form>
								<label>Phone</label><br/>
								<input type="text" name="fname" placeholder="Phone" value="<?php echo $phone ?>" disabled/>
								<section class="Aa201811291340Av_">Edit</section>
								<button type="submit" name="s1">Submit</button>
							</form>
						</div>
						<div class="Aa201811291326Av_">
							<form>
								<label>Email</label><br/>
								<input type="text" name="fname" placeholder="Email" value="<?php echo $email ?>" disabled/>
								<section class="Aa201811291340Av_">Edit</section>
								<button type="submit" name="s1">Submit</button>
							</form>
						</div>
						<div class="Aa201811291326Av_">
							<form>
								<label>Password</label><br/>
								<input type="text" name="fname" placeholder="Password" disabled/>
								<section class="Aa201811291340Av_">Edit</section>
								<button type="submit" name="s1">Submit</button>
							</form>
						</div>
						<div class="Aa201811291326Av_">
							<form>
								<label>Confirm Password</label><br/>
								<input type="text" name="fname" placeholder="confirm Password" disabled/>
								<section class="Aa201811291340Av_">Edit</section>
								<button type="submit" name="s1">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(".Aa201811291340Av_").click(function(){
				$(this).css("display","none");
				$(this).next().css("display","inline-block");
				$(this).prev().removeAttr("disabled");
				$(this).prev().addAttr("required");
			});
			$(".Aa201811291340Aa_").click(function(){
				$(this).css("display","none");
				$(this).next().css("display","inline-block");
				$(this).prev().removeAttr("disabled");
				$(this).prev().prev().removeAttr("disabled");
				$(this).prev().prev().addAttr("required");
				$(this).prev().addAttr("required");
			});
		</script>
	</body>
</html>