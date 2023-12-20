<!-- Login -->
<div class="my-16 mt-7 mx-auto max-w-xl">
    <form method="POST" action="<?= base_url('User/registrasi'); ?>"
        class="bg-yellow-50 shadow-xl shadow-green-800/50 rounded-bl-3xl rounded-tr-3xl px-8 pt-6 pb-8 mb-4">
        <h1 class="text-2xl font-bold mb-6 text-[#527853] text-center">Registration Page</h1>
        <div class="mb-4">
            <label class="block text-[#527853] text-sm font-bold mb-2" for="namaLengkap">
                Nama Lengkap
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="text" name="nama_lengkap" type="text" placeholder="Nama Lengkap" required>
                <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="mb-4">
            <label class="block text-[#527853] text-sm font-bold mb-2" for="email">
                Alamat Email
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="email" name="email" type="email" placeholder="Alamat Email" required>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="mb-4">
            <label class="block text-[#527853] text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="password" name="password" type="password" placeholder="Password" required>
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="mb-4 grid grid-cols-4">
            <h3 class="block text-[#527853] text-sm font-bold mb-2 self-center" for="gender">Gender</h3>
            <select name="gender" id="gender"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <?= form_error('gender', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="mb-4">
            <label class="block text-[#527853] text-sm font-bold mb-2" for="asalKota">
                Asal Kota
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="asalKota" name="asal_kota" type="text" placeholder="Asal Kota" required>
                <?= form_error('asal_kota', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="mb-4">
            <label class="block text-[#527853] text-sm font-bold mb-2" for="tanggalLahir">
                Tanggal Lahir
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="tanggalLahir" name="tanggal_lahir" type="date" placeholder="Tanggal Lahir" required>
                <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <h3 class="text-center">Sudah Punya Akun?<a href="#" class="text-green-800 underline">Login Disini</a></h3>
        <div class="mt-6 flex items-center justify-center">
            <button
                class="bg-[#527853] hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                Registrasi
            </button>
        </div>
    </form>
</div>