<!--Overlay-->
<div class="bg-cover mx-12 my-5 m-auto max-w-9xl bg-no-repeat h-[600px] 
        relative rounded-md" style="background-image: url('<?php echo base_url("assets/img/"); ?>2.jpg');">
    <div class="absolute inset-0 bg-black opacity-50 rounded-md shadow-black shadow-md"></div>
    <div class="flex-col">
        <div class="absolute inset-0 flex items-center justify-center text-white text-5xl font-bold">
            Welcome to <div class="ml-2 text-yellow-100">Volun<span class="text-yellow-500">T</span>rees</div>
        </div>
        <div class="absolute mt-24 inset-0 flex items-center justify-center text-white text-3xl font-semibold">
            "Bersama sama Menjaga Hutan"
        </div>

    </div>
</div>

<!-- Penghijauan Voluntrees -->
<div class="py-20 m-auto">
    <h1 class="font-semibold text-center text-yellow-50 text-[48px] font-poppins">Penghijauan Voluntrees</h1>
    <div class="flex items-center text-center justify-center space-x-28 mt-20 text-7xl text-yellow-50 font-poppins">
        <div>
            <div class="text-yellow-900">
                <?php
                if ($total_donasi < 1000000) {
                    echo 'Rp ' . number_format($total_donasi, 0, ',', '.') . ' rb';
                } else {
                    echo 'Rp ' . number_format($total_donasi / 1000000, 3, ',', '.') . ' jt';
                }
                ?>
            </div>
            <p class="text-3xl py-8">donasi terkumpul</p>
        </div>
        <div>
            <div class="text-yellow-900">
                <?php
                if ($pohon_tertanam >= 1000) {
                    echo number_format($pohon_tertanam, 0, ',', '.') . ' k';
                } else {
                    echo number_format($pohon_tertanam, 0, ',', '.');
                }
                ?>
            </div>
            <p class="text-3xl py-8">Total Pohon Akan Tertanam</p>
        </div>
        <div>
            <div class="text-yellow-900"><?= $total_event ;?></div>
            <p class="text-3xl py-8">Event Terselesaikan</p>
        </div>
    </div>
</div>

<!-- Donasi -->
<div class="py-20 m-auto">
    <h1 class="font-semibold text-center text-yellow-50 text-[48px] font-poppins">Target Donasi</h1>
    <div class="-mb-14 flex justify-end mt-12 mr-28">
        <button type="submit"
            class="bg-white hover:bg-[#d4d4d4] text-[#496b4a] font-semibold font-poppins py-2 px-4 rounded">
            Lihat Selengkapnya
        </button>
    </div>
    <div class="flex justify-center mt-16">
        <?php foreach (array_slice($donasi, 0, 4) as $donasi_item): ?>
            <div class="p-4 m-8 w-80 bg-white shadow-md rounded-xl">
                <picture class="rounded-lg block overflow-hidden">
                    <img class="w-full h-40 object-cover hover:scale-125 ease-in duration-150"
                        src="<?= base_url('assets/img/') . $donasi_item['gambar']; ?>"
                        alt="<?= $donasi_item['nama_donasi']; ?>" />
                </picture>
                <h1 class="mt-4 mb-2 text-xl font-bold">
                    <?= $donasi_item['nama_donasi']; ?>
                </h1>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-2 dark:bg-gray-700">
                    <div class="bg-yellow-400 h-2.5 rounded-full dark:bg-gray-300"
                        style="width: <?= ($donasi_item['total_donasi'] / $donasi_item['batas_donasi']) * 100; ?>%"></div>
                </div>
                <div class="flex justify-between items-center mb-4">
                    <span class="text-sm">Rp.
                        <?= number_format($donasi_item['total_donasi']); ?>
                    </span>
                    <span class="text-sm">terkumpul dari Rp.
                        <?= number_format($donasi_item['batas_donasi']); ?>
                    </span>
                </div>
                <a href="<?= base_url('Donation?id_donasi=' . $donasi_item['id_donasi']) ?>"
                    class="bg-[#527853] hover:bg-[#496b4a] text-white font-semibold font-poppins py-2 px-4 rounded">Donasi
                    Sekarang</a>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<!-- Event-->
<div class="py-20 m-auto pb-40">
    <h1 class="font-semibold text-center text-yellow-50 text-[48px] font-poppins">Event Voluntrees</h1>
    <div class="-mb-14 flex justify-end mt-12 mr-28">
        <button type="submit"
            class="bg-white hover:bg-[#d4d4d4] text-[#496b4a] font-semibold font-poppins py-2 px-4 rounded">
            Lihat Selengkapnya
        </button>
    </div>
    <div class="flex justify-center mt-16">
        <?php foreach (array_slice($event, 0, 4) as $event_item): ?>
            <div class="p-4 m-8 w-80 bg-white shadow-md rounded-xl">
                <picture class="rounded-lg block overflow-hidden">
                    <img class="w-full h-40 object-cover hover:scale-125 ease-in duration-150"
                        src="<?= base_url('assets/img/') . $event_item['gambar']; ?>"
                        alt="<?= $event_item['nama_event']; ?>" />
                </picture>
                <h1 class="mt-4 mb-2 text-xl font-bold">
                    <?= $event_item['nama_event']; ?>
                </h1>
                <div class="text-[12px] mb-5 font-poppins text-gray-500"><span class="font-material">&#128197; </span><?= $event_item['tanggal_mulai'] . ' HINGGA ' . $event_item['tanggal_selesai'];?></div>
                <?php if ($this->session->userdata('email')): ?>
                    <a href="<?= base_url('Volunteer?id_event=' . $event_item['id_event']) ?>"
                        class="bg-[#527853] hover:bg-[#496b4a] text-white font-semibold font-poppins py-2 px-4 rounded tombol-daftar-login">Daftar
                        Sekarang</a>
                <?php else: ?>
                    <a href="<?= base_url('Auth') ?>"
                        class="bg-[#527853] hover:bg-[#496b4a] text-white font-semibold font-poppins py-2 px-4 rounded tombol-daftar-noLogin">Daftar
                        Sekarang</a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>