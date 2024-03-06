<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSaveLife</title>
    <link rel="icon" type="png" href="pages/images/tamjid.jpg">
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
</head>

<body>
    <div class="hero min-h-screen" style="background-image: url(pages/images/blur.png);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content border-2 p-8 rounded-xl">
            <div class="max-w-md space-x-4 p-8">
                <a href="pages/receive.php">
                    <button
                        class="btn bg-red-600 rounded-xl font-bold text-white hover:text-black hover:border-red-600 text-base lg:text-xl">Receive</button>
                </a>
                <a href="pages/login.php">
                    <button
                        class="btn bg-red-600 rounded-xl font-bold text-white hover:text-black hover:border-red-600 text-base lg:text-xl">Donate</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>