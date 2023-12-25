<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RahasiaKita | Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style>
        .container-fluid {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        body {
            font-family: 'Poppins', sans-serif;
        }
        .main-bg{
            background-image: url("{{ asset('svg/endless-constellation.svg') }}");
            box-shadow: inset -580px 0 100px 0 #393E46;
        }
        .btn {
            min-width: 200px;
        }
    </style>
</head>
<body style="background-color: #393E46; color: #EEEEEE;">
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container-fluid p-0" style="background-color: #222831;">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="RahasiaKita" width="150" class="ms-3 img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="container-sm">
        <br>
        <div class="row main-bg border border-secondary rounded-3">
            <div class="col-md-6 col-sm-12 text-center">
                <br>
                <img class="img-fluid" src="{{ asset('svg/Cyber attack-amico.svg') }}" style="height: 250px" alt="Thumbnail">
            </div>
            <div class="col-md-6 col-sm-12">
                <br>
                <div class="row h2 px-2">
                    Pentingnya Privasi Setiap Orang di Era Digital
                </div>
                <div class="row px-2">
                Privasi adalah hak asasi manusia yang harus dihormati dan dilindungi. Namun, di era digital saat ini, privasi sering kali terancam. Privasi bukan hanya soal menjaga rahasia, tetapi juga soal mengendalikan informasi pribadi yang dapat mempengaruhi reputasi, keamanan, kesehatan, atau hak-hak lainnya.
                </div><br>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col text-center">
                <h2>Artikel</h2>
                <hr>
            </div>
        </div><br>
        <div class="row text-center">
            <div class="col border-end border-bottom">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-start">
                        <h4>Phishing & Penipuan</h4>
                        <p>Phishing adalah upaya untuk mendapatkan informasi pribadi atau keuangan dari korban dengan cara meniru identitas atau organisasi yang sah. Penipuan adalah upaya untuk menipu korban dengan menawarkan barang, jasa, atau kesempatan yang tidak nyata atau palsu.</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <img src="{{ asset('svg/phishing-account-animate.svg') }}" style="height: 250px" alt="Thumbnail"><br><br>
                    </div>
                </div>
            </div>
            <div class="col border-right border-bottom">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="{{ asset('svg/identitysteal.svg') }}" style="height: 250px" alt="Thumbnail">
                    </div>
                    <div class="col-md-6 col-sm-12 text-end">
                        <h4>Pencurian Identitas</h4>
                        <p>Di era digital saat ini, kita semua memiliki identitas online yang mencerminkan informasi pribadi kita, seperti nama, alamat, nomor telepon, email, dan informasi keuangan. Namun, identitas online kita juga rentan terhadap serangan dari para penjahat cyber yang mencari cara untuk mendapatkan keuntungan dari informasi tersebut.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col border-end border-top">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-start mt-5">
                        <h4>Orang Ketiga (MITM)</h4>
                            <p>Salah satu bentuk serangan cyber yang bertujuan untuk mengintip, memodifikasi, atau mengalihkan data yang dikirimkan antara dua pihak yang berkomunikasi. Dalam serangan ini, penyerang berperan sebagai orang ketiga yang menyusup ke dalam saluran komunikasi dan mengambil alih peran salah satu pihak.</p>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <img src="{{ asset('svg/mitm.svg') }}" style="height: 250px" alt="Thumbnail">
                    </div>
                </div>
            </div>
            <div class="col border-right border-top">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="{{ asset('svg/coding-animate.svg') }}" style="height: 250px" alt="Thumbnail">
                    </div>
                    <div class="col-md-6 col-sm-12 text-end mt-5">
                        <h4>Social Engineering</h4>
                        <p>
                            Social Engineering adalah teknik manipulasi yang menargetkan manusia sebagai rantai terlemah dalam sistem keamanan. Dengan memanfaatkan kesalahan, ketidaktahuan, atau rasa percaya korban, penyerang dapat mengakses informasi pribadi, akses, atau harta berharga yang seharusnya dilindungi.
                        </p>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row text-center">
            <div class="col">
                <a href="/contents" class="btn btn-block shadow" style="background-color: #00ADB5; color: #EEEEEE;">Telusuri ></a>
            </div>
        </div><br><br>
        <div class="row text-center">
            <div class="col">
                <h2>Tim Kami</h2>
            </div>
        </div><br>
        <div class="row mx-4">
            <div class="col-md-4 col-sm-12">
                <div class="card shadow">
                    <img src="{{ asset('img/reihan.jpg') }}" class="card-img-top img-fluid" style="height: 400px;" alt="profile pictures">
                    <div class="card-body" style="background-color: #EEEEEE;">
                        <h5 class="card-title">Reihan Syahfitra Wirawan</h5>
                        <p class="card-text">
                            Bertanggung jawab sebagai pembuatan website dan pengumpulan data untuk konten.
                        </p>
                    </div>
                </div><br>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card shadow">
                    <img src="{{ asset('img/mahesh.jpeg') }}" class="card-img-top" style="height: 400px;" alt="profile pictures">
                    <div class="card-body" style="background-color: #EEEEEE;">
                        <h5 class="card-title">Mahesh Raga Nesta</h5>
                        <p class="card-text">
                            Bertanggung jawab dalam pembuatan proposal dan laporan akhir.
                        </p>
                    </div>
                </div><br>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card shadow">
                    <img src="{{ asset('img/lendra.jpeg') }}" class="card-img-top" style="height: 400px;" alt="profile pictures">
                    <div class="card-body" style="background-color: #EEEEEE;">
                        <h5 class="card-title">Lendra Ahmad Radistya</h5>
                        <p class="card-text">
                            Bertanggung jawab dalam pembuatan proposal dan laporan akhir.
                        </p>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row mx-4">
            <div class="col-md-4 col-sm-12">
                <div class="card shadow">
                    <img src="{{ asset('img/padil.jpg') }}" class="card-img-top img-fluid" style="height: 400px;" alt="profile pictures">
                    <div class="card-body" style="background-color: #EEEEEE;">
                        <h5 class="card-title">Fadhillah Maulana</h5>
                        <p class="card-text">
                            Bertanggung jawab dalam mengusulkan ide, penyuluhan serta membantu terbitnya website.
                        </p>
                    </div>
                </div><br>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card shadow">
                    <img src="{{ asset('img/ghazy.jpg') }}" class="card-img-top" style="height: 400px;" alt="profile pictures">
                    <div class="card-body" style="background-color: #EEEEEE;">
                        <h5 class="card-title">Ghazy Fathin Febozsa</h5>
                        <p class="card-text">
                            Bertanggung jawab dalam penyuluhan masyarakat.
                        </p>
                    </div>
                </div><br>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card shadow">
                    <img src="{{ asset('img/refand.jpeg') }}" class="card-img-top img-fluid" style="height: 400px;" alt="profile pictures">
                    <div class="card-body" style="background-color: #EEEEEE;">
                        <h5 class="card-title">Refand Kurniawan Wila Huky</h5>
                        <p class="card-text">
                            Bertanggung jawab dalam penyuluhan masyarakat.
                        </p>
                    </div>
                </div><br>
            </div>
        </div><br><br><br>
        <div class="row text-end border-top">
            <p>Copyright ©2023 Design By ITUM-3</p>
        </div>
    </div>
</body>

</html>