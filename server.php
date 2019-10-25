 <?php 
  $conn = mysqli_connect('localhost', 'root', '', 'leagueofdraven');
  if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $comment = $_POST['email'];
  $address = $_POST['address'];
    $standard = $_POST['standard'];
  $premium = $_POST['premium'];
    $sql = "INSERT INTO comments (name, comment, address, standard, premium ) VALUES ('{$name}', '{$comment}', '{$address }', '{$standard }', '{$premium}')";
    if (mysqli_query($conn, $sql)) {
      $id = mysqli_insert_id($conn);
      $saved_comment = '<div class="comment_box">
          <span class="delete" data-id="' . $id . '" >delete</span>
          <span class="edit" data-id="' . $id . '">edit</span>
          <div class="display_name">'. $name .'</div>
          <div class="comment_text">'. $comment .'</div>
      <div class="display_name">'. $address .'</div>
          <div class="comment_text">'. $standard .'</div>
      <div class="comment_text">'. $premium .'</div>
        </div>';
      echo $saved_comment;
    }else {
      echo "Error: ". mysqli_error($conn);
    }
    exit();
  }
  // delete comment fromd database
  if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM comments WHERE id=" . $id;
    mysqli_query($conn, $sql);
    exit();
  }
  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $comment = $_POST['email'];
    $sql = "UPDATE comments SET name='{$name}', email='{$email}', address='{$address}' , standard='{$standard}', premium='{$premium}' WHERE id=".$id;
    if (mysqli_query($conn, $sql)) {
      $id = mysqli_insert_id($conn);
      $saved_comment = '<div class="comment_box">
        <span class="delete" data-id="' . $id . '" >delete</span>
        <span class="edit" data-id="' . $id . '">edit</span>
        <div class="display_name">'. $name .'</div>
        <div class="comment_text">'. $email .'</div>
      <div class="display_name">'. $address .'</div>
          <div class="comment_text">'. $standard .'</div>
      <div class="comment_text">'. $premium .'</div>
      </div>';
      echo $saved_comment;
    }else {
      echo "Error: ". mysqli_error($conn);
    }
    exit();
  }

  // Retrieve comments from database
  $sql = "SELECT * FROM comments";
  $result = mysqli_query($conn, $sql);
  $comments = '<div id="display_area">'; 
  while ($row = mysqli_fetch_array($result)) {
    $comments .= '<div class="comment_box">
        <span class="delete" data-id="' . $row['id'] . '" >delete</span>
        <span class="edit" data-id="' . $row['id'] . '">edit</span>
        <div class="display_name">'. $row['name'] .'</div>
        <div class="comment_text">'. $row['comment'] .'</div>
      <div class="display_name">'. $row['address'] .'</div>
        <div class="comment_text">'. $row['standard'] .'</div>
      <div class="comment_text">'. $row['premium'] .'</div>
      </div>';
  }
  $comments .= '</div>';
?>