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
    <link rel="stylesheet" href="style.css">
</head>
<body>
  

<nav  class="navbar navbar-expand-lg    px-4" >
    <div class="container-fluid ">
      <a class="navbar-brand text-dark " href="#"><h3>Book<span style="color: rgb(0, 123, 255);">You</span>Code</h3></a>
      <button  class= "navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto    ">
          <li class="nav-item">
            <a class="nav-link active  text-dark " aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark " href="book.html">Book</a>
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
  <h3 class="alert alert- text-center text-primary m-0" role="alert"><span class="text-dark">Hello,</span><?php echo $_SESSION['firstname']; ?></h3>
  <!-- <button type="button" class="btn btn-outline-dark" ><a href="logout.php">logout</a></button> -->
  <section style=" background-image:linear-gradient(to right, rgb(255, 158, 182), rgb(238, 156, 255));" class=" text-dark text-center w-50-sm pt-4  ">
     <div class="container ">

<div class="d-flex align-items-center ">
<div class="py-5">
<h2>BOOK <span style="color: rgb(0, 123, 255);">YOU</span>CODE </h2>
<p class="py-2 ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dolore sequi animi optio distinctio asperiores voluptatem, temporibus reprehenderit! Aliquam sed numquam quibusdam minima mollitia. Ullam facere est nam impedit velit!</p>
<button type="button" class="btn btn-outline "  data-bs-toggle="modal" data-bs-target="#exampleModal " style=" background: rgb(0, 123, 255) "> <b>+</b>Add Book</button>

</div>

<div class="col-5">
<img  class=" img-fluid w-50" src="img/addbook.png"  alt="">
</div>
     </div>
     </div>
  </section>
  <section class="py-3">
   
    <div class="container text-center ">
        <h4 class="pt-4"><b>Book List</b></h4>
        <!-- <div class="d-flex  justify-content-evenly flex-wrap">
<div>
          <div class="p-4    shadow p-3 mb-5 bg-body rounded">
            <h4>General Culture Books</h4>
            <div class="card" style="width: 18rem;">
               
                <img   style="width: 70px;" src="/img/0140280197.01._SCLZZZZZZZ_SX500_.jpg" class="card-img-top align-self-center py-3" alt="..."> 
                <div class="card-body">
                  <h5 class="card-title">The 48 Laws of Power by Robert Greene</h5>
                  <p class="card-text">The 48 Laws of Power (1998) is a non-fiction book by American author Robert Greene. ... The book is a New York Times bestseller, selling over 1.2 million copies ...
                </p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">id:1</li>
                  <li class="list-group-item">Pages: 480
                
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link"> <img  class=" img-fluid " style="width: 70px;" src="img/deletbook.png"  alt="">Delete </a>
                  <a href="#" class="card-link"><img  class=" img-fluid " style="width: 70px;" src="img/editbook.png"  alt=""> Edit</a>
                  
                </div>
              </div>
          </div>
          
          
</div>
<div>
    <div  class="p-4  bg-light  p-2 shadow p-3 mb-5 bg-body rounded">
      <h4>Programming Books</h4>
      <div class="card" style="width: 18rem;">
         
          <img   style="width: 70px;" src="img/41HXiIojloL.jpg" class="card-img-top align-self-center py-3" alt="..."> 
          <div class="card-body">
            <h5 class="card-title">The Pragmatic Programmer</h5>
            <p class="card-text">Written as a series of self-contained sections and filled with entertaining anecdotes, thoughtful examples, and interesting analogies, The Pragmatic Programmer ...

          </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">id:2</li>
            <li class="list-group-item">Pages: 370
        
          </ul>
          <div class="card-body">
            <a href="#" class="card-link"> <img  class=" img-fluid " style="width: 70px;" src="img/deletbook.png"  alt="">Delete </a>
            <a href="#" class="card-link"><img  class=" img-fluid " style="width: 70px;" src="img/editbook.png"  alt=""> Edit</a>
            
          </div>
        </div>
    </div>
    
    
