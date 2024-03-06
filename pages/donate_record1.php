<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Record</title>
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

            .input.w-80 {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="div">
        <div class="hero ">
            <div class="hero-content flex-col lg:flex-row-reverse lg:space-x-8">
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl lg:text-5xl font-bold uppercase text-white">Donate <br> Record</h1>
                </div>
                <div class="card flex-shrink-0 w-full max-w-md shadow-2xl bg-white">
                    <div class="card-body">
                        <form action="" method="POST" class="-space-y-1 scroll-auto">
                            <!-- date -->
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text text-base font-bold">Last Donated On</span>
                                </label>
                                <input name="date" id="date" type="date" placeholder="Date"
                                    class="input input-bordered border-black rounded-xl focus:border-red-600 hover:border-red-500"
                                    required />
                            </div>
                            <div class="form-control mt-6">
                                <button type="submit" name="donate"
                                    class="btn bg-red-500 text-white hover:text-black hover:border-2 hover:border-red-600 font-bold ">
                                    Remember</button>
                            </div> <br>
                            <?php
                            // Start or resume the session
                            session_start();
                            $error = '<div class="alert alert-success font-bold lg:flex justify-around w-full" >Remembered.. <br> You wont be called <br> in 3 months.<a href="home.php" class="bg-blood px-4 py-2 rounded-lg text-white">Return Home</a></div>';

                            if (isset($_POST['donate'])) {
                                $donatedDate = $_POST['date'];

                                // Check if the user is logged in
                                if (isset($_SESSION['user_id'])) {
                                    $userId = $_SESSION['user_id'];

                                    // Ensure that you have a valid database connection (you might need to modify "db.php")
                                    if ($conn) {
                                        // Assuming you have a "users" table with a column named "donated"
                                        // Update the "donated" date for the logged-in user
                                        $updateQuery = "UPDATE users SET donated = '$donatedDate' WHERE id = $userId"; // Modify the WHERE clause as needed
                            
                                        // Execute the update query
                                        $updateResult = mysqli_query($conn, $updateQuery);

                                        if ($updateResult) {
                                            echo $error;
                                        } else {
                                            echo "Error updating donation date: " . mysqli_error($conn);
                                        }

                                        // Close the database connection
                                        mysqli_close($conn);
                                    } else {
                                        echo "Database connection error.";
                                    }
                                } else {
                                    echo "User not logged in.";
                                }
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>