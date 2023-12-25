<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RahasiaKita | {{ $contents->content_name }}</title>
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
        .content-bg{
            background-image: url("{{ asset('svg/subtle-prism.svg') }}");
            background-repeat: no-repeat;
            background-size: contain;
        }
        .form-control::-webkit-input-placeholder {
            color: #EEEEEE;
        }
        #content-buttons {
            background: rgba(0,0,0,0);
            border: none;
            -webkit-transition: .5s all;   
            -webkit-transition-delay: 0s; 
            -moz-transition: .5s all;   
            -moz-transition-delay: 0s; 
            -ms-transition: .5s all;   
            -ms-transition-delay: 0s; 
            -o-transition: .5s all;   
            -o-transition-delay: 0s; 
            transition: .5s all;   
            transition-delay: 0s; 
        }
        #content-buttons:hover {
            background: rgba(0,0,0,0.3);
            -webkit-transition-delay: 0s;
            -moz-transition-delay: 0s;
            -ms-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
        }
    </style>
</head>

<body class="content-bg" style="background-color: #393E46; color: #EEEEEE;">
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container-fluid p-0" style="background-color: #222831; box-shadow: 0 0 5px 10px #222831">
            <a class="navbar-brand" style="color: #EEEEEE" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="RahasiaKita" width="150" class="ms-3 img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 mb-3">
                <div class="card bg-dark border-0 rounded-4 p-3 h-100" style="--bs-bg-opacity: .5; color: #EEEEEE;">
                    <h5 class="text-center">Artikel Lain</h5>
                    <hr>
                    @foreach ($content_names as $content_name)
                    <div class="list-group text-center">
                        <a type="button" id="content-buttons" class=" rounded-0 list-group-item list-group-item-dark list-group-item-action" href="/contents/info/{{ $content_name->id }}" style="color: #EEEEEE;">{{ $content_name->content_name }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="card bg-dark border-0 rounded-4 p-3 h-100" style="--bs-bg-opacity: .5; color: #EEEEEE;">
                    <div class="row">
                        <h2 class="text-center">
                            {{ $contents->content_name }}
                        </h2>
                    </div><br>
                    <div class="row justify-content-center mx-3">
                        <img src="{{ asset($contents->thumbnail_source) }}" style="width:200px" class="img-fluid" alt="Thumbnail">
                        <p>
                            <br>
                            {!! $contents->full_desc !!}
                        </p>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="card bg-dark border-0 rounded-4 p-3 h-100" style="--bs-bg-opacity: .5; color: #EEEEEE;">
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <div class="lead">Kumpulan Opini</div>
                        <hr>
                    </div>
                </div>
                <form action="/posting/{{ $contents->id }}" method="post">
                    @csrf
                    <input type="text" class="form-control bg-dark" style="color: #EEEEEE;" name="nama" placeholder="Masukkan nama anda !"><br>
                    <input type="text" class="form-control bg-dark" style="color: #EEEEEE;" name="pekerjaan" placeholder="Masukkan pekerjaan anda !"><br>
                    <input type="text" class="form-control bg-dark" style="color: #EEEEEE;" name="posting" placeholder="Apa yang kamu pikirkan tentang artikel ini ?"><br>
                    <button type="submit" class="btn btn-block" style="background-color: #00ADB5; color: #EEEEEE; ">Kirim</button>
                </form>
                <!-- disini postingan orang-orang yang terkonek oleh database (Create dan Read) -->
                <hr>
                @foreach($komentators as $komentator)
                    @if ($komentator->id_content == $contents->id)
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <div class="card bg-dark text-light">
                                    <div class="card-body">
                                        <div class="d-flex flex-start align-items-center">
                                            <img class="rounded-circle shadow me-3" src="{{ asset('svg/blankuser.svg') }}" alt="User" width="50" height="50">
                                            <div>
                                                <h6 class="fw-bold mb-1">{{ $komentator->name }}</h6>
                                                <p class="text-light small mb-0">
                                                    {{ $komentator->job }} || {{ $komentator->post_created }}
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="mt-3 mb-4  pb-2">
                                            {{ $komentator->comments }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    @endif
                @endforeach
            </div>
        </div><br>
        <div class="row text-end border-top">
            <p>Copyright ©2023 Design By ITUM-3</p>
        </div>
    </div>
</body>

</html>