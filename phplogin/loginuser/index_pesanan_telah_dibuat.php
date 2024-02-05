<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Login Successfull!!!</h1>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Krona+One:wght@400&display=swap" />

    <style>

        @media only screen and (max-width: 600px) {
        /* Styles untuk perangkat dengan lebar maksimal 600px */
        body {
        background-size: cover; /* Atur background size agar menutupi layar */
        /* Tambahkan penyesuaian gaya lainnya */
        }
        }

        body {
            position: relative;
            background-image: url('https://i.ibb.co/mJL7ZM9/travel-06.jpg');
            /* background-image: url('https://stsci-opo.org/STScI-01H5308GYAN46P3HX4PQ20HP31.png'); */
            background-size: 2550px 1685px;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            /* overflow-x: visible; */
            overflow-x: hidden; /* Tambahkan ini untuk menghilangkan scroll horizontal */
        }

        .card-container {
            position: fixed;
            left: 0;
            top: 0;
            height: 930px;
            width: 133px;
            z-index: -2;
        }

        .card {
            width: 100%;
            height: 930px;
            background-color: #3887BE;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .second-card {
            position: absolute;
            width: 1500px;
            height: 43px;
            z-index: -1;
            background-color: #143F6B;
        }

        .status-text {
            position: relative;
            font-size: 17px;
            color: white;
            margin-left: 20px;
            top: 27%; /* Sesuaikan nilai top sesuai kebutuhan (dalam persentase) */
            z-index: 5;
            width: 100%;
        }

        .status-text::before {
            position: absolute;
            content: "";
            top: -13px;
            left: -100px;
            width: 250px; /* Lebar background di sebelah kiri tulisan */
            height: 43px; /* Tinggi background di sebelah kiri tulisan */
            background-color: #143F6B; /* Warna background */
            z-index: -1;
        }

        #statusDepotData {
            position: relative;
            color: white;
            height: 100%;
            width: 100%;
            margin-left: 35%;
            margin-top: -0.5em;
            animation: slideFromRight 21s linear infinite;
            transform: translateX(100%);
        }

        @keyframes slideFromRight {
            from {
            transform: translateX(100%);
            }

            to {
            transform: translateX(-90%);
            }
        }

        ul {
            list-style-type: none;
            margin: 55px 0 0 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            z-index: 5;
        }

        li span.material-symbols-outlined {
            font-size: 80px;
            color: #FEB139;
        }

        li {
            margin-inline-start: 35%;
            margin-top: -5%;
            margin-bottom: 21px;
            text-align: center;
            font-weight: bold;
            color: #FEB139;
        }

        #daftarAirGalon {
            width: 100%;
            height: 100%;
            position: relative;
        }

        #daftarAirGalon button {
            position: absolute;
            cursor: pointer;
            background-color: #143F6B;
            max-width: 100%; /* Mengganti width: 100% */
            width: 263px; /* Mengganti width: 263px */
            height: 45px; /* Mengganti width: 100% menjadi height: 45px */
            margin-top: 40px;
            margin-left: 77px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: bold;
            font-size: 18px;
            font-family: 'Krona One', sans-serif;
            transition: background-color 0.1s, color 0.1s;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5), 0 5px 5px #d3d3d3; /* Tambahkan efek cahaya di pinggiran */
        }

        /* Menambahkan style untuk tombol ketika dihover */
        #daftarAirGalon button:hover {
            background-color: white;
            color: black;
        }

        /* Menambahkan style untuk tombol ketika diklik (active state) */
        #daftarAirGalon button:active {
            background-color: white;
            color: black;
        }
        
        .white-card-container {
            position: absolute;
            margin-top: 125px;
            margin-left: 157px;
        }

        .white-card {
            position: relative;
            justify-content: center;
            display: flex;
            width: 100%;
            width: 692px;
            height: 447px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border: 1.5px solid black;
        }

        .button-container {
            position: relative;
            display: flex;
            justify-content: space-between; /* Menambahkan space-between antara button */
            width: 100%;
            margin-top: 21px;
        }

        .custom-button {
            width: 124px;
            height: 33px;
            background-color: #143F6B;
            color: #FFF;
            padding: 10px;
            margin-right: 50px; /* Menambahkan jarak antara button */
            margin-left: 30px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.1s, color 0.1s;
            font-family: 'Krona One', sans-serif;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5), 0 5px 5px #d3d3d3; /* Tambahkan efek cahaya di pinggiran */
        }

        .custom-button:last-child {
            margin-right: 30px; /* Menghapus margin-right pada button terakhir */
        }

        .custom-button:hover {
            background-color: #FFF;
            color: #000;
            border: 1.5px solid black;
        }

        .custom-button-unik {
            width: 124px;
            height: 33px;
            background-color: #000;
            color: #FFF;
            padding: 10px;
            margin-right: 50px; /* Menambahkan jarak antara button */
            margin-left: 30px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.1s, color 0.1s;
            font-family: 'Krona One', sans-serif;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5), 0 5px 5px #d3d3d3; /* Tambahkan efek cahaya di pinggiran */
        }

        .custom-button-unik:hover {
            background-color: #FFF;
            color: #000;
            border: 1.5px solid black;
        }

        .blue-card {
            position: absolute;
            width: 635px;
            height: 343px;
            background-color: #D1EBFE;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .card-title {
            font-size: 15px;
            margin-top: 15px;
            margin-left: 25px;
            color: black;
            font-family: 'Krona One', sans-serif;
        }

        .quantity-container,
        .total-container {
        margin-top: 50px;
        display: flex;
        align-items: center;
        }

        .label-jumlah {
            margin-left: 25px;
            color: black;
            margin-right: 145px;
            font-family: 'Krona One', sans-serif;
        }

        .label-total-harga {
            margin-left: 25px;
            color: black;
            margin-right: 95px;
            font-family: 'Krona One', sans-serif;
        }

        .quantity-input {
            width: 346px;
            height: 25px;
            border: 2px solid #000;
            transition: border 0.3s;
            padding-left: 5px; /* Tambahkan padding kiri */
        }

        /* Menyembunyikan elemen kontrol input number */
        /* .quantity-input::-webkit-inner-spin-button,
        .quantity-input::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        } */

        .total-input {
            width: 346px;
            height: 25px;
            padding-left: 5px; /* Tambahkan padding kiri */
            border: none;
        }

        .quantity-input:focus {
            border: 2px solid #143F6B; /* Atur border saat input mendapat fokus */
            outline: none; /* Hapus outline bawaan browser */
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.7), 0 5px 21px #fff; /* Tambahkan efek cahaya di pinggiran */
        }

        .total-input:focus {
            outline: none;
            box-shadow: none; /* Menghilangkan box-shadow saat input mendapat fokus */
        }

        .container-pesanan-telah-siap {
            position: relative;
            display: flex;
            justify-content: space-between; /* Menambahkan space-between antara button */
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-top: 255px;
        }

        .card-title-pesanan-telah-dibuat {
            font-size: 15px;
            justify-content: center;
            align-items: center;
            color: black;
            font-family: 'Krona One', sans-serif;
        }

        #statusPesanan {
            position: absolute; /* Menggunakan position relative pada kontainer */
        }

        #statusPesanan button {
            position: absolute; /* Menggunakan position absolute pada tombol */
            cursor: pointer;
            background-color: #0D4C92;
            color: white;
            font-weight: bold;
            font-size: 15px;
            width: 225px;
            height: 43px;
            margin-top: 39px;
            margin-left: 1013px;
            font-family: 'Krona One', sans-serif;
            border: none; /* Menghilangkan border */
            outline: none; /* Menghilangkan tampilan outline saat tombol ditekan */
            border-radius: 9px; /* Menambahkan border radius */
        }

        /* Menambahkan style untuk tombol ketika dihover */
        #statusPesanan button:hover {
            background-color: white;
            color: black;
        }

        /* Menambahkan style untuk tombol ketika diklik (active state) */
        #statusPesanan button:active {
            background-color: white;
            color: black;
        }

