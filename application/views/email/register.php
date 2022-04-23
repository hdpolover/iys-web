<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?= site_url()?>assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

    <!-- CSS Front Template -->
    <!-- <link rel="stylesheet" href="<?= site_url()?>assets/css/theme.min.css"> -->
    <style>
        ::after,
        ::before {
            box-sizing: border-box;
        }
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-weight: 600;
            line-height: 1.2;
            color: #1e2022;
            font-family: Inter, sans-serif;
        }
        .h4,
        h4 {
            font-size: 1.125rem;
        }
        p{
            font-family: Inter, sans-serif;
            font-size: 1rem;
            color: #677788;
            font-weight: 400;
            line-height: 1.5;
        }
        a {
            color: #377dff;
            text-decoration: none;
            font-family: Inter, sans-serif;
        }
        a:hover {
            color: #1366ff;
        }
        .small,
        small {
            font-size: 0.875em;
            font-family: Inter, sans-serif;
            color: #677788;
            font-weight: 400;
            line-height: 1.5;
        }
        .mb-0 {
            margin-bottom: 0 !important;
        }
        .mb-1 {
            margin-bottom: 0.25rem !important;
        }
        .mb-2 {
            margin-bottom: 0.5rem !important;
        }
        .mb-3 {
            margin-bottom: 1rem !important;
        }
        .mb-4 {
            margin-bottom: 1.5rem !important;
        }
        .mb-5 {
            margin-bottom: 2rem !important;
        }
        .mb-6 {
            margin-bottom: 2.5rem !important;
        }
        .mb-7 {
            margin-bottom: 3rem !important;
        }
        .mb-8 {
            margin-bottom: 3.5rem !important;
        }
        .mb-9 {
            margin-bottom: 4rem !important;
        }
        .mb-10 {
            margin-bottom: 4.5rem !important;
        }
        .mb-auto {
            margin-bottom: auto !important;
        }
        .mb-2{
            margin-bottom: 0.5rem!important;
        }
        .card {
            background: #fff;
            border-width: 0;
            box-shadow: 0 0.375rem 1.5rem 0 rgba(140, 152, 164, 0.125);
            border-radius: 0.5rem !important;
        }
        .navbar-brand-logo {
            width: 100%;
            min-width: 7.5rem;
            max-width: 7.5rem;
        }
        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 2rem 2rem;
        }
        .text-primary {
            opacity: 1;
            color: #377dff !important;
        }
        .text-highlight-warning {
            background: left 1em/1em 0.2em;
            background-repeat: repeat-x;
            background-image: linear-gradient(to bottom, rgba(245, 202, 153, 0.5), rgba(245, 202, 153, 0.5));
        }
        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(var(--bs-gutter-y) * -1);
            margin-right: calc(var(--bs-gutter-x) * -0.5);
            margin-left: calc(var(--bs-gutter-x) * -0.5);
        }
        .row>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * 0.5);
            padding-left: calc(var(--bs-gutter-x) * 0.5);
            margin-top: var(--bs-gutter-y);
        }
        .col {
            flex: 1 0 0%;
        }
        .col-md-3 {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }
        .col-md-6 {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }
        .btn{
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            color: #677788;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 0.0625rem solid transparent;
            padding: 0.6125rem 1rem;
            font-size: 1rem;
            border-radius: 0.3125rem;
            transition: all 0.2s ease-in-out;
        }
        .btn-soft-primary{
            color: #377dff;
            background-color: rgba(55, 125, 255, 0.1);
            border-color: transparent;
        }
        .btn-soft-primary:hover {
            color: #fff;
            background-color: #377dff;
        }
    </style>
</head>
<body style="background: #f2f2f2;padding-top: 50px;padding-bottom: 50px;">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-4">Welcome to <span class="text-primary text-highlight-warning">Istanbul Youth Summit</span>.</h2>
                    <p class="mb-2">
                        Hi <?= $name?>,
                    </p>
                    <p class="mb-4">We're happy you signed up for IYS. To start exploring the IYS App please confirm your email address.</p>
                    <?php
                        $token_regis = str_replace('/', '_', $token_regis);
                        $token_regis = str_replace('+', '--', $token_regis);
                    ?>  
                    <a href="<?= site_url('verif-email/'.$token_regis)?>" class="btn btn-soft-primary mb-6">Verify Now</a>
                    <br>
                    <small>
                        Did you receive this email without signing up? <a href="#">Click here.</a> This verification link will expire in 24 hours
                    </small>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</body>
</html>