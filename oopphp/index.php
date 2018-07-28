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
$users = new ViewStudent;
$datas = $users->showAllStudent();
?>

<?php foreach ($datas as $data): ?>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Firstname</th>
      <th>Middlename</th>
      <th>Lastname</th>
      <th>Gender</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $data['std_id']; ?></td>
      <td><?php echo $data['std_fname']; ?></td>
      <td><?php echo $data['std_mname']; ?></td>
      <td><?php echo $data['std_lname']; ?></td>
      <td><?php echo $data['std_gender']; ?></td>
      <td><a href="edit.php?edit=<?php echo $data['std_id']?>"><input type="button" name="" value="Edit"></a></td>
    </tr>
  </tbody>
</table>
<?php endforeach; ?>


</body>
</html>