</style>

</head>

<body>

    <div class="card-container">
        <div class="card"></div>
    </div>

    <div class="second-card">
    <span class="status-text" id="statusDepotText">STATUS DEPOT :  </span>
    <div id="statusDepotData"></div>
    </div>

    <ul>
        <li><span class="material-symbols-outlined">account_circle</span><br>USER</br></li>
    </ul>

    <h2 id="daftarAirGalon" class="background-box"><button>DAFTAR AIR GALON</button></h2>

    <h2 id="statusPesanan" class="background-box">
        <button onclick="pindahKeStatusPesanan()">STATUS PESANAN</button>
    </h2>

    <div class="white-card-container">

        <div class="white-card">

            <div class="button-container">

            <button class="custom-button">Air Isi Ulang</button>
            <button class="custom-button">Sanford</button>
            <button class="custom-button">Bestari</button>

            </div>

            <div class="blue-card">

                <h3 class="card-title">Air Isi Ulang</h3>

                <div class="container-pesanan-telah-siap">

                    <h3 class="card-title-pesanan-telah-dibuat">Pesanan Telah Dibuat</h3>

                </div>

            </div>

        </div>

    </div>

    <script>

        function pindahKeStatusPesanan() {
                // Mengarahkan pengguna ke halaman "index_pesanan_telah_dibuat.php"
                window.location.href = "index_status_pesanan.php";
            }
        
        // Fungsi untuk mengambil data dari server dan memperbarui elemen HTML
        function updateStatusDepot() {
            // Menggunakan XMLHttpRequest untuk membuat permintaan HTTP
            var xhr = new XMLHttpRequest();

            // Mengatur metode, URL, dan mode asinkron
            xhr.open("GET", "ambil_catatan_status_depot.php", true);

            // Menangani perubahan status permintaan
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Parsing data JSON dari respons
                        var data = JSON.parse(xhr.responseText);

                        // Memperbarui elemen HTML dengan data yang diambil
                        document.getElementById("statusDepotData").innerHTML = data;
                    } else {
                        console.error("Gagal mengambil data. Kode status: " + xhr.status);
                    }
                }
            };

            // Mengirim permintaan
            xhr.send();
        }

        // Memanggil fungsi untuk pertama kali
        updateStatusDepot();

        // Memperbarui data setiap beberapa detik (misalnya, setiap 5000 milidetik)
        setInterval(updateStatusDepot, 5000);

        // Menambahkan event listener untuk menangani klik pada tombol DAFTAR AIR GALON
        document.getElementById('daftarAirGalon').addEventListener('click', handleDaftarAirGalonClick);

        function handleDaftarAirGalonClick() {
        // Tambahkan logika untuk berpindah ke formulir atau tindakan lainnya
        window.location.href = "index_welcome_user.php";

        // Tambahkan logika lain yang diperlukan
        }

    </script>

</body>

</html>
