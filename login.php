<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css" />
</head>
<body >
    <section class=" text-dark text-center text-sm-start  my-5 ">
        <div class="container">
    <div class="d-flex align-items-center justify-content-evenly ">
        <div class="">
            <img  class="d-none d-sm-block img-fluid w-55" src="img/bibliofille.png"  alt="">
            </div>
    <div class="">
      <div class=" bg-light p-5 shadow p-3 mb-5 bg-body rounded"> 
    <h2  style="color: rgb(0, 123, 255);">Login </h2>
    <form action="c-login.php" method="post">
       <?php if(isset($_GET['error'])){ ?>
        <p class="alert alert-danger" role="alert">
          <?php echo $_GET['error'];?></p>
       <?php } ?>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
            <p class="text-danger" id="demo"></p>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          </div>
        </div>
        <button type="submit" class="btn btn-primary " >Login</button>
       <a href="signup.php">Sign up</a>
      </form>
    </div>
    </div>
        </div>
        </div>
     </section>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END jquery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>