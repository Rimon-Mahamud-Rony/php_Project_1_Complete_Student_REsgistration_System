<?php
 session_start();
 $page_name = 'Registration | Student Registration System';


 $username=$_SESSION['v_name'];
 $user_email=$_SESSION['v_email'];
 $user_pass=$_SESSION['v_pass'];
 //$user_id=$_SESSION['v_id'];
 $user_img=$_SESSION['v_image'];
 $user_address=$_SESSION['v_address'];
 $user_phone=$_SESSION['v_phone'];
 $log='logout';
 $message='Welcome';


 if ($username==true) {
     // code...
 }
 else{
    header('Location:index.php');
 }
 ?>
 <?php include ('db.php'); ?>
<?php include ('head.php'); ?>


<?php
    /*
    echo $username;
    echo $user_email;
    echo $user_pass;*/

?>

<br>
<div id="head" class="container">
<br>
    <table class="table table-striped table-sm alert alert-primary">
        <tr>
            <td>
            Student Registration Process... 
            <button type="button" class="btn btn-sm btn-success" style="margin-left:60%;"><a href="list.php" style="text-decoration: none;" ><span style="color:white;">ALL STUDENTS LIST </span></a></button> 
            </td>
        </tr>
    </table>

<div><br></div>

    <div id="login" class="col-sm-7" style="float:left;">
        <div class="conatiner-fluid" style="background-color: #CCD1D1;">
            <table class="table table-striped table-sm">
                <tr style="color:white;">
                    <td align="center" style="background-color:#416180;">
                        Registration Form:
                    </td>
                </tr>
            </table>
            <form class="col-sm-10" action="home.php" method="post" style="margin: 5%;">
<?php

$s_name='';
$s_id='';
$s_email='';
$s_phone='';
$s_add='';
$s_sex='';
if (isset($_POST['save'])!=NULL) {

        if (($_POST['s_name'])==NULL) {

            echo '<h6 class="alert alert-danger" role="alert">
                      &#9888;&nbsp; Student Name can not be empty !!
                    </h6>' ;
                }

        else if (($_POST['s_id'])==NULL) {
            echo '<h6 class="alert alert-danger" role="alert">
                      &#9888;&nbsp; Student ID can not be empty !!
                    </h6>' ;
                }

        else if ((@$_POST['s_sex'])==NULL) {
            echo '<h6 class="alert alert-danger" role="alert">
                      &#9888;&nbsp; Student sex can not be empty !!
                    </h6>' ;
                }

        else if (($_POST['s_email'])==NULL) {
            echo '<h6 class="alert alert-danger" role="alert">
                      &#9888;&nbsp; Student Email can not be empty !!
                    </h6>' ;  
                }

        else if (($_POST['s_phone'])==NULL) {
            echo '<h6 class="alert alert-danger" role="alert">
                      &#9888;&nbsp; Student Mobile No. can not be empty !!
                    </h6>' ;
           
        }
        else if (($_POST['s_add'])==NULL) {
            echo '<h6 class="alert alert-danger" role="alert">
                      &#9888;&nbsp; Student address can not be empty !!
                    </h6>' ;
           
        }

        else {

        $s_name = $_POST['s_name'];
        $s_id = $_POST['s_id'];
        $s_sex = $_POST['s_sex'];
        $s_email = $_POST['s_email'];
        $s_phone = $_POST['s_phone'];
        $s_add = $_POST['s_add'];
        $sql="INSERT INTO `students` (`s_name`, `s_id`, `s_sex`, `s_email`, `s_phone`, `address`) VALUES ('$s_name', '$s_id', '$s_sex', '$s_email', '$s_phone', '$s_add')";

        //$sql ="INSERT INTO `students` (`id`, `s_name`, `s_id`, `s_sex`, `s_email`, `s_phone`, `address`) VALUES (NULL, 'Rimon Mahamud Rony', 'ASH1601012M', 'male', 'rimonronycste11@gmail.com', '01811308148', 'Etava, Keraniganj, Dhaka')";

        if (mysqli_query($conn, $sql)) {
          echo '<h6 class="alert alert-success" role="alert">
        &#10004;&nbsp;Registration Completed !
        </h6>' ;
        }
        else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }  
    }
}   
?>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="s_name">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Student ID</label>
                <input type="text" class="form-control" name="s_id">
              </div>

                <div class="mb-3">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <td>
                                <label for="exampleInputEmail1" class="form-label"><strong>Sex:</strong></label>
                                </td>
                            </tr>
                        </thead>
                        <tr>
                            <td>
                              <input  type="radio" name="s_sex" value="male" >
                              <label class="form-check-label" for="flexRadioDefault1">
                                Male
                              </label>
                              <input  type="radio" name="s_sex" value="female">
                              <label class="form-check-label" for="flexRadioDefault2">
                                Female
                              </label>
                            </td>
                        </tr>
                    </table>
                </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="s_email">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mobile</label>
                <input type="text" class="form-control" name="s_phone">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Address</label>
                <input type="text" class="form-control" name="s_add">
              </div>

              <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-sm" name="save" style="float:right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
            </div>
            </form>
            <br>
            <br>
        </div>
        <br>
        <br>
        <br>
    </div>
<div id="logo" class="col-sm-3" style="float: right;">
        <div id="border" class="container" >
            <div class="container">
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th><h6>Admin Profile: </h6></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;">
                                <img src="<?php echo $user_img ?>" width="150" height="165" style="border-radius: 50%;">
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Name:</strong><br><?php echo ''.$username;?></td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong><br><?php echo ''.$user_email;?></td>
                        </tr>
                        <tr>
                            <td><strong>Phone:</strong><br><?php echo ''.$user_phone;?></td>
                        </tr>
                        <tr>
                            <td><strong>Address:</strong><br><?php echo ''.$user_address;?></td>
                        </tr>
                    </tbody>            
                </table>
            </div>
            
        </div>
    <div>
        <br><br>
    </div>
    </div>

</div>

<?php include('footer.php'); ?>
