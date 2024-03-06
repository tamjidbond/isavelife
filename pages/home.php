<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSaveLife</title>
    <link rel="icon" type="png" href="images/tamjid.jpg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
            gradientColorStops: {
                'red-yellow': ['#FF0000', '#FFFF00'],
                'blue-green': ['#0000FF', '#00FF00'],
            },
            colors: {
                clifford: '#da373d',
                blood: '#E91630'
          }
        }
      }
    }
  </script>
  <style>
    .grad {
        background: linear-gradient(150deg, #ff0000 5%, #ffffff  95%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

  </style>
</head>

<body>
    <?php
    session_start();
    ?>
    <div class="hero min-h-screen" style="background-image: url(images/gradient.jpeg);">
        <div class="hero-overlay bg-opacity-50 space-y-8 lg:space-y-32 p-2">
            <!-- navbar start  -->
            <div class="container mx-auto">
                <div class="navbar bg-red-">
                    <div class="navbar-start">
                        <div class="dropdown">
                            <label tabindex="0" class="btn btn-ghost lg:hidden bg-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h8m-8 6h16" />
                                </svg>
                            </label>
                            <ul tabindex="0"
                                class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52 space-y-2 font-bold">
                                <li><a class="hover:bg-white p-2" href="donate_record1.php">Donate Record</a></li>
                                <li><a class="hover:bg-white p-2" href="receive_login.php">Receive</a></li>
                                <li><a class="hover:bg-white p-2" href="events.html">Events</a></li>
                                <li><a class="hover:bg-white p-2" href="blog.php">Blog</a></li>
                                <li><a href="login.php">Log Out</a></li>
                            </ul>
                        </div>
                        <a class="btn btn-ghost normal-case text-4xl text-white font-bold grad">
                            iSaveLife</a>
                    </div>
                    <div class="navbar-end hidden lg:flex text-white">
                        <ul class="menu menu-horizontal px-1 text-xl space-x-3">
                            <li><a class="hover:bg-white p-2" href="donate_record1.php">Donate Record</a></li>
                            <li><a class="hover:bg-white p-2" href="receive_login.php">Receive</a></li>
                            <li><a class="hover:bg-white p-2" href="events.html">Events</a></li>
                            <li><a class="hover:bg-white p-2" href="blog.php">Blog</a></li>
                            <a href="login.php"><button
                                    class="btn btn-outline text-white hover:text-whtie hover:bg-red-600 font-extrabold">Log
                                    Out</button></a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="hero md:block lg:flex container mx-auto border-4">
                <div class="element lg:flex-1 text-white text-center uppercase font-bold p-0 lg:p-4 space-y-8 ">
                    <h1 class="text-8xl text-white">Your Blood, Their hope!</h1>
                    <h1 class="text-xl text-white capitalize">Welcome, <span class="uppercase">
                            <?php echo $_SESSION['username']; ?>.
                        </span></h1>
                    <div class="button space-x-8">
                        <a href="donate_record1.php"><button
                                class="btn btn-outline text-white hover:text-whtie hover:bg-red-600 font-extrabold">Donate
                                Record</button></a>
                        <a href="receive_login.php"><button
                                class="btn btn-outline text-white hover:text-whtie hover:bg-red-600 font-extrabold">Receive
                                Blood</button></a>
                    </div>
                    <div class="stat ">
                        <div class="stats shadow ">
                            <div class="stat">
                                <div class="stat-title">Total Blood Donated</div>
                                <div class="stat-value">8,400 Units</div>
                                <div class="stat-desc">21% more than last month</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img hidden md:block lg:flex-1">
                    <img src="images/xco2_8jtl_220606.jpg" class="" alt="">
                </div>
            </div>
        </div>
    </div>
    


</body>

</html>