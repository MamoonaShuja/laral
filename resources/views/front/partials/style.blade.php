@php
    $path = "";    
@endphp

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8">
  <title>Educenter - Education HTML Template</title>

  <!-- Mobile Specific Metas
	================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Educenter HTML Template v1.0">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset($path.'front/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{asset($path.'front/plugins/slick/slick.css') }}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{asset($path.'front/plugins/themify-icons/themify-icons.css') }}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{asset($path.'front/plugins/animate/animate.css') }}">
  <!-- aos -->
  <link rel="stylesheet" href="{{asset($path.'front/plugins/aos/aos.css') }}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{asset($path.'front/plugins/venobox/venobox.css') }}">

  <!-- Main Stylesheet -->
  <link href="{{asset($path.'front/css/style.css') }}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset($path.'front/images/favicon.png') }}" type="image/x-icon">
  <link rel="icon" href="{{asset($path.'front/images/favicon.png') }}" type="image/x-icon">
    @yield('style')
</head>

<body>
