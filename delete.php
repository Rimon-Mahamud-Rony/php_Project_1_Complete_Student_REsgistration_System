<?php
 session_start();
$page_name = 'Data delete | Student Registration System';
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

<div class="container">
    <br>
    <table class="table table-striped table-sm alert alert-danger">
        <tr>
            <td class="alert alert-danger">
            &#9888;&nbsp; Deleting The record....
            </td>
        </tr>
    </table>
<table class="table table-striped table-sm table-bordered">
      <thead class="thead-dark">
        <tr class="alert alert-dark">
          <th scope="col">Reg. NO.</th>
          <th scope="col">Student Name</th>
          <th scope="col">Student ID</th>
          <th scope="col">Student Sex</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Address</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <?php
        $sql="SELECT * FROM `students` WHERE `students`.`id` = $id;";
        $result=mysqli_query($conn,$sql);
        //$row = mysqli_fetch_assoc($result);

        if (isset($_POST['delete'])) {

                  $st_ID = $_POST['ID'];
                  echo $st_ID;

                  echo 'id'.$st_ID; 

            $delete = mysqli_query($conn, "DELETE FROM `students` WHERE `students`.`id` = '$st_ID'");

            if ($delete) {
                mysqli_close($conn); // Close connection
                //header("location:list.php?up='Data Updated'"); // redirects to all records page page2.php?varname=
                //exit;
              header("location:list.php?did='$st_ID'");

            }
            else
            {
                echo mysqli_error();
            }

            }
        
      ?>
      <tbody>
        <?php while ($row= mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['s_name']; ?></td>
          <td><?php echo $row['s_id']; ?></td>
          <td><?php echo $row['s_sex']; ?></td>
          <td><?php echo $row['s_email']; ?></td>
          <td><?php echo '0'.$row['s_phone']; ?></td>
          <td><?php echo $row['address']; ?></td>
          <td>
                   <p style="color:red;">Are you sure, want to delete it ??</p> 
                    <a href="list.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-info"> NO</button></a>
                    <form action="delete.php" method="post">
                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"></label>
                      <input type="hidden" class="form-control" name="ID" readonly value="<?php echo $row['id']; ?>">
                     </div>
                    <button type="submit" class="btn btn-sm btn-danger" name="delete">
                    Yes ! Delete it.
                  </button>
                  </form>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
<?php include('footer.php'); ?>