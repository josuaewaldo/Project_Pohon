       <!-- footer -->
       <div
            class="w-full h-32 py-12 flex m-auto justify-center items-center text-white text-sm font-semibold bg-[#293a29]">
            <span class="text-white font-bold text-sm pr-2">Kelompok 3 BPF</span>"Sistem Penanaman Seribu Pohon"
        </div>
    </div>
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/myscript.js"></script>
</body>


</html>