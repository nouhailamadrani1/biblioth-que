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
    <style>
@import url('https://fonts.googleapis.com/css2?family=Domine&family=Patrick+Hand&display=swap');
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- <script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure to delete the book?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script> -->
</head>
<body>
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
          </ul>
        </li>
          </li>
          <div class="modal-header">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.webp"  alt="avatar" style="width: 40px; ;" class="rounded-circle img-responsive ">
          </div>
        </ul>

      </div>
    </div>
  </nav>
  <h3 class="alert alert- text-center text-primary m-0" role="alert"><span class="text-dark">Hello,</span><?php echo $_SESSION['firstname']; ?></h3>
  <section style=" background-image:linear-gradient(to right, rgb(255, 158, 182), rgb(238, 156, 255));" class=" text-dark text-center w-50-sm pt-4  ">
     <div class="container ">
<div class="d-flex align-items-center  justify-content-center ">
<div class="py-5">
<h2>BOOK <span style="color: rgb(0, 123, 255);">YOU</span>CODE </h2>
<h3 class="py-2 ">Welcome to the library</h3>
<p>YouCode Library provides you with a variety of books</p>
<p>All books in the <a style="color: rgb(0, 123, 255);"  href="book.php"  > book</a> list are available</p>
<button type="button" class="btn btn-outline "  data-bs-toggle="modal" data-bs-target="#exampleModal " style=" background: rgb(0, 123, 255) "> <b>+</b>Add Book</button>
</div>
<div class="d-none d-md-block">
<img  class=" img-fluid w-50 " src="img/téléchargement.png"  alt="">
</div>
     </div>
     </div>
  </section>
  <section class="py-3">
  <div class="alert alert-primary text-center" ><h4>The number of books available (<span id="savebook"></span>)</h4></div>
    <div class="container text-center ">
        <h4 class="pt-4"><b>Book List</b></h4>
         <div  class="cadre  d-flex flex-wrap justify-content-center ">
         <?php
								getBook();
								?>
         </div>
    </div>
  </div>
  </div>
  </section>
  <section class=" text-dark text-center  pt-4 py-5  " style=" background-image:linear-gradient(to right, rgb(255, 158, 182), rgb(238, 156, 255));">
     <div class="container ">
<div class="d-flex  ">
    <div class=" p-1 w-25 d-none d-md-block ">
    <div class="">
        <img  class="img-thumbnail w-75" src="img/Yousuf-Karsh-Ernest-Hemingway.jpg"  alt=""> </div>
        <b> Ernest Hemingway</b>
        </div>
<div class="">
<h2 style=" color: rgb(255,255, 255)"> Blog </h2>
<h2 class="py-2" style="font-family: 'Domine', serif;
font-family: 'Patrick Hand', cursive;"> ``Books are the quietest and most constant of friends; they are the most accessible and wisest of counselors, and the most patient of teachers. ``
  <br><b> Ernest Hemingway</b></h2>
</div>
    </div>
    </div> 
 </section>
 <footer class="p-5 d-none d-md-block" style=" background: black;  ">
    <div class="container ">
                <div class="d-flex align-items-center justify-content-around ">
        <div class="modal-header">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.webp"  alt="avatar" style="width: 50px; " class="rounded-circle img-responsive ">
            <a class="nav-link  text-white m-3" href="#"><?php echo $_SESSION['firstname']; ?></a>
          </div>
                <div class="">
                   <a href="https://goo.gl/maps/dP7ibFHP9scskGKx5"> <img src="img/map.png" style="width: 70px; " alt=""> École YOUCODE, Youssoufia</a>
                </div>
                <div>
                    <a href="https://ar-ar.facebook.com/YouCodeSchool/"><img src="img/Facebook_Logo.png" alt="" style="width: 38px;"></a>
                    <a href="https://twitter.com/YouCode18?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="img/twiter-removebg-preview.png" alt="" style="width:50px;"></a>
                    <a href="https://www.youtube.com/channel/UCPQkZh4M-UlSRl1uPfPSeWw"><img src="img/Youtube-logo-with--new-style-on-transparent-background-PNG.png" style="width: 60px;" alt=""></a>
                </div>
                    </div>
                    </div>
 </footer>
 <!-- Modal -->
 <div id="addTaskk">
  <div class="modal fade" id="exampleModal" onclick="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  id="task" name="task"   enctype="multipart/form-data" action="script.php" method="POST" >
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="title"  class="form-control"   name="title" id="title-addTaskk" required>
          </div>
           <div  class="form-control mb-3">
           <label for="title" class="form-label">IMG</label>
           <label for="file-upload"  class="custom-file-upload ">
          <input id="file-upload" name="img" type="file" required>
        </label>
        </div>
           <div class="mb-3">
            <label for="title" class="form-label">quantity</label>
            <input type="title"  class="form-control"   name="quantity" required >
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="reset">Close</button>
            <button type="submit" class="btn btn-primary" id="send" name="save" >Save</button>
          </div>
              </form>
              </div>
            </div>
            </div>
          </div>
            </div></div>

  <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <form action="script.php" method="post" class="modal-content">
            <h6 class="alert alert-danger">Are you sure you want to delete this book ?</h6>

            <input type="hidden" id="bookId" name="bookId">
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
              <button type="submit" name="delete" class="btn btn-danger">DELETE</button>
            </div>
          </form>
        </div>
</div>
     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


<script>
  let idInput = document.getElementById('bookId');
  function areYouSure(id){
    idInput.value = id;
  }
</script>


</body>
</html>
<?php
  }else{
    header("location:login.php ");  
  }