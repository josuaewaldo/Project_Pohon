<!-- Login -->
<div class="my-16 mt-7 mx-auto max-w-xl">
    <form action=""
        class="bg-yellow-50 shadow-xl shadow-green-800/50 rounded-bl-3xl rounded-tr-3xl px-8 pt-6 pb-8 mb-4">
        <h1 class="text-2xl font-bold mb-6 text-[#527853] text-center">Registration Page</h1>
        <div class="mb-4">
            <label class="block text-[#527853] text-sm font-bold mb-2" for="namaLengkap">
                Nama Lengkap
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="text" type="text" placeholder="Nama Lengkap" value="<?= set_value('namaLengkap'); ?>" required>
                <?= form_error('namaLengkap', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="mb-4">
            <label class="block text-[#527853] text-sm font-bold mb-2" for="email">
                Alamat Email
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="email" type="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>" required>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="mb-4">
            <label class="block text-[#527853] text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="password" type="password" placeholder="Password" value="<?= set_value('password'); ?>" required>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

        </div>
        <div class="mb-4 grid grid-cols-4">
            <h3 class="block text-[#527853] text-sm font-bold mb-2 self-center" for="gender">Gender</h3>
            <select name="gender" id="gender"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-[#527853] text-sm font-bold mb-2" for="asalKota">
                Asal Kota
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="asalKota" type="text" placeholder="Asal Kota" value="<?= set_value('asalKota'); ?>" required>
                <?= form_error('asalKota', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="mb-4">
            <label class="block text-[#527853] text-sm font-bold mb-2" for="tanggalLahir">
                Tanggal Lahir
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="tanggalLahir" type="date" placeholder="Tanggal Lahir" value="<?= set_value('tanggalLahir'); ?>" required>
                <?= form_error('tanggalLahir', '<small class="text-danger pl-3">', '</small>'); ?>

        </div>
        <h3 class="text-center">Sudah Punya Akun?<a href="#" class="text-green-800 underline">Login Disini</a></h3>
        <div class="mt-6 flex items-center justify-center">
            <button
                class="bg-[#527853] hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="button">
                Registrasi
            </button>
        </div>
    </form>
</div>