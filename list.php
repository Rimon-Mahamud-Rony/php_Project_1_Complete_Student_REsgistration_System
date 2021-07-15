<?php
 session_start();
 $page_name = 'All Student | Student Registration System';

 $username=$_SESSION['v_name'];
 $log='logout';
 $message='Welcome';
 $id='';

 /*if (@$_GET['id']) {
    $upinfo = $_GET['id'];
    echo "data update !!";
}*/


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
    <table class="table table-striped table-sm alert alert-primary">
        <tr>
            <td>
            List of the students:
            <button type="button" class="btn btn-sm btn-success" style="margin-left:70%;"><a href="home.php" style="text-decoration: none;" ><span style="color:white;">ADD STUDENTS</span></a></button> 
            </td>
        </tr>
    </table>
<?php 

if (@$_GET['id']) {
    $upinfo = $_GET['id'];
    

    echo "<table class='table table-striped table-sm alert alert-primary'>
        <tr>
            <td>
                Last record updated on Registration ID <strong style='color:red;'> $upinfo </strong>
            </td>
        </tr>
    </table>";
}
?>

<?php if (@$_GET['did']) {
        $upinfo = $_GET['did'];
    

    echo "<table class='table table-striped table-sm alert alert-primary'>
        <tr>
            <td>
                Last record deleted on Registration ID was <strong style='color:red;'> $upinfo </strong>
            </td>
        </tr>
    </table>";
}
?>
    <!--
    <h6 class="alert alert-success" style="font-size: 15px;">
        List of the students:
        <button type="button" class="btn btn-sm btn-success" style="margin-left:70%;"><a href="home.php" style="text-decoration: none;" ><span style="color:white;">ADD STUDENTS</span></a></button>
    </h6>
    -->

    <table class="table table-striped table-sm table-bordered">
      <thead class="thead-dark">
        <tr class="alert alert-dark">
          <th scope="col">Reg. ID</th>
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
        $sql="SELECT * FROM `students` ORDER BY id Desc";
        $result=mysqli_query($conn,$sql);
        //$row = mysqli_fetch_assoc($result);

        
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
                    
                    <a href="edit.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-info"> Edit</button></a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-danger">
                    Delete
                    </button></a>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</div>



<?php include('footer.php'); ?>


<!--
    <button><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></button>&nbsp;&nbsp;&nbsp;<button><a href="delete.php?id=<?php echo $row['id']; ?>" style="color: red;">Delete</a></button>
    -->


