<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $page_name;?></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div id="header">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="header container-fluid">
    <a class="navbar-brand" href="index.php" style="color: white;">STUDENT REGISTRATION</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav" style="margin-left: 60%;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color: white;"><?php echo $message; ?><span style="color:yellow;"><?php echo ' '.$username;?></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php" style="color: white;">
            <?php if (isset($_SESSION['v_name'])) {echo '<i class="fa fa-power-off" style="font-size:15px;color:red"></i>'.' '.$log;} ?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

