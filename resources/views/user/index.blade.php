@extends('user.contact')
@extends('user.project')
@extends('user.service')
@extends('user.about')
@extends('user.home')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Md.Emran Sikder</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/animateheadline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/owl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/alert.css')}}">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,700,800">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
    <script type="text/javascript" src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/js/animate.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/frontend/js/onpagenav.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/js/carousel.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/js/main.js')}}"></script>
    
</head>
<body>
	<!-- <div class="loader_bg"><div class="loader"></div></div> -->
