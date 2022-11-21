<?php
require 'connect.php';
require 'connectlogin.php';
if (isset($_SESSION['id']));
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM book WHERE id='$id'";
  $req = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($req);

  $id = $row["id"];
  $title = $row["title"];
  $photo = $row["img"];
  $quantity = $row["quantity"];
}
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
  <form id="task" name="task" enctype="multipart/form-data" action="script.php" method="POST">
    <input type="hidden" id="task-id" name="id" value="<?php echo "$id"; ?>">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="title" class="form-control" value="<?php echo "$title"; ?>" name="title" id="title-addTaskk">
    </div>

    <div class="form-control mb-3">
      <label for="title" class="form-label">IMG</label>
      <label for="file-upload" class="custom-file-upload ">

      </label>
      <input id="file-upload" value="" name="img" type="file">
      <input id="file-upload" value="<?= $photo ?>" name="old_img" type="hidden">
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">quantity</label>
      <input type="title" class="form-control" value="<?php echo " $quantity"; ?>" name="quantity">
    </div>

    <div class="modal-footer">

      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="reset">Close</button>
      <button type="submit" class="btn btn-primary" name="update" id="send">update</button>
    </div>
  </form>
  </div>
  </div>
  </div>
  </div>

  </div>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>