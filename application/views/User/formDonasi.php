<!-- form Donasi -->
<div class="my-[118px] mx-auto max-w-4xl">
    <form action=""  method="POST"
        class="bg-yellow-50 shadow-xl shadow-green-800/50 rounded-bl-3xl rounded-tr-3xl px-8 pt-6 pb-8 mb-4 grid grid-cols-1 md:grid-cols-2 gap-8"
        >
        <!-- Bagian Pengisian Informasi -->
        <div>
            <h1 class="text-2xl font-bold mb-6 text-[#527853] text-center">Donasi Voluntrees</h1>
            <div class="mb-4">
                <label class="block text-[#527853] text-sm font-bold mb-2" for="namaLengkap">Nama Lengkap</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="namaLengkap" type="text" placeholder="Nama Lengkap" value="<?= set_value('nama_lengkap');?>" required>
                    <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="mb-4">
                <label class="block text-[#527853] text-sm font-bold mb-2" for="email">Alamat Email</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" placeholder="Alamat Email" value="<?= set_value('email');?>" required>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="mb-4">
                <label class="block text-[#527853] text-sm font-bold mb-2" for="noHp">No HP</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="noHp" type="text" placeholder="No HP" value="<?= set_value('no_hp');?>" required>
                    <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="mb-4">
                <label class="block text-[#527853] text-sm font-medium italic mb-2" for="nominalDonasi">Isi Nominal
                    Donasi (1 bibit = Rp.10.000)</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="nominalDonasi" type="text" placeholder="Rp." value="<?= set_value('nominal');?>" required>
                    <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
            <div>
                
            </div>
                    
            </div>
            <div class="mt-6 flex items-center justify-center">
                <button
                    class="bg-[#527853] hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit"
                    name="tambah"
                    >
                    Submit Donasi
                </button>
            </div>
        </div>

        <!-- Bagian Upload Bukti Pembayaran -->
        <div>
            <h1 class="text-2xl font-bold mb-6 text-[#527853] text-center">Upload Bukti Pembayaran</h1>
            <div class="mb-4">
                <label class="block text-[#527853] text-sm font-bold mb-2" for="uploadBukti">Upload Gambar Bukti
                    Pembayaran</label>
                <input type="file" id="uploadBukti" name="uploadBukti" accept="image/*"
                    class="border-2 border-neutral-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </div>
    </form>
</div>