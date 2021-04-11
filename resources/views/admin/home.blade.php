<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PETSHOP | Admin</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <script src="assets/shop/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/shop/js/bootstrap.bundle.min.js" type="text/javascript"></script>

</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="{{ route('admin-home') }}">
            Petshop
            </br>
            {{ Auth::user()->name }}
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Integrations
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            12/04/2021
                        </button>
                    </div>
                </div>

                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

                <h2>Agenda Banho | Tosa</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Animal</th>
                                <th>Dono(a)</th>
                                <th>Raça</th>
                                <th>Data | Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Negresco</td>
                                <td>Katia</td>
                                <td>SRD</td>
                                <td>12/04/2021 09:00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Choquito</td>
                                <td>Katia</td>
                                <td>SRD</td>
                                <td>12/04/2021 09:30</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Vitoria</td>
                                <td>Katia</td>
                                <td>SRD</td>
                                <td>12/04/2021 10:00</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pedrita</td>
                                <td>Katia</td>
                                <td>SRD</td>
                                <td>12/04/2021 10:30</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Pepe</td>
                                <td>Katia</td>
                                <td>SRD</td>
                                <td>12/04/2021 11:00</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Nhan</td>
                                <td>Katia</td>
                                <td>SRD</td>
                                <td>12/04/2021 11:30</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Cuca</td>
                                <td>Katia</td>
                                <td>SRD</td>
                                <td>12/04/2021 12:00</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Chiquinho</td>
                                <td>Katia</td>
                                <td>SRD</td>
                                <td>12/04/2021 12:30</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Thor</td>
                                <td>Katia</td>
                                <td>SRD</td>
                                <td>12/04/2021 13:00</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Kaka</td>
                                <td>Katia</td>
                                <td>SRD</td>
                                <td>12/04/2021 13:30</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <div class="main">
        <div class="container">
            <center>
            </center>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>