</div>
<div>
    <div class="p-4  bg-light  p-2 shadow p-3 mb-5 bg-body rounded" >
      <h4>Self Development Books</h4>
      <div class="card" style="width: 18rem;">
         
          <img   style="width: 70px; " src="img/self-help-books-3.jpg" class="card-img-top align-self-center py-3" alt="..."> 
          <div class="card-body">
            <h5 class="card-title">Thinking Fast And Slow by Daniel Kahneman</h5>
            <p class="card-text">“Nothing in life is as important as you think it is, while you are thinking about it” — Daniel Kahneman
          </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">id:3</li>
            <li class="list-group-item">Pages: 545
         
          </ul>
          <div class="card-body">
            <a href="#" class="card-link"> <img  class=" img-fluid " style="width: 70px; " src="img/deletbook.png"  alt="">Delete </a>
            <a href="#" class="card-link"><img  class=" img-fluid " style="width: 70px;" src="img/editbook.png"  alt=""> Edit</a>
            
          </div>
        </div>
    </div>
    
    
</div> -->

        </div>
      </div>
  </section>
  <section>
    <div class="container">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="p-4    shadow p-3 mb-5 bg-body rounded">
              
              <div class="card" style="width: 100;">

                 
              <!-- IN PROGRESS TASKS HERE -->
								<?php
								//PHP CODE HERE
								
								
								//DATA FROM getTasks() FUNCTION
								getTasks();
								?>
                  <!-- <img   style="width: 70px;" src="img/0140280197.01._SCLZZZZZZZ_SX500_.jpg" class="card-img-top align-self-center py-3 " alt="..."> 
                  <div class="card-body">
                    <h5 class="card-title"> Titre : The 48 Laws of Power by Robert Greene</h5>
                    <p class="card-text">The 48 Laws of Power (1998) is a non-fiction book by American author Robert Greene. ... The book is a New York Times bestseller, selling over 1.2 million copies ...
                  </p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">id : 1</li>
                    <li class="list-group-item">Publisher
                  
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-link"> <img  class=" img-fluid " style="width: 70px;" src="img/deletbook.png"  alt="">Delete </a>
                    <a href="#" class="card-link"><img  class=" img-fluid " style="width: 70px;" src="img/editbook.png"  alt=""> Edit</a>
                    
                  </div> -->
                </div>
            </div>
            
          </div>
          <div class="carousel-item">
            <div  class="p-4  bg-light  p-2 shadow p-3 mb-5 bg-body rounded">
              
              <div class="card" style="width: 100;">
                 
                  <!-- <img   style="width: 70px;" src="img/41HXiIojloL.jpg" class="card-img-top align-self-center py-3" alt="..."> 
                  <div class="card-body">
                    <h5 class="card-title"> Titre : The Pragmatic Programmer</h5>
                    <p class="card-text">Written as a series of self-contained sections and filled with entertaining anecdotes, thoughtful examples, and interesting analogies, The Pragmatic Programmer ...
        
                  </p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">id : 2</li>
                    <li class="list-group-item">Publisher :  </li>
                
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-link"> <img  class=" img-fluid " style="width: 70px;" src="img/deletbook.png"  alt="">Delete </a>
                    <a href="#" class="card-link"><img  class=" img-fluid " style="width: 70px;" src="img/editbook.png"  alt=""> Edit</a>
                     
                  </div> 
                </div>
            </div>
            
          </div>
          <div class="carousel-item">
            <div class="p-4  bg-light  p-2 shadow p-3 mb-5 bg-body rounded" >
             
              <div class="card" style="width:100;"> 
                 
                  <img   style="width: 70px; " src="img/self-help-books-3.jpg" class="card-img-top align-self-center py-3" alt="..."> 
                  <div class="card-body">
                    <h5 class="card-title"> Titre : Thinking Fast And Slow by Daniel Kahneman</h5>
                    <p class="card-text">“Nothing in life is as important as you think it is, while you are thinking about it” — Daniel Kahneman
                  </p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">id : 3</li>
                    <li class="list-group-item">Publisher :</li>
                 
                  </ul>
                  <div class="card-body d-flex ">
                    <a href="#" class="card-link"> <img  class=" img-fluid " style="width: 75px; " src="img/deletbook.png"  alt="">Delete </a>
                    <a href="#" class="card-link"><img  class=" img-fluid " style="width: 70px;" src="img/editbook.png"  alt=""> Edit</a>
                    
                  </div> -->
                </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>
  </section>
  <section class=" text-dark text-center text-sm-start pt-4 py-5  " style=" background-image:linear-gradient(to right, rgb(255, 158, 182), rgb(238, 156, 255));">
    <div class="container ">

