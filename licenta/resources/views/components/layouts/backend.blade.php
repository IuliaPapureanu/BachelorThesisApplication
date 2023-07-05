{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <x-backend.partials.head />--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">--}}
{{--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>--}}

{{--    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<x-backend.header />--}}

<x-app-layout>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
{{--            <div class="col-lg-1 bg-secondary">--}}
{{--                <!-- Sidebar content goes here -->--}}
{{--                    <x-backend.sidebar />--}}
{{--            </div>--}}

            <div class="col-lg-11">
                <!-- Main content goes here -->
                <div class="content-wrapper">
                    {{--        <x-global.alert />--}}
                    {{ $slot }}
                    {{--        <x-backend.footer />--}}
                </div>
            </div>
        </div>

    </div>
</div>
</x-app-layout>
{{--</body>--}}
{{--</html>--}}
