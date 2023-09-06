<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biopage</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">  
</head>
<body>
    <form action="updatedata.php" method="post" enctype="multipart/form-data">
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="image/pexels-fauxels-3182750.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Update Student registration form</h3>
                <?php 
                include "connection.php";
                $sid=$_GET['id'];
                $sql="SELECT * FROM `info` WHERE id={$sid}";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){

                       while($row=mysqli_fetch_array($result))
                       {

                     
                
                ?>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <input type="hidden" value="<?php echo $row['id']; ?>" id="form3Example1m" name="id" class="form-control form-control-lg" />

                      <input type="text" value="<?php echo $row['name']; ?>" id="form3Example1m" name="name" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">Name</label>
                    </div>
                  </div>
               
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="email" id="form3Example1m1"  value="<?php echo $row['email']; ?>" name="email" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m1">Email</label>
                    </div>
                  </div>
                  
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example8"  value="<?php echo $row['address']; ?>" name="address"  class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                    <?php
                    
                    
                    
                    ?>

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="famale" <?php if($row['gender']=="famale")  {echo "checked";} ?>/>
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="male" <?php if($row['gender']=="male")  {echo "checked";} ?>/>
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="other" <?php if($row['gender']=="other")  {echo "checked";} ?>  /> 
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                            <?php
                            $scity=$row['city'];
                            if($scity=="Patanam")
                            {
                                ?>
                                <select class="form-select" name="city" id="" >
                          <option value="Patanan" selected>patana</option>
                          <option value="Surat"  >Surat</option>
                          <option value="Bharuch">Bharuch</option>
                          <option value="Vapi">Vapi</option>
                        </select>
                                <?php 
                            }elseif($scity=="Surat"){?>
                            <select class="form-select" name="city" id="" >
                      <option value="Patanan" >patana</option>
                      <option value="Surat"  selected>Surat</option>
                      <option value="Bharuch">Bharuch</option>
                      <option value="Vapi">Vapi</option>
                    </select>
                            <?php 
                              
                            }elseif($scity=="Bharuch"){
                                ?>
                                <select class="form-select" name="city" id="" >
                          <option value="Patanan" >patana</option>
                          <option value="Surat">Surat</option>
                          <option value="Bharuch"  selected>Bharuch</option>
                          <option value="Vapi">Vapi</option>
                        </select>
                                <?php 
                            }elseif($scity=="Vapi"){
                                ?>
                                <select class="form-select" name="city" id="" >
                          <option value="Patanan" >patana</option>
                          <option value="Surat">Surat</option>
                          <option value="Bharuch">Bharuch</option>
                          <option value="Vapi" selected>Vapi</option>
                        </select>
                                <?php 
                            }else{
                               
                                   
                                }
                            
                                                       
                            
                            ?>
                  
                    
                    <label class="form-label" for="form3Example1m1">Select the city</label>
 
                  </div>

                  <div class="col-md-6 mb-6">
                  
                  <div id="date-picker-example"  class="md-form md-outline input-with-post-icon datepicker" inline="true">
                   <input placeholder="Select date" type="date" id="example" class="form-control"   value="<?php echo $row['dob']; ?>"name="dob" >
                   <label for="example">DOB</label>
                <i class="fas fa-calendar input-prefix"></i>
                </div>
                

                </div>
                

                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <input type="file" name="photo" accept="image/*" class="form-control form-control-lg">
                      <label class="form-label" for="form3Example1m1">Photo</label>
                    </div>
                    <div class="col-xl-6 d-none d-xl-block">
              <img src="upload/<?php echo $row['photo']; ?>"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                <label class="form-label" for="form3Example1m1">Old Image </label>

            </div>
                 </div>
                 
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="color"  value="<?php echo $row['color']; ?>" id="form3Example1m1" class="form-control form-control-lg" name="color" />
                      <label class="form-label" for="form3Example1m1">Favirate Color:</label>
                    </div>
                 </div>
               
                <?php  }     }     ?>
                <div class="d-flex center-content-end pt-3">
                 
                  
                  <button type="submit" class="btn btn-warning btn-lg ms-2 text-center" >UPDATE form</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
</body>
</html>