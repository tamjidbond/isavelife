<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSaveLife | Receive</title>
    <link rel="icon" type="png" href="images/tamjid.jpg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Your existing styles */
        /* ... */

        /* Additional styles for cards and grid */
        .card-container {
            display: grid;
            gap: 5px;
            padding: 20px;
        }

        .card {
            /* Style your card here */
            /* Example styles */
            padding: 20px;
            text-align: center;
        }

        @media (min-width: 640px) {
            .sm\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (min-width: 1024px) {
            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }
    </style>
</head>

<body>
    <!-- Your existing HTML structure -->
    <div class="div min-h-screen " style="background-image: url(images/blur.png); background-size: cover;">
        <div class="navbar">
            <div class="mx-auto">
                <a href="home.php" class="btn btn-ghost normal-case text-xl text-white"><u>Go Back</u></a>
            </div>
        </div>
        <div class="result bg-transparent text-white font-bold">
            <?php
            include "db.php";

            if (isset($_POST['search'])) {
                $bloodType = $_POST['blood'];

                $threeMonthsAgo = date('Y-m-d', strtotime('-3 months'));

                $query = "SELECT fullname, blood, address, donated, phone FROM users WHERE blood = '$bloodType' AND donated <= '$threeMonthsAgo'";

                $result = mysqli_query($conn, $query);

                 if ($result && mysqli_num_rows($result) > 0) {
                    echo "<div class='text-center'>"; // Center align content
                    echo "<h2>Available Donors:</h2>";
                    echo "<h3>(Scroll Down to View more)</h3>";
                        echo "</div>";

                    echo "<div class='card-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4'>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='card bg-white text-black rounded-lg shadow-lg p-4'>";
                        echo "<img src='https://e7.pngegg.com/pngimages/799/987/png-clipart-computer-icons-avatar-icon-design-avatar-heroes-computer-wallpaper-thumbnail.png' class='w-20 h-20 rounded-full mx-auto'>";
                        echo "<h3 class='font-bold text-lg mb-2'>" . $row['fullname'] . "</h3>";
                        echo "<p><strong>Blood Type:</strong> <span class='text-red-600'>" . $row['blood'] . "</span></p>";
                        echo "<p><strong>Location:</strong><span class='text-red-600'> " . $row['address'] . "</span></p>";

                        if ($row['donated'] == "0000-00-00") {
                            echo "<p><strong>Last Donated on:</strong><span class='text-red-600'> Not Donated Yet </span></p>";
                        } else {
                            $lastDonatedDate = strtotime($row['donated']);
                            $today = strtotime(date('Y-m-d'));
                            $daysAgo = floor(($today - $lastDonatedDate) / (60 * 60 * 24));
                            echo "<p><strong>Last Donated on:</strong><span class='text-red-600'> $daysAgo days ago </span></p>";
                        }

                        echo "<p><strong>Phone:</strong><span class='text-red-600'> 0" . $row['phone'] . "</span></p>";
                        echo '<button onclick="callDonor(\'' . $row['phone'] . '\')" class="btn bg-red-500 text-white hover:text-black hover:border-2 hover:border-red-600 font-bold mt-4"><img src="images/telephone.png" style="height:40px; width: 40px;"> </button>';
                        echo "</div>"; // Closing card div
                    }
                    echo "</div>"; // Closing card-container div
                } else {
                    echo "<div class='text-center mt-20'>"; // Center align content
                    echo "<p>Sorry, No Available Donor at the Moment..</p>";
                    echo "</div>";
                }

                mysqli_close($conn);
            }
            ?>
        </div>
        <div class="hero">
            <div class=" flex-col lg:flex-row-reverse space-x-8 mt-60">
                <div class="card flex-shrink-0  max-w-sm shadow-2xl bg-white">
                    <div class="">
                        <form action="" method="POST">
                            <!-- blood group -->
                            <div class="form-control">
                                <label class="label ">
                                    <span class="label-text text-base font-bold">Do you need blood?</span>
                                </label>
                                <div class="input w-80 font-bold">
                                    <select name="blood" class="select border-black hover:border-red-500 w-80 -ml-4"
                                        required autocomplete="off">
                                        <option disabled selected text-black>Select Blood Group</option>
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

                            <!-- btn -->
                            <div class="form-control mt-6">
                                <button type="submit" name="search"
                                    class="btn bg-red-500 text-white hover:text-black hover:border-2 hover:border-red-600 font-bold ">Search
                                    For Blood</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for calling donors -->
    <script>
        function callDonor(phoneNumber) {
            window.location.href = 'tel:' + '0' + phoneNumber;
        }
    </script>
</body>

</html>
