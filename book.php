<?php
	include('script.php');
  if(isset($_SESSION['id'])){
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body  style=" background-image:linear-gradient(to right, rgb(255, 158, 182), rgb(238, 156, 255));">
  

<nav  class="navbar navbar-expand-lg    px-4" >
    <div class="container-fluid ">
      <a class="navbar-brand text-dark " href="index.php"><h3>Book<span style="color: rgb(0, 123, 255);">You</span>Code</h3></a>
      <button  class= "navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto    ">
          <li class="nav-item">
            <a class="nav-link active  text-dark " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark " href="book.php">Book</a>
          </li>
          <li class="nav-item pe-">
            
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $_SESSION['firstname']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item"  href="logout.php">logout</a></li>
            <!-- <li><a class="dropdown-item" href="#"></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"></a></li> -->
          </ul>
        </li>
              <!-- <a class="nav-link " href="#"><?php echo $_SESSION['firstname']; ?></a> -->
          </li>
          <div class="modal-header">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.webp"  alt="avatar" style="width: 40px; ;" class="rounded-circle img-responsive ">
          </div>
        </ul>
        
      </div>
    </div>
  </nav>
  <h3 class="alert alert- text-center text-white m-0" role="alert"><span class="text-dark">Hello,</span><?php echo $_SESSION['firstname']; ?></h3>

  <section class="py-3">
   
    <div class="container text-center ">
        <h4 class="pt-4"><b>Book List</b></h4>
        <div  class=" ">
         <div  class="cadre justify-content-center d-flex flex-wrap">
         <?php
								getBook();
								?>
         </div>
         
      
     
     
    </div>
  </div>
        
  </div>
          
       

          

     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
<?php
    
  }else{
    header("location:login.php ");  
  }