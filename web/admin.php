<?php
include 'head.php';
?>

<body>
<?php
include 'header.php';
?>
<?php
include 'fonction/connect.php';
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Pseudo</th>
      <th scope="col">Mail</th>
      <th scope="col">Role</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    if($_SESSION['GestionUser']!=0){
    $sql = "SELECT UserID,Pseudo,Mail, NomType,UserType from users JOIN usertype ON users.UserType = usertype.TYPEID ";
    $datas = $pdo->query($sql);
    foreach ($datas as $data) {
      echo '<td><a href="user.php?User_id=' .$data['UserID'] .'">'.$data['Pseudo']
            .'</a></td>';
      echo "<td>".$data['Mail']."</td>";
      echo "<td>".$data['NomType']."</td>";
      echo '<td><a href="fonction/banUser.php?User_id=' .$data['UserID'] .'" class="btn btn-outline-info "> bannir </a></td><tr>';
    }
  }

    ?>
    
      

    </tr>
  </tbody>
</table>