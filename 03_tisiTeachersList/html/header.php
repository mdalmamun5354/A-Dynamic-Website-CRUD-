<!DOCTYPE html>
<html lang="en">
<head>
    <title>TISI Teachers List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("img/bg.jpg");
            /* background-attachment: fixed; */
            background-size: 1000px;
        }
        .container {
            background-color: rgb(199, 255, 198, 0.7);
            width: 1100px;
            box-shadow: 0px 0px 50px green;
        }
        header {
            height: 100px;
            padding: 20px;
            background-color: rgb(23, 108, 244);
            box-shadow: 0px 0px 30px blue;
        }
        .logo > a > img {
            width: 70px;
        }
        .header_title > h2 {
            color: #fff;
        }
        .navbar {
            box-shadow: 0px 7px 30px blue;
        }
        button {
            color: white !important;
        }
        th > img {
            width: 140px;
            height: 145px;
        }
        tr {
            border: 2px dotted rgb(0, 0, 0, 0.4);
        }
        tr:hover {
            box-shadow: 0px 0px 20px black;
            transform: scale(1.03,1.02);
        }
        td {
            padding-top: 20px !important;
        }
        .footer {
            margin-top: 50px;
            box-shadow: 0px 0px 30px blue;
        }
        button > a {
            color: black;
            text-decoration: none;
        }
        button > a:hover {
            color: black;
        }
        .copy_right > p{
            text-align: center;
        }
        .divoloper h5 {
            font-family: Serif;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.php">
                    <img class="rounded float-start" src="img/logo.png" alt="">
                </a>
            </div>
            <div class="header_title">
                <h2>TMSS Institute Of Science And ICT(TISI)</h1>
            </div>
            <form class="d-flex" role="search">
                <button class="btn btn-primary text-light" type="submit">
                    <img src="img/log in.png" width="35px" alt="">
                    <br>
                Log In</button>
            </form>
        </header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success bg-success text-light" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>