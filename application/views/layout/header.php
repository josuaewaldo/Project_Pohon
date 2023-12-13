<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;700;900&display=swap" rel="stylesheet">
    <title>Project Pohon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter']
                    }
                }
            }
        }
    </script>
</head>

<body>
    <div class="bg-[#527853] bg-gradient-to-r from-[#527853] to-[#ff682c]">
        <!-- Navbar -->
        <h1 class="text-center">Myhon</h1>
        <div class="w-full h-24 py-12 flex items-center justify-between pl-12 pr-20">
            <div class="text-4xl font-bold text-yellow-100">
                Volun<span class="text-yellow-500">T</span>rees
            </div>
            <div class="flex space-x-6 -mb-4">
                <a href="<?= base_url('User'); ?>"
                    class="text-yellow-100 text-[18px] font-medium hover:text-green-500 transition duration-200">Beranda</a>
                <a href="#"
                    class="text-yellow-100 text-[18px] font-medium hover:text-green-500 transition duration-200">News</a>
                <a href="#"
                    class="text-yellow-100 text-[18px] font-medium hover:text-green-500 transition duration-200">Edukasi</a>
                <a href="#"
                    class="text-yellow-100 text-[18px] font-medium hover:text-green-500 transition duration-200">Reward</a>
            </div>
            <a href="<?= base_url('User/login'); ?>" class="bg-[#ffffff] hover:bg-[#819381] text-[#527853] font-bold py-2 px-4 rounded">Login</a>
            <!-- <button type="submit" class="bg-[#ffffff] hover:bg-[#819381] text-[#527853] font-bold py-2 px-4 rounded">
                Login
            </button> -->
        </div>