<div class="d-flex align-items-center ">
    <div class="col-5">
        <img  class=" img-fluid w-50" src="img/read.png"  alt="">
        </div>
<div class="">
    
<h2><span style="color: rgb(0, 123, 255);">Book</span> en ligne </h2>
<p class="py-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dolore sequi animi optio distinctio asperiores voluptatem, temporibus reprehenderit! Aliquam sed numquam quibusdam minima mollitia. Ullam facere est nam impedit velit!</p>
<button type="button" class="btn btn-outline" style=" background: rgb(0, 123, 255) ">Book</button>
</div>

    </div>
    </div>
 </section>
 <footer class="p-5" style=" background: black; ">

    <div class="container ">
                <div class="d-flex align-items-center justify-content-around ">
                   
        <div class="modal-header">
            
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.webp"  alt="avatar" style="width: 60px; " class="rounded-circle img-responsive ">
            <a class="nav-link  text-white" href="#"><?php echo $_SESSION['firstname']; ?></a>
          </div>
         
                <div class="">
                   <a href="https://goo.gl/maps/dP7ibFHP9scskGKx5"> <img src="img/map.png" style="width: 90px; " alt=""> École YOUCODE, Youssoufia</a>
          
                
                </div>
                <div>
                    <a href="https://ar-ar.facebook.com/YouCodeSchool/"><img src="img/Facebook_Logo.png" alt="" style="width: 45px;"></a>
                  
                    <a href="https://twitter.com/YouCode18?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="img/twiter-removebg-preview.png" alt="" style="width: 60px;"></a>
                    <a href="https://www.youtube.com/channel/UCPQkZh4M-UlSRl1uPfPSeWw"><img src="img/Youtube-logo-with--new-style-on-transparent-background-PNG.png" style="width: 70px;" alt=""></a>
                </div>
                    </div>
                    </div>
 </footer>
 <!--  -->
 <!-- Modal --><div id="addTaskk">
  <div class="modal fade" id="exampleModal" onclick="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  id="task" name="task"  action="script.php" method="POST" >
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="title"  class="form-control"   name="title" id="title-addTaskk">
          </div>
          <!--radios  -->
          
            <!--select  -->
            <div class="mb-3">
              <label for="title" class="form-label">Publisher</label>
              <input type="title"  class="form-control"  value="<?php echo $_SESSION['firstname']; ?>" name="Publisher" >
              </div>
           <!-- select2 -->
           <div class="mb-3">
           <label for="file-upload" class="custom-file-upload">
            
        </label>
        <input id="file-upload" type="file"/>
        </div>
           <div class="mb-3">
            <label for="title" class="form-label">quantity</label>
            <input type="title"  class="form-control"   name="quantity" >
            </div>
  <!--  -->
        
  
          <div class="form-group">
            <label for="date"  class="form-label ">Discription</label>
            <label for="exampleFormControlTextarea1"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="description"></textarea>
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

     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
<?php
    
  }else{
    header("location:login.php ");  
  }