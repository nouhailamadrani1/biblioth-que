<?php
//INCLUDE DATABASE FILE
include('connect.php');
//SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
session_start(); #unset
 if (isset($_POST['save']))        saveTask();

function getTasks()
    {
      include('connect.php');
      foreach ($result as $row) {
        $id = $row["id"];
        $title = $row["title"];
        $quantity = $row["quantity"];
        $img = $row["img"];
        $Publisher = $row["Publisher"];
        $description = $row["description"];
        echo'   <img   style="width: 70px; " src="img/self-help-books-3.jpg" class="card-img-top align-self-center py-3" alt="..."> 
        <div class="card-body">
         <h5 class="card-title">' . $title . '</h5>
        <p class="card-text">' . $description . '</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">id :' . $id . '</li>
        <li class="list-group-item">Publisher :' . $Publisher . '</li>
     
      </ul>
      <div class="card-body d-flex ">
        <a href="" class="card-link"> <img  class=" img-fluid " style="width: 75px; " src="img/deletbook.png"  alt="">Delete </a>
        <a href="" class="card-link"><img  class=" img-fluid " style="width: 70px;" src="img/editbook.png"  alt=""> Edit</a>';
      }}
      function saveTask()
    {
      global $conn;

      
      $title = $_POST["title"];
      $quantity = $_POST["quantity"];
      $img = $_POST["img"];
      $Publisher =$_POST["Publisher"];
      $description = $_POST["description"];
      $query = "INSERT INTO book(title,quantity,Publisher,description) 
      VALUES ('$title',' $quantity',' $Publisher',' $description')";
      $res = mysqli_query($conn, $query);
      if (!$res) {
        echo "error";
      }
      header('location: index.php');
      
    }

    