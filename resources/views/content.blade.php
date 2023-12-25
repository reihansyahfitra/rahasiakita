<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RahasiaKita | Konten</title>
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
            background: url("{{ asset('svg/subtle-prism.svg') }}");
            background-repeat: no-repeat;
            background-size: contain;
        }
        .title-select {
            color: #00ADB5;
            transition: 0.2s;
        }
        .title-select:hover {
            transition: 0.2s;
            filter: brightness(75%);
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
    </nav>
    <div class="container">
        <br>
        <div class="row">
            @foreach ($contents as $content)
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex my-4">
                        <div style="background-color: #222831;" class="card shadow align-items-center rounded-3">
                            @php
                                $source = $content->thumbnail_source;
                            @endphp
                            <img src="{{ asset($source) }}" class="card-img-top img-fluid" alt="Thumbnail">
                            <div class="card-body rounded-3" style="background-color: #EEEEEE;">
                                <a href="/contents/info/{{ $content->id }}" class="card-title h5 text-decoration-none title-select">{{ $content->content_name }}</a>
                                <p class="card-text">
                                    {{ $content->overview_desc }}
                                </p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div><br><br>
        <div class="row text-end border-top">
            <p>Copyright ©2023 Design By ITUM-3</p>
        </div>
    </div>
</body>

</html>