<?php
include '../Control/users.php';
$users=getUsers()
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2>Product Table</h2><hr>

<table>
  <tr>
    <th><h3><pre>Product Name                   Description                   Price                   Brand                   Catagory</pre></h3></th>
    <!-- <th></th>
    <th></th>
  </tr> -->
</tr>
<?php foreach($users as $user):?>
   
<tr>
    <td><?php echo $user['Product_tittle']?></td>
    <td><?php echo $user['Full_description']?></td>
    <td><?php echo $user['Pricing']?></td>
    <td><?php echo $user['Brand_name']?></td>
    <td><?php echo $user['Catagory']?></td>
    
  </tr> 
  <tbody>
  <?php endforeach;;?> 
  <tbody>
</table>
 
</body>
</html>