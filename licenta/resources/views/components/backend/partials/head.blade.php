<x-global.icons />

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="NOINDEX, NOFOLLOW" />
<meta name="designer" content="Acid Art Studio" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900&subset=latin-ext" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script type="text/javascript">var baseUrl = "{{ url('/') }}";</script>
<script src="{{ asset('js/jquery.js') }}" defer></script>
<!-- Fullcalendar does not render via webpack -->
<script src="{{ asset('js/fullcalendar/fullcalendar.js') }}" defer></script>
<script src="{{ asset('js/fullcalendar/locale.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>

<title>{{ $title }}</title>
