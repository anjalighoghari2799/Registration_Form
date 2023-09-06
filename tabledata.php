<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta Dob="vie
     <th>Name</th>wport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">  
</head>
<body>
<table class="table align-middle mb-0 bg-white">
    <?php
 
   include "connection.php"; 
   
 $query = "SELECT * FROM info;"
 or die("Query errorr..");
  
    $result =  mysqli_query($conn,$query) or die("Result eroor..");

    if(mysqli_num_rows($result)>0)
    { 
    ?>
  <thead class="bg-light">
    <tr>
      <th>Name with Display pic</th>
      <th>Address</th>
      <th>Gender</th>
      <th>Dob</th>
      <th>color</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while($row = mysqli_fetch_assoc($result)){
       

    ?>
     
    <tr>
      <td>
       
        <div class="d-flex align-items-center">
          <img
              src="upload/<?php echo  $row['photo'];  ?>"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1"><?php echo  $row['name'];  ?></p>
            <p class="text-muted mb-0"><?php echo  $row['email'];  ?></p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"><?php echo  $row['address'];  ?></p>
        <p class="text-muted mb-0"><?php echo  $row['city'];  ?></p>
      </td>
      <td>
      <p class="fw-normal mb-1"><?php echo  $row['gender'];  ?></p>
      </td>
      <td>
      <p class="fw-normal mb-1"><?php echo  $row['dob'];  ?></p>
      </td>
      <td>
      <!-- <p class="fw-normal mb-1"><?php echo  $row['color'];  ?></p> -->
      <div style="background-color:<?php echo  $row['color'];  ?>; border: 1px; width: 45px; height: 45px " ></div>
      </td> 
      <td>
      <a href="updatepage.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-success">EDIT</button></a>
<a href="deletepage.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger" >DELETE</button></a>
      </td>
    </tr>
    <?php  }   ?>
    <tr><td class="text-center" colspan="6"> <a href="info.php"><button type="button" class="btn btn-success" href="deletepage.php">ADD NEW</button></a></td></tr>

  </tbody>
  <?php     } ?>
</table>

</body>
</html>