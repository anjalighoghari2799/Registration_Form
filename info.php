<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biopage</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">  
</head>
<body>
    <form action="getdata.php" method="post" enctype="multipart/form-data">
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
                <h3 class="mb-5 text-uppercase">Student registration form</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="name" name="name" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">Name</label>
                    </div>
                  </div>
               
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="email" id="email"  name="email" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m1">Email</label>
                    </div>
                  </div>
                  
                <div class="form-outline mb-4">
                  <input type="text" id="address"  name="address"  class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="famale" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="other" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                  
                    <select class="form-select" name="city" id="" >
                      <option value="Patanan">patana</option>
                      <option value="Surat">Surat</option>
                      <option value="Bharuch">Bharuch</option>
                      <option value="Vapi">Vapi</option>
                    </select>
                    <label class="form-label" for="form3Example1m1">Select the city</label>
 
                  </div>

                  <div class="col-md-6 mb-6">
                  
                  <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                   <input placeholder="Select date" type="date" id="example" class="form-control"  name="dob" >
                   <label for="example">DOB</label>
                <i class="fas fa-calendar input-prefix"></i>
                </div>
                

                </div>
                

                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <input type="file" name="photo" accept="image/*" class="form-control form-control-lg">
                      <label class="form-label" for="form3Example1m1">Photo</label>
                    </div>
                 </div>
                 
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="color" id="form3Example1m1" class="form-control form-control-lg" name="color" />
                      <label class="form-label" for="form3Example1m1">Favirate Color:</label>
                    </div>
                 </div>
               
                
                <div class="d-flex center-content-end pt-3">
                  <button type="reset" class="btn btn-light btn-lg text-center ">Reset all</button>
                  
                  <!-- <button type="submit" onclick="validate()" class="btn btn-warning btn-lg ms-2 text-center" >Submit form</button> -->
                  <button  type="button" onclick="validate()" class="btn btn-warning btn-lg ms-2 text-center" >Submit form</button>
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

<script>

  function validate(){

    const fname = document.querySelector('#name').value;

    if(fname == ""){
      alert("Please ENter NAme");
    }


  }


</script>