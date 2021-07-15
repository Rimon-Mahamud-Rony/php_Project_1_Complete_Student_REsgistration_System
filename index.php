<?php
 session_start();
 $page_name = 'Student Registration System';

 $username='';
 $message='';

 $log='';
?>
<?php include ('db.php'); ?>
<?php include ('head.php'); ?>

<br>
<div id="head" class="container">
<br>

<table class="table table-striped table-sm alert alert-primary">
        <tr>
            <td class="alert alert-primary" role="alert">
            Please Log in to proceed..
            </td>
        </tr>
</table>

<div><br><br></div>

	<div id="logo" class="col-sm-3" style="float: left;">
		<div id="border" class="conatiner-fluid" style="margin-left:10%;">
			<table class="table table-hover" style="margin-right: 10%;">
                    <tbody>
                        <tr>
                            <td>
                            <img src="img/ppp.png" height="200" width="200" style="border-radius: 50%;">
                            </td>
                        </tr>
                        <tr>
                            <td><h3><strong>ABCD COLLEGE</strong></h3></td>
                        </tr>
                        <tr>
                            <td>Dhaka, Bangladesh. Established: 1990.</td>
                        </tr>
                        <tr>
                            <td>ISIN: 123456</td>
                        </tr>
                    </tbody>            
                </table>
		</div>
	</div>
	<div id="login" class="col-sm-8" style="float:right">
		<div class="conatiner-fluid" style="border-left: solid 1px #416180;">
			<form class="col-sm-8" action="index.php" method="post" style="margin: 50px;">


<!------------------------------------------------------------------------------->
<?php
	if (isset($_POST['login'])) {
		$v_email = $_POST['email'];
		$v_pass = $_POST['pass'];

		$sql="SELECT * FROM `admins` WHERE email='$v_email' AND pass='$v_pass'";

		$result=mysqli_query($conn,$sql);

		/*$row = mysqli_fetch_assoc($result);

		echo $row['id'];
		echo $row['name'];
		echo $row['email'];*/

		$row = mysqli_fetch_array($result);

		//$total=mysqli_num_rows($result);
		//echo $total;

		if (is_array($row)) {
			$_SESSION['v_email']=$row['email'];
			$_SESSION['v_name']=$row['name'];
			$_SESSION['v_pass']=$row['pass'];
			//$_SESSION['v_id']=$row['id'];
			$_SESSION['v_image']=$row['image'];
			$_SESSION['v_phone']=$row['phone'];
			$_SESSION['v_address']=$row['address'];
		}
		else{
			echo '<h6 class="alert alert-danger" role="alert">&#9888;&nbsp;Invalid user name or password</h6>';
		}

		if (isset($_SESSION['v_name'])) {
			header('Location:home.php');
		}


	}
?>

<!---------------------------------------------------------------------------------->

	
		
			
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Email address</label>
			    <input type="email" class="form-control" name="email">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Password</label>
			    <input type="password" class="form-control" name="pass">
			  </div>
			  <button type="submit" class="btn btn-primary btn-sm" name="login" style="float:right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log In&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
			</form>
			<br>
		</div>
	</div>
</div>

<?php
	include ('footer.php'); 
?>
