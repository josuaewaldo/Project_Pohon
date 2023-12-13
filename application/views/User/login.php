<!-- Login -->
<div class="my-[118px] mx-auto max-w-xl">
    <form action=""
        class="bg-yellow-50 shadow-xl shadow-green-800/50 rounded-bl-3xl rounded-tr-3xl px-8 pt-6 pb-8 mb-4">
        <h1 class="text-2xl font-bold mb-6 text-[#527853] text-center">Login Page</h1>
        <div class="mb-4">
            <label class="block text-[#527853] text-sm font-bold mb-2" for="email">
                Alamat Email
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="email" type="email" placeholder="Alamat Email" required>
        </div>
        <div class="mb-4">
            <label class="block text-[#527853] text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="password" type="password" placeholder="Password" required>
        </div>
        <h3 class="text-center">Belum Punya Akun?<a href="<?= base_url('User/registrasi'); ?>" class="text-green-800 underline">Registrasi
                Disini</a></h3>
        <div class="mt-6 flex items-center justify-center">
            <button
                class="bg-[#527853] hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="button">
                Login
            </button>
        </div>
    </form>
</div>