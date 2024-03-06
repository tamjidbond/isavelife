<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'users';


  $conn = new mysqli($servername, $username, $password, $database);


  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $enteredUsername = $_POST['username'];
  $enteredPassword = $_POST['password'];


  $sql = "SELECT * FROM users WHERE username = ? AND password = ?";


  $stmt = $conn->prepare($sql);


  $stmt->bind_param("ss", $enteredUsername, $enteredPassword);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    $_SESSION['user_id'] = $row['id'];


    header('Location: home.php');
    exit();
  } else {
    $error = '<div class="alert alert-error  font-bold">Incorrect username or password.</div>';
  }


  $stmt->close();
  $conn->close();
}


?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iSaveLife | Login</title>
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
    .hero-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    /* Adjust the background image for better visibility */
    .hero {
      background-image: url(images/blur.png);
      background-size: cover;
      background-position: center;
      min-height: 100vh;
    }

    /* Responsive styles for form elements */
    @media (max-width: 640px) {
      .input {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <div class="div ">
    <div class="hero min-h-screen ">
      <div class="hero-content flex-col lg:flex-row-reverse space-x-8">
        <div class="text-center lg:text-left">
          <h1 class="text-4xl lg:text-8xl font-bold uppercase text-white">LogIn</h1>
          <!-- <p class="py-4 text-lg lg:text-xl text-white">and Be the reason for someone's heartbeat.....</p> -->
        </div>
        <div class="card flex-shrink-0 w-[100%] max-w-md shadow-2xl bg-white -left-4">
          <div class="card-body">
            <form action="" method="POST">
              <!-- username -->
              <div class="form-control">
                <label class="label">
                  <span class="label-text text-base font-bold">Username</span>
                </label>
                <input name="username" id="username" type="text" placeholder="username"
                  class="input input-bordered rounded-xl focus:border-red-600 hover:border-red-500" required />
              </div>
              <!-- password -->
              <div class="form-control">
                <label class="label">
                  <span class="label-text text-base font-bold">Password</span>
                </label>
                <input name="password" id="password" type="password" placeholder="password"
                  class="input input-bordered rounded-xl focus:border-red-600 hover:border-red-500" required />
                <div class="flex justify-between mt-2">
                  <a href="receive.php" class="label-text-alt link link-hover font-bold">Need Blood?</a>
                  <a href="registration.php" class="label-text-alt link link-hover font-bold">Don't Have An
                    Account?</a>
                </div>
              </div>
              <div class="form-control mt-6">
                <button
                  class="btn bg-red-500 text-white hover:text-black hover:border-2 hover:border-red-600 font-bold ">Login</button>
              </div>
            </form>
            <?php
            if (isset($error)) {
              echo "<p class='text-red-600'>$error</p>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>