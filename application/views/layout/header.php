<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Project Pohon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins'],
                        material: ['Material Symbols Outlined']
                    }
                }
            }
        }
    </script>
</head>

<body>
    <div class="bg-[#527853] bg-gradient-to-r from-[#3f682d] to-[#7ccc48]">
        <!-- Navbar -->

        <div class="w-full h-24 py-12 flex items-center justify-between pl-12 pr-20">
            <div class="text-4xl font-bold text-yellow-100">
                Volun<span class="text-yellow-500">T</span>rees
            </div>
            <div class="font-poppins flex space-x-6 -mb-4">
                <a href="<?= base_url('General'); ?>"
                    class="text-yellow-100 text-[18px] font-medium hover:text-green-500 transition duration-200">Beranda</a>
                <a href="#"
                    class="text-yellow-100 text-[18px] font-medium hover:text-green-500 transition duration-200">News</a>
                <a href="#"
                    class="text-yellow-100 text-[18px] font-medium hover:text-green-500 transition duration-200">Edukasi</a>
                <a href="#"
                    class="text-yellow-100 text-[18px] font-medium hover:text-green-500 transition duration-200">Reward</a>
            </div>
            <?php if ($this->session->userdata('email')): ?>
                <!-- Jika pengguna sudah login -->
                <a href="<?= base_url('Auth/logout'); ?>"
                    class="bg-[#ffffff] hover:bg-[#819381] text-[#527853] font-poppins font-bold py-2 px-4 rounded">Logout</a>
            <?php else: ?>
                <!-- Jika pengguna belum login -->
                <a href="<?= base_url('Auth'); ?>"
                    class="bg-[#ffffff] hover:bg-[#819381] text-[#527853] font-poppins font-bold py-2 px-4 rounded">Login</a>
            <?php endif; ?>
        </div>