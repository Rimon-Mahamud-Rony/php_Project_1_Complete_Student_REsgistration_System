<?php
 session_start();
$page_name = 'Edit | Student Registration System';
$username=$_SESSION['v_name'];

$log='logout';
$message='Welcome';

$id = '';
$id = @$_GET['id'];
 if ($username==true) {
     // code...
 }
 else{
    header('Location:index.php');
 }
?>
 <?php include ('db.php'); ?>
<?php include ('head.php'); ?>


<br>
<div id="head" class="container">
<br>
    <table class="table table-striped table-sm alert alert-primary">
        <tr>
            <td>
            Student Registration Update Process... 
            <button type="button" class="btn btn-sm btn-success" style="margin-left:60%;"><a href="list.php" style="text-decoration: none;" ><span style="color:white;">ALL STUDENTS LIST </span></a></button> 
            </td>
        </tr>
    </table>

<div><br></div>

<div id="login" class="conatiner col-sm-6" style="float:left;">
        <div class="conatiner-fluid" style="background-color: #CCD1D1;">
            <table class="table table-striped table-sm">
                <tr style="color:white;">
                    <td align="center" style="background-color:#416180;">
                        Update Data Form
                    </td>
                </tr>
            </table>
            
            <form class="col-sm-10" action="edit.php" method="post" style="margin: 3%;">
                                               
<?php

            $st_name = '';
            $st_id = '';
            $st_sex = '';
            $st_email = '';
            $st_phone = '';
            $st_add = '';

        

        $sql2="SELECT *FROM `students` WHERE `students`.`id` = $id;";

        $result2 = mysqli_query($conn, $sql2);




        
        $row= mysqli_fetch_array($result2); 

        //echo $id;
         
         if ($row['s_name']==NULL || $row['s_id']==NULL || $row['s_sex']==NULL || $row['s_email']==NULL || $row['s_phone']== NULL ||$row['address']==NULL) {
             echo '<h6 class="alert alert-danger">You can not update an empty field !!</h6>';
                }

    if(isset($_POST['update'])!=NULL)
        {

            if (($_POST['s_name'])==NULL) {

            echo '<h6 class="alert alert-danger" role="alert">
                      &#9888;&nbsp; Student Name can not be empty !!
                    </h6>' ;
                    header("location:edit.php?id='$st_ID' ");
                }
            else if (($_POST['s_id'])==NULL) {
            echo '<h6 class="alert alert-danger" role="alert">
                      &#9888;&nbsp; Student ID can not be empty !!
                    </h6>' ;
                    header("location:edit.php?id='$st_ID' ");
                }

            else if (($_POST['s_sex'])==NULL) {
            echo '<h6 class="alert alert-danger" role="alert">
                      &#9888;&nbsp; Student sex can not be empty !!
                    </h6>' ;
                    header("location:edit.php?id='$st_ID' ");
                }

            else if (($_POST['s_email'])==NULL) {
            echo '<h6 class="alert alert-danger" role="alert">
                      &#9888;&nbsp; Student Email can not be empty !!
                    </h6>' ; 
                    header("location:edit.php?id='$st_ID' "); 
                }

            else if (($_POST['s_phone'])==NULL) {
            echo '<h6 class="alert alert-danger" role="alert">
                      &#9888;&nbsp; Student Mobile No. can not be empty !!
                    </h6>' ;
                    header("location:edit.php?id='$st_ID' ");
           
                 }
            else if (($_POST['s_add'])==NULL) {
            echo '<h6 class="alert alert-danger" role="alert">
                      &#9888;&nbsp; Student address can not be empty !!
                    </h6>' ;
                    header("location:edit.php?id='$st_ID' ");
           
                }

            else

            {

            $st_ID = $_POST['ID'];
            $st_name = $_POST['s_name'];
            $st_id = $_POST['s_id'];
            $st_sex = $_POST['s_sex'];
            $st_email = $_POST['s_email'];
            $st_phone = $_POST['s_phone'];
            $st_add = $_POST['s_add'];

            echo 'id'.$st_ID; 

            $edit = mysqli_query($conn, "UPDATE `students` SET `s_name` = '$st_name', `s_id` = '$st_id', `s_sex` = '$st_sex', `s_email` = '$st_email', `s_phone` = '$st_phone', `address` = '$st_add' WHERE `students`.`id` = '$st_ID' ");

            echo '<h6 class="alert alert-danger">Data update !!</h6>';

            if ($edit) {
                mysqli_close($conn); // Close connection
                //header("location:list.php?up='Data Updated'"); // redirects to all records page page2.php?varname=
                //exit;
            header("location:list.php?id='$st_ID' ");

            }
            else
            {
                echo mysqli_error();
            }

            }
            
        }
        /*---------------------------------

        /*echo $row['id'];
        echo $row['s_name'];
        echo $row['s_id'];
        echo $row['s_sex'];
        echo $row['s_email'];
        echo $row['address'];

        $id = $row['id'];

        echo $id;

          
        */
        //echo $id;
?>


       
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="s_name" value="<?php echo $row['s_name']; ?>">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Student ID</label>
                <input type="text" class="form-control" name="s_id" value="<?php echo $row['s_id']; ?>">
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
                              <input  type="radio" name="s_sex"  value="male">
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
                <input type="email" class="form-control" name="s_email" value="<?php echo $row['s_email']; ?>">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mobile</label>
                <input type="text" class="form-control" name="s_phone" value="<?php echo $row['s_phone']; ?>">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Address</label>
                <input type="text" class="form-control" name="s_add" value="<?php echo $row['address']; ?>">
              </div>

              <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-sm" name="update" style="float:right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Update&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"></label>
                <input type="hidden" class="form-control" name="ID" readonly value="<?php echo $row['id']; ?>">
            </div>
            <br>
            </form>
        </div>
        <br>
        <br>
        <br>
    </div>

                    <div id="studentProfile" class="col-sm-3" style="float: right;">
                        <div id="border" class="container">
                            <div class="container">
                                <table class="table table-striped table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th><h5>Student Current Profile: </h5></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Name:</strong><br>
                                                <?php echo ''.$row['s_name'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Student ID:</strong><br>
                                                <?php echo ''.$row['s_id'];?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Sex:</strong><br>
                                                <?php echo ''.$row['s_sex'];?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Mobile:</strong><br>
                                                <?php echo ''.$row['s_phone'];?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Address:</strong><br>
                                                <?php echo ''.$row['address'];?></td>
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