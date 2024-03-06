<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iSaveLife | Register</title>
  <link rel="icon" type="png" href="images/tamjid.jpg">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
            blood: '#E91630'
          }
        }
      }
    }
  </script>
  <style>
  /* Common styles for form elements */
  .form-control {
    margin-bottom: 20px;
  }

  .label-text {
    font-weight: bold;
  }

  /* Center the form on smaller screens */
  .t2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  /* Adjust the background image for better visibility */
  .tamjid {
    background-image: url(images/blur.png);
    background-position: center;
    background-size: cover;
    min-height: 100vh;
  }

  /* Responsive styles for form elements */
  @media (max-width: 640px) {
    .input {
      width: 100%;
    }
    .t2 {
      justify-content: center;
    }
    .card {
      margin-left: auto;
      margin-right: auto;
    }
    /* Set the input fields to the same width */
    input[type="text"],
    input[type="number"],
    input[type="date"],
    select {
      width: 100%;
      padding: 8px; /* Adjust padding if needed */
      box-sizing: border-box; /* Ensure padding doesn't affect width */
    }
    /* Style select menu */
    select {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      width: 100%;
      padding: 8px;
      border-radius: 4px;
      border: 2px solid #ccc;
    }
  }
</style>
</head>
<body class="mx-auto p-0">
    <?php
    $msg = "";
    if (isset($_POST['register'])) {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $blood = $_POST['blood'];
        // $email = $_POST['email'];
        $phone = $_POST['phone'];
        // $address = $_POST['address'];
        $donated = $_POST['donated'];
        $password = $_POST['password'];

        // Check if the username already exists in the database
        $check_query = "SELECT * FROM users WHERE username = '$username'";
        $check_result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            $msg = '<div class="alert alert-error text-xl w-11/12">Username ' . $username . ' already exists. Please choose a different username.</div>';
        } else {
            // Username is unique, proceed with registration
            $query = "INSERT INTO users(fullname, username, gender, blood, email, phone, address, donated, password) VALUES ('$fullname', '$username', '$gender', '$blood', '$email', '$phone', '$address', '$donated', '$password')";

            $create_new_user = mysqli_query($conn, $query);

            if (!$create_new_user) {
                die("Query Failed..!" . mysqli_errno($conn));
            } else {
                $msg = '<div class="alert alert-success text-xl w-11/12">Registration Successful, ' . $fullname . '. Please <a href="login.php" class="bg-blood text-2xl lg:text-sm text-white font-bold  rounded-lg p-2"><div class="flex">Login</div></a></div>';
            }
        }
    }
    ?>


  <div class="div">
    <div class="hero min-h-screen w-full tamjid">
      <div class="t t2 flex-col lg:flex-row-reverse lg:space-x-8">
        <div class="text-center lg:text-left">
          <h1 class="text-2xl lg:text-8xl font-bold uppercase text-white">Register</h1>
            <!-- <p class="py-6 text-xl text-white">You can become a superhero too......</p> -->
          <div class="ml-4 mb-4">
            <?php
                 echo $msg;
             ?>
          </div>
        </div>

        <div class="card flex-shrink-0 w-[95%] max-w-md shadow-2xl bg-white -left-1 pt-2 pb-2">
          <div class="card-body">

            <form action="" method="POST" class="-space-y-1 scroll-auto max-w-full">
              <!-- fullname  -->
              <div class="form-control">
                <label class="label ">
                  <span class="label-text text-base font-bold">Full Name</span>
                </label>
                <input name="fullname" id="email" type="text" placeholder="Full Name"
                  class="input input-bordered bord border-black   rounded-xl focus:border-red-600 hover:border-red-500"
                  required autocomplete="off" />
              </div>

              <!-- username  -->
              <div class="form-control ">
                <label class="label ">
                  <span class="label-text text-base font-bold">username</span>
                </label>
                <input name="username" id="username" type="text" placeholder="username"
                  class="input input-bordered bord border-black   rounded-xl focus:border-red-600 hover:border-red-500"
                  required autocomplete="off" />
              </div>

              <!-- gender  -->
              <div class="form-control">
                    <label class="label ">
                        <span class="label-text text-base font-bold">Gender</span>
                    </label>
                    <div class="input w-80">
                        <select name="gender" class="select border   border-black hover:border-red-500 w-full lg:w-[135%] -ml-4" required autocomplete="off">
                        <option disabled selected class="text-gray-400">Select Your Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                        </select>
                    </div>
                </div>


              <!-- blood group  -->
              <div class="form-control">
                <label class="label ">
                  <span class="label-text text-base font-bold">Blood Group</span>
                </label>
                <div class="input w-80 ">
                  <select name="blood" class="select bord border-black  hover:border-red-500w-full lg:w-[135%] -ml-4" required
                    autocomplete="off">
                    <option disabled selected text-gray-400>Select Your Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                  </select>
                </div>
              </div>

              <!-- email  
              <div class="form-control ">
                <label class="label ">
                  <span class="label-text text-base font-bold">Email</span>
                </label>
                <input name="email" id="email" type="text" placeholder="email" required autocomplete="off"
                  class="input input-bordered bord border-black rounded-xl focus:border-red-600 hover:border-red-500" />
              </div>  -->

              

              <!-- address  
              <div class="form-control ">
                <label class="label ">
                  <span class="label-text text-base font-bold">Address</span>
                </label>
                <input name="address" id="address" type="address" placeholder="address"
                  class="input input-bordered border-black   bord rounded-xl focus:border-red-600 hover:border-red-500"
                  required />
              </div> -->

              <div class="form-control">
                    <label class="label ">
                        <span class="label-text text-base font-bold">Location</span>
                    </label>
                    <div class="input w-80">
                        <select name="address" class="select border  border-black hover:border-red-500 w-full lg:w-[135%] -ml-4" required autocomplete="off">
                        <option disabled selected class="text-gray-400">Select Your Location</option>       
                        <option value="Atra">Atra</option>
                        <option value="Aronghata">Aronghata</option>
                        <option value="Batiaghata">Batiaghata</option>
                        <option value="Chandani Mahal">Chandani Mahal</option>
                        <option value="Daulatpur">Daulatpur</option>
                        <option value="Digholiya">Digholiya</option>
                        <option value="Gollamari">Gollamari</option>
                        <option value="Jahanabad">Jahanabad</option>
                        <option value="Khulna Sadar">Khulna Sadar</option>
                        <option value="Khalishpur">Khalishpur</option>
                        <option value="Moylapota">Moylapota</option>
                        <option value="Rupsha">Rupsha</option>
                        

                        
                        </select>
                    </div>
                </div>

              <!-- phone  -->
              <div class="form-control ">
                <label class="label ">
                  <span class="label-text text-base font-bold">Phone Number</span>
                </label>
                <input name="phone" id="phone" type="number" placeholder="Phone Number"
                  class="input input-bordered border-black   bord rounded-xl focus:border-red-600 hover:border-red-500"
                  required autocomplete="off" />
              </div>

              <!-- last donated  -->
              <!-- address  -->
              <div class="form-control ">
                <label class="label ">
                  <span class="label-text text-base font-bold">Last Donated On</span>
                </label>
                <input name="donated" id="donated" type="date" placeholder="donated"
                  class="input input-bordered border-black   bord rounded-xl focus:border-red-600 hover:border-red-500" />
              </div>

              <!-- password  -->
              <div class="form-control">
                <label class="label">
                  <span class="label-text text-base font-bold">Password</span>
                </label>
                <input name="password" id="password" type="password" placeholder="password"
                  class="input input-bordered border-black   bord rounded-xl focus:border-red-600 hover:border-red-500"
                  required />

                <label class="label">
                  <a href="login.php" class="label-text-alt link link-hover font-bold">Already Have An Account? log in?</a>
                </label>
              </div>

              <!-- register button  -->
              <div class="form-control mt-6">
                <button type="submit" name="register"
                  class="btn bg-red-500 text-white hover:text-black hover:border-2 hover:border-red-600 font-bold ">Register</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>