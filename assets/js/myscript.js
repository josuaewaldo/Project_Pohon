// tombol daftar
$('.tombol-daftar-login').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: "Apakah anda yakin ingin mendaftar?",
        text: "Informasi volunteer selanjutnya akan kami email pribadi",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#527853",
        cancelButtonColor: "#E1AD01",
        confirmButtonText: "Daftar Sekarang"
      }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "Selamat",
                text: "Anda berhasil mendaftar menjadi volunteer",
                icon: "success",
                confirmButtonColor: "#527853"
            }).then(() => {
                document.location.href = href;
            });
        }
      });
})

$('.tombol-daftar-noLogin').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: "Maaf yaa",
        text: "Kamu harus login dulu untuk mendaftar",
        icon: "info",
        confirmButtonColor: "#527853",
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
    });
});
