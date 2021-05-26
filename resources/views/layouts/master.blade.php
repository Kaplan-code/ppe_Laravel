<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kubilay">

    <title>🧪GSB</title>
    <script src="js/bootstrap.js"></script>
    <script src="js/app.js" defer></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">

    <!-- Scripts -->



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <script type="text/javascript" charset="UTF-8"></script>
    <link rel="stylesheet" crossorigin="anonymous"/>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/index.css" rel="stylesheet">


</head>
<body>

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="{{ route('enregistrement.index') }}">Enregistrement <span
                        class="badge badge-pill badge-dark">@if(Auth()->user() ) {{ DB::table('enregistrements')->where('user_id', Auth()->user()->id)->count() }}@endif</span></a>
            </div>
            <div class="col-4 text-center">

                <a class="blog-header-logo text-dark" href="{{ route('products.index') }}">💊GSB</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                @include('partials.search')
                @include('partials.auth')

            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            @foreach(\App\Models\categories::all() as $categorie)
            <a class="p-2 link-secondary" href="{{ route('products.index', ['categorie' => $categorie->slug]) }}">{{ $categorie->nom }}</a>

            @endforeach
        </nav>
    </div>


    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
@endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul class="mb-0 mt-0">
                    <li> Veuillez entrer au moins 2 caractères</li>
            </ul>
        </div>
    @endif


    @if(request()->input('q'))
        <h6>{{ $medicaments->total() }} résultat(s) pour la recherche "{{ request()->q }}"</h6>
    @endif
    <div class="row mb-2">
        @yield('content')
    </div>
</div>


<footer class="blog-footer">
    <p><a href="">Kaplan</a> Application GSB💊</p>
    <p>

        <a href="#">Revenir en haut</a>
    </p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
