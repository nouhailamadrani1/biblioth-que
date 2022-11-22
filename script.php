<?php
//INCLUDE DATABASE FILE
include('connect.php');
//SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
session_start(); #unset
if (isset($_POST['save']))        saveBook();
if (isset($_POST['delete']))      deleteBook();
if (isset($_POST['update']))      updateBook();
if (isset($_SESSION['id']));

function getBook()
{
  include('connect.php');
  foreach ($result as $row) {
    $id = $row["id"];
    $title = $row["title"];
    $photo = $row["img"];
    $Publisher = $row['firstname'];
    $quantity = $row["quantity"];
    echo "<script> document.getElementById('savebook').innerHTML++; </script>";
    echo '
          <div class="col-lg-3 col-md-5 col-sm-11 card m-3 shadow p-3 mb-5 bg-body rounded"  >
<div class="shadow-none p-3 mb-5 bg-light rounded">
          <img   style="width: 70px; " src="img/' . $photo . ' " class="card-img-top align-self-center py-3" alt="..."> 
        <div class="card-body">
         <h5 class="card-title text-primary" style="text-overflow: ellipsis; overflow: hidden;  height: 1.8em; white-space: nowrap; max-width: 25ch;">"' . $title . '"</h5>
        
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item text-success ">N ° : ' . $id . '</li>
        <li class="list-group-item text-secondary">Publisher :' . $Publisher . ' </li>
        <li class="list-group-item text-secondary">Quantity :' . $quantity . ' </li>
      </ul>
      <div class="card-body d-flex justify-content-evenly ">
        <a  data-bs-toggle="modal" data-bs-target="#delete" class="delete" onclick="areYouSure(' . $id . ')" class="card-link "> <img  class=" img-fluid " style="width:40px; " src="img/x-button.png"  alt=""></a>
        <a href="editBook.php?id=' . $id . '" class="card-link"><img  class=" img-fluid " style="width: 40px;" src="img/updated.png"  alt=""></a>
        </div>
        </div>
        </div>
        
        ';
  }
}
function saveBook()
{
  global $conn;
  $title = $_POST["title"];
  $quantity = $_POST["quantity"];
  $Publisherid = $_SESSION['id'];
  $photo = $_FILES['img']['name'];
  $upload = "img/" . $photo;
  move_uploaded_file($_FILES['img']['tmp_name'], $upload);
  $query = "INSERT INTO book(title,img,quantity,Publisher) 
      VALUES ('$title','$photo','$quantity','$Publisherid')";
  $res = mysqli_query($conn, $query);
  var_dump($res);
  if (!$res) {
    echo "error";
  }
  header('location: index.php');
}
function deleteBook()
{
  //CODE HERE
  global $conn;
  $id = $_POST["bookId"];
  $sql = "DELETE FROM book WHERE id=$id";
  $query = mysqli_query($conn, $sql);
  echo "<script> document.getElementById('deletbook').innerHTML++; </script>";
  if (!$query) {
    echo "error";
  }
  //SQL DELETE
  $_SESSION['message'] = "Task has been deleted successfully !";
  header('location: index.php');
}
function updateBook()
{
  // CODE HERE
  global $conn;
  $id = $_POST["id"];
  $title = $_POST["title"];
  $quantity = $_POST["quantity"];
  $old_img = $_POST['old_img'];
  if (isset($_FILES['img']['name'])) {
    $photo = $_FILES['img']['name'];
    if ($photo != "") {
      $upload = "img/" . $photo;
      move_uploaded_file($_FILES['img']['tmp_name'], $upload);
    } else {
      $photo = $old_img;
    }
  } else {
    $photo = $old_img;
  }
  $req = "UPDATE `book` SET `title`='$title',`img`='$photo',`quantity`='$quantity' WHERE `id`=$id ";
  $res = mysqli_query($conn, $req);;
  if (!$res) {
    echo "error";
  }
  header('location: index.php');
}
