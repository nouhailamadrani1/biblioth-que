<?php
//INCLUDE DATABASE FILE
include('connect.php');
//SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
session_start(); #unset
 if (isset($_POST['save']))        saveBook();

  if(isset($_SESSION['id']))
    print_r($_SESSION['firstname']);
 


function getBook()
    {
      include('connect.php');

      foreach ($result as $row) {
        $id = $row["id"];
        $title = $row["title"];
        $photo = $row["img"];
       
      
        $Publisher =$_SESSION['firstname'];
        $description = $row["description"];
        echo'
          <div class="card"  >

          <img   style="width: 70px; " src="img/'. $photo .' " class="card-img-top align-self-center py-3" alt="..."> 
        <div class="card-body">
         <h5 class="card-title">' . $title . '</h5>
        <p class="card-text">' . $description . '</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">id :' . $id . '</li>
        <li class="list-group-item">Publisher :'.$Publisher.' </li>
     
      </ul>
      <div class="card-body d-flex ">
        <a href="" class="card-link"> <img  class=" img-fluid " style="width: 75px; " src="img/deletbook.png"  alt="">Delete </a>
        <a href="" class="card-link"><img  class=" img-fluid " style="width: 70px;" src="img/editbook.png"  alt=""> Edit</a>
        </div>
        </div>
        
        ';
      }}


      function saveBook()
    {
      global $conn;

      
      $title = $_POST["title"];
      $quantity = $_POST["quantity"];
      
      $Publisherid =$_SESSION['id'];
      $description = $_POST["description"];
      $photo = $_FILES['img']['name'];
      $upload="img/".$photo;
      move_uploaded_file($_FILES['img']['tmp_name'],$upload);
      $query = "INSERT INTO book(title,img,quantity,description,Publisher) 
      VALUES ('$title','$photo',' $quantity',' $description','$Publisherid')";
      // var_dump($title.$photo.$quantity.$description);
      $res = mysqli_query($conn, $query);
      var_dump($res);
      if (!$res) {
        echo "error";
      }
       header('location: index.php');
     
    }

    