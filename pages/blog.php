<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.8.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="container w-10/12 mx-auto p-2 lg:p-6">
        <div class="navbar bg-red-900 rounded-xl mb-8">
            <div class="navbar-start">
                <div class="dropdown text-white font-bold">
                    <label tabindex="0" class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 font-bold" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </label>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-red-900 rounded-box w-52 text-white">
                        <li><a href="home.php">Homepage</a></li>
                        <li><a href="receive_login.php">Receive</a></li>
                        <li><a href="events.html">Events</a></li>
                        <li><a href="blood_bank.html">Blood Bank</a></li>
                        <li><a href="../index.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
            <div class="navbar-center">
                <a class="btn btn-ghost normal-case text-2xl text-white ">iSaveLife Blogs</a>
            </div>


        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-6">

            <div class="blog-post bg-white rounded-lg shadow-lg transition-transform transform hover:-translate-y-2">
                <img src="images/2_0.jpg" alt="Blog Post 1" class="w-full h-48 object-cover object-center rounded-t-lg">
                <div class="p-4">
                    <h2 class="text-2xl font-bold mb-2">Why Blood Donation Matters</h2>
                    <p class="text-gray-600 mb-4">Blood donation is a crucial act that saves lives. Learn why it matters
                        and how you can make a difference.......</p>
                    <button
                        class="bg-red-700 text-white px-4 py-2 rounded-full block mx-auto hover:bg-red-600 focus:outline-none"
                        onclick="openModal(1)">Read More</button>
                </div>
                <!-- Modal -->
                <div id="modal1"
                    class="modal hidden fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 p-4 flex justify-center items-center">
                    <div class="modal-content bg-white rounded-lg p-4 max-w-2xl">
                        <span class="close-button absolute top-2 right-2 text-2xl cursor-pointer"
                            onclick="closeModal(1)">&times;</span>
                        <h2 class="modal-title text-2xl font-bold">Why Blood Donation Matters</h2>
                        <p class="modal-text">Blood donation is a crucial act that saves lives. Learn why it matters and
                            how you can make a difference. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Architecto libero at perferendis delectus neque quae nihil provident facere optio culpa
                            eligendi, conseqleni lorem100ti ut placeat dolorum laboriosam cumque error!
                        </p>
                    </div>
                </div>
            </div>


            <div class="blog-post bg-white rounded-lg shadow-lg transition-transform transform hover:-translate-y-2">
                <img src="images/2_0.jpg" alt="Blog Post 1" class="w-full h-48 object-cover object-center rounded-t-lg">
                <div class="p-4">
                    <h2 class="text-2xl font-bold mb-2">Why Blood Donation Matters</h2>
                    <p class="text-gray-600 mb-4">Blood donation is a crucial act that saves lives. Learn why it matters
                        and how you can make a difference.......</p>
                    <button
                        class="bg-red-700 text-white px-4 py-2 rounded-full block mx-auto hover:bg-red-600 focus:outline-none"
                        onclick="openModal(2)">Read More</button>
                </div>
                <!-- Modal -->
                <div id="modal2"
                    class="modal hidden fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 p-4 flex justify-center items-center">
                    <div class="modal-content bg-white rounded-lg p-4 max-w-2xl">
                        <span class="close-button absolute top-2 right-2 text-2xl cursor-pointer"
                            onclick="closeModal(2)">&times;</span>
                        <h2 class="modal-title text-2xl font-bold">Why Blood Donation Matters</h2>
                        <p class="modal-text">Blood donation is a crucial act that saves lives. Learn why it matters and
                            how you can make a differencer, sit amet consectetur adipisicing elit.
                            Architecto libero at perferendis delectus neque quae nihil provident facere optio culpa
                            eligendi, consequuntur dolor deleni lorem100ti ut placeat dolorum laboriosam cumque error!
                        </p>
                    </div>
                </div>
            </div>


            <div class="blog-post bg-white rounded-lg shadow-lg transition-transform transform hover:-translate-y-2">
                <img src="images/2_0.jpg" alt="Blog Post 1" class="w-full h-48 object-cover object-center rounded-t-lg">
                <div class="p-4">
                    <h2 class="text-2xl font-bold mb-2">Why Blood Donation Matters</h2>
                    <p class="text-gray-600 mb-4">Blood donation is a crucial act that saves lives. Learn why it matters
                        and how you can make a difference.......</p>
                    <button
                        class="bg-red-700 text-white px-4 py-2 rounded-full block mx-auto hover:bg-red-600 focus:outline-none"
                        onclick="openModal(3)">Read More</button>
                </div>
                <!-- Modal -->
                <div id="modal3"
                    class="modal hidden fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 p-4 flex justify-center items-center">
                    <div class="modal-content bg-white rounded-lg p-4 max-w-2xl">
                        <span class="close-button absolute top-2 right-2 text-2xl cursor-pointer"
                            onclick="closeModal(3)">&times;</span>
                        <h2 class="modal-title text-2xl font-bold">Why Blood Donation Matters</h2>
                        <p class="modal-text">Blood donation is a crucial act that saves lives. Learn why it matters and
                            how you can make a difference. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Architecto libero at perferendis delectus neque quae nihil provident facere optio culpa
                            eligendi, consequorem100ti ut placeat dolorum laboriosam cumque error!
                        </p>
                    </div>
                </div>
            </div>

            <div class="blog-post bg-white rounded-lg shadow-lg transition-transform transform hover:-translate-y-2">
                <img src="images/2_0.jpg" alt="Blog Post 1" class="w-full h-48 object-cover object-center rounded-t-lg">
                <div class="p-4">
                    <h2 class="text-2xl font-bold mb-2">Why Blood Donation Matters</h2>
                    <p class="text-gray-600 mb-4">Blood donation is a crucial act that saves lives. Learn why it matters
                        and how you can make a difference.......</p>
                    <button
                        class="bg-red-700 text-white px-4 py-2 rounded-full block mx-auto hover:bg-red-600 focus:outline-none"
                        onclick="openModal(4)">Read More</button>
                </div>
                <!-- Modal -->
                <div id="modal4"
                    class="modal hidden fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 p-4 flex justify-center items-center">
                    <div class="modal-content bg-white rounded-lg p-4 max-w-2xl">
                        <span class="close-button absolute top-2 right-2 text-2xl cursor-pointer"
                            onclick="closeModal(4)">&times;</span>
                        <h2 class="modal-title text-2xl font-bold">Why Blood Donation Matters</h2>
                        <p class="modal-text">Blood donation is a crucial act that saves lives. Learn why it matters and
                            how you can make a difference. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Architecto libero at perferendis delectus neque quae nihil provident facere optio culpa
                            eligendi, consequorem100ti ut placeat dolorum laboriosam cumque error!
                        </p>
                    </div>
                </div>
            </div>


            <div class="blog-post bg-white rounded-lg shadow-lg transition-transform transform hover:-translate-y-2">
                <img src="images/2_0.jpg" alt="Blog Post 1" class="w-full h-48 object-cover object-center rounded-t-lg">
                <div class="p-4">
                    <h2 class="text-2xl font-bold mb-2">Why Blood Donation Matters</h2>
                    <p class="text-gray-600 mb-4">Blood donation is a crucial act that saves lives. Learn why it matters
                        and how you can make a difference.......</p>
                    <button
                        class="bg-red-700 text-white px-4 py-2 rounded-full block mx-auto hover:bg-red-600 focus:outline-none"
                        onclick="openModal(3)">Read More</button>
                </div>
                <!-- Modal -->
                <div id="modal3"
                    class="modal hidden fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 p-4 flex justify-center items-center">
                    <div class="modal-content bg-white rounded-lg p-4 max-w-2xl">
                        <span class="close-button absolute top-2 right-2 text-2xl cursor-pointer"
                            onclick="closeModal(3)">&times;</span>
                        <h2 class="modal-title text-2xl font-bold">Why Blood Donation Matters</h2>
                        <p class="modal-text">Blood donation is a crucial act that saves lives. Learn why it matters and
                            how you can make a difference. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Architecto libero at perferendis delectus neque quae nihil provident facere optio culpa
                            eligendi, consequorem100ti ut placeat dolorum laboriosam cumque error!
                        </p>
                    </div>
                </div>
            </div>


            <div class="blog-post bg-white rounded-lg shadow-lg transition-transform transform hover:-translate-y-2">
                <img src="images/2_0.jpg" alt="Blog Post 1" class="w-full h-48 object-cover object-center rounded-t-lg">
                <div class="p-4">
                    <h2 class="text-2xl font-bold mb-2">Why Blood Donation Matters</h2>
                    <p class="text-gray-600 mb-4">Blood donation is a crucial act that saves lives. Learn why it matters
                        and how you can make a difference.......</p>
                    <button
                        class="bg-red-700 text-white px-4 py-2 rounded-full block mx-auto hover:bg-red-600 focus:outline-none"
                        onclick="openModal(3)">Read More</button>
                </div>
                <!-- Modal -->
                <div id="modal3"
                    class="modal hidden fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 p-4 flex justify-center items-center">
                    <div class="modal-content bg-white rounded-lg p-4 max-w-2xl">
                        <span class="close-button absolute top-2 right-2 text-2xl cursor-pointer"
                            onclick="closeModal(3)">&times;</span>
                        <h2 class="modal-title text-2xl font-bold">Why Blood Donation Matters</h2>
                        <p class="modal-text">Blood donation is a crucial act that saves lives. Learn why it matters and
                            how you can make a difference. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Architecto libero at perferendis delectus neque quae nihil provident facere optio culpa
                            eligendi, consequorem100ti ut placeat dolorum laboriosam cumque error!
                        </p>
                    </div>
                </div>
            </div>


            <div class="blog-post bg-white rounded-lg shadow-lg transition-transform transform hover:-translate-y-2">
                <img src="images/2_0.jpg" alt="Blog Post 1" class="w-full h-48 object-cover object-center rounded-t-lg">
                <div class="p-4">
                    <h2 class="text-2xl font-bold mb-2">Why Blood Donation Matters</h2>
                    <p class="text-gray-600 mb-4">Blood donation is a crucial act that saves lives. Learn why it matters
                        and how you can make a difference.......</p>
                    <button
                        class="bg-red-700 text-white px-4 py-2 rounded-full block mx-auto hover:bg-red-600 focus:outline-none"
                        onclick="openModal(3)">Read More</button>
                </div>
                <!-- Modal -->
                <div id="modal3"
                    class="modal hidden fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 p-4 flex justify-center items-center">
                    <div class="modal-content bg-white rounded-lg p-4 max-w-2xl">
                        <span class="close-button absolute top-2 right-2 text-2xl cursor-pointer"
                            onclick="closeModal(3)">&times;</span>
                        <h2 class="modal-title text-2xl font-bold">Why Blood Donation Matters</h2>
                        <p class="modal-text">Blood donation is a crucial act that saves lives. Learn why it matters and
                            how you can make a difference. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Architecto libero at perferendis delectus neque quae nihil provident facere optio culpa
                            eligendi, consequorem100ti ut placeat dolorum laboriosam cumque error!
                        </p>
                    </div>
                </div>
            </div>


            <div class="blog-post bg-white rounded-lg shadow-lg transition-transform transform hover:-translate-y-2">
                <img src="images/2_0.jpg" alt="Blog Post 1" class="w-full h-48 object-cover object-center rounded-t-lg">
                <div class="p-4">
                    <h2 class="text-2xl font-bold mb-2">Why Blood Donation Matters</h2>
                    <p class="text-gray-600 mb-4">Blood donation is a crucial act that saves lives. Learn why it matters
                        and how you can make a difference.......</p>
                    <button
                        class="bg-red-700 text-white px-4 py-2 rounded-full block mx-auto hover:bg-red-600 focus:outline-none"
                        onclick="openModal(3)">Read More</button>
                </div>
                <!-- Modal -->
                <div id="modal3"
                    class="modal hidden fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 p-4 flex justify-center items-center">
                    <div class="modal-content bg-white rounded-lg p-4 max-w-2xl">
                        <span class="close-button absolute top-2 right-2 text-2xl cursor-pointer"
                            onclick="closeModal(3)">&times;</span>
                        <h2 class="modal-title text-2xl font-bold">Why Blood Donation Matters</h2>
                        <p class="modal-text">Blood donation is a crucial act that saves lives. Learn why it matters and
                            how you can make a difference. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Architecto libero at perferendis delectus neque quae nihil provident facere optio culpa
                            eligendi, consequorem100ti ut placeat dolorum laboriosam cumque error!
                        </p>
                    </div>
                </div>
            </div>

            <!-- Repeat the blog post structure for more posts -->
        </div>
    </div>

    <script>
        function openModal(postId) {
            document.getElementById(`modal${postId}`).style.display = "block";
        }

        function closeModal(postId) {
            document.getElementById(`modal${postId}`).style.display = "none";
        }
    </script>
</body>

</html>