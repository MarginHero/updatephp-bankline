<!doctype html>
<html lang="en" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>PConnect-SIT</title>
<meta name="description" content="">
@section('twitter_meta')
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="" />
<meta name="_token" content="{!! csrf_token() !!}"/>
@show
@section('og')
<meta property="fb:app_id" content="{{ Config::get('facebook.appId') }}" />
<meta property="og:site_name" content="{{ Config::get('site.name') }}" />
<meta property="og:url" content="{{ URL::current() }}" />
<meta property="og:title" content="@yield('og:title', Config::get('site.title'))" />
<meta property="og:description" content="@yield('description', Config::get('site.description'))" />
<meta property="og:image" content="@yield('og:image', Config::get('site.default_image') )" />

@show

<style id="antiClickjack">body{display:none !important;}</style>
    <style>
        tr.row_selected td{background-color: #c2bcc3 !important;}
    </style>
<script type="text/javascript">
   if (self === top) {
       var antiClickjack = document.getElementById("antiClickjack");
       antiClickjack.parentNode.removeChild(antiClickjack);
   } else {
       top.location = self.location;
   }
</script>


<link rel="canonical" href="{{ URL::current() }}">
<meta name="base_url" content="{{ URL::to('/') }}">
<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicons/logo_57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicons/logo_60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicons/logo_72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicons/logo_76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicons/logo_114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicons/logo_120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicons/logo_144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicons/logo_152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/logo_180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/images/favicons/logo_192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/logo_32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/favicons/logo_96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/logo_16x16.png') }}">
<link rel="manifest" href="{{ assets_url('js/favicon_manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('assets/images/favicons/logo_144x144.png') }}">
<link rel="shortcut icon" href="{{ asset('assets/images/favicons/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/images/favicons/favicon.ico') }}" type="image/x-icon">
<meta name="theme-color" content="#ffffff">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="{{ assets_url('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ assets_url('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ assets_url('css/AdminLTE.min.css') }}">
<link rel="stylesheet" href="{{ assets_url('css/skin-black.min.css') }}">
<link rel="stylesheet" href="{{ assets_url('css/select2.min.css') }}">
<link rel="stylesheet" href="{{ assets_url('css/fullcalendar.min.css') }}">
<link rel="stylesheet" href="{{ assets_url('css/fullcalendar.print.css') }}" media="print">

<link rel="stylesheet" href="{{ assets_url('css/lc_switch.css') }}">
<link rel="stylesheet" href="{{ assets_url('css/bootstrap-datepicker3.min.css') }}">

<link rel="stylesheet" href="{{ assets_url('css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ assets_url('css/responsive.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ assets_url('css/jquery-confirm.min.css') }}">
<link rel="stylesheet" href="{{ assets_url('js/vendor/jsTree/themes/default/style.min.css') }}">
<link rel="stylesheet" href="{{ assets_url('css/dataTables.checkboxes.css') }}">
<link rel="stylesheet" href="{{ assets_url('css/sites.min.css') }}?v={{ filemtime(public_path() . '/assets/css/sites.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@yield('styles')

<link rel="author" href="{{ asset('humans.txt') }}">

<script>
    window.base_url = '{{ URL::to('/') }}';
</script>

</head>
