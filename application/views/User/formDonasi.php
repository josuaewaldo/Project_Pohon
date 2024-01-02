<!-- form Donasi -->
<div class="my-[118px] mx-auto max-w-4xl">
<<<<<<< Updated upstream
    <form action=""
        class="bg-yellow-50 shadow-xl shadow-green-800/50 rounded-bl-3xl rounded-tr-3xl px-8 pt-6 pb-8 mb-4 grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Bagian Pengisian Informasi -->
=======
    <form action="<?= base_url('Donation/tambah'); ?>" method="POST" enctype="multipart/form-data"
        class="bg-yellow-50 shadow-xl shadow-green-800/50 rounded-bl-3xl rounded-tr-3xl px-8 pt-6 pb-8 mb-4 grid grid-cols-1 md:grid-cols-2 gap-8">
>>>>>>> Stashed changes
        <div>
            <h1 class="text-2xl font-bold mb-6 text-[#527853] text-center">Donasi Voluntrees</h1>
            <input type="hidden" name="id_donasi" value="<?php echo $this->session->userdata('id_donasi'); ?>">
            <div class="mb-4">
                <label class="block text-[#527853] text-sm font-bold mb-2" for="namaLengkap">Nama Lengkap</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
<<<<<<< Updated upstream
                    id="namaLengkap" type="text" placeholder="Nama Lengkap" required>
=======
                    id="namaLengkap" type="text" name="nama_donatur" placeholder="Nama Lengkap" value="<?= set_value('nama_lengkap'); ?>"
                    required>
                <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
>>>>>>> Stashed changes
            </div>
            <div class="mb-4">
                <label class="block text-[#527853] text-sm font-bold mb-2" for="email">Alamat Email</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
<<<<<<< Updated upstream
                    id="email" type="email" placeholder="Alamat Email" required>
=======
                    id="email" type="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>" required>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
>>>>>>> Stashed changes
            </div>
            <div class="mb-4">
                <label class="block text-[#527853] text-sm font-bold mb-2" for="noHp">No HP</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
<<<<<<< Updated upstream
                    id="noHp" type="text" placeholder="No HP" required>
=======
                    id="noHp" type="text" name="no_hp" placeholder="No HP" value="<?= set_value('no_hp'); ?>" required>
                <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
>>>>>>> Stashed changes
            </div>
            <div class="mb-4">
                <label class="block text-[#527853] text-sm font-medium italic mb-2" for="nominalDonasi">Isi Nominal
                    Donasi (1 bibit = Rp.10.000)</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
<<<<<<< Updated upstream
                    id="nominalDonasi" type="text" placeholder="Rp." required>
=======
                    id="nominalDonasi" type="text" name="nominal" placeholder="Rp." value="<?= set_value('nominal'); ?>" required>
                <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
>>>>>>> Stashed changes
            </div>
            <div class="mt-6 flex items-center justify-center">
                <button
                    class="bg-[#527853] hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
<<<<<<< Updated upstream
                    type="button">
=======
                    type="submit" name="tambah">
>>>>>>> Stashed changes
                    Submit Donasi
                </button>
            </div>
        </div>

        <!-- form uplaod bukti -->
        <div>
            <h1 class="text-2xl font-bold mb-6 text-[#527853] text-center">Upload Bukti Pembayaran</h1>
            <div class="mb-4 custom-file">
                <label class="custom-file-label block text-[#527853] text-sm font-bold mb-2" for="bukti_pembayaran">Upload Gambar Bukti
                    Pembayaran</label>
                <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" accept="image/*"
                    class="custom-file-input border-2 border-neutral-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </div>
    </form>
</div>