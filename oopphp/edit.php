<?php
  include "model.php";
  include "controller.php";
  include "view.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>OOP PHP</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
$id = $_GET['edit'];
$users = new DbController;
$datas = $users->select_student($id);
?>
<?php
if(isset($_POST['edit']) ){
  $fname = $data['std_fname'];
  $mname = $data['std_mname'];
  $lname = $data['std_lname'];
  $gender = $data['std_gender'];

  $editStudent = new DbController;
  $editStudent->edit_student($std_fname, $std_mname, $std_lname, $std_gender);
}
?>
<?php foreach ($datas as $data): ?>
<form method="POST" action="edit.php?edit=<?php echo $id ?>">
  <label>ID</label>
      <?php echo $data['std_id']; ?><br />
  <label>Firstname</label>
      <input type="text" value="<?php echo $data['std_fname']; ?>"><br />
  <label>Middlename</label>
      <input type="text" value="<?php echo $data['std_mname']; ?>"><br />
  <label>Lastname</label>
      <input type="text" value="<?php echo $data['std_lname']; ?>"><br />
  <label>Gender</label>
      <input type="text" value="<?php echo $data['std_gender']; ?>"><br />
  <input type="submit" name="edit" value="SAVE">
</form>
<?php endforeach; ?>


</body>
</html>
