<html> 
	<head> 
		<title>@yield('title')</title> 
		<link rel="stylesheet" href="{!! asset ('css/al.css') !!}" media="screen">
	</head> 
<body> 
	<header> 
		@include('layout.header') </header> 
	<ul> 
		@section('sidebar') 
		<li>HTML</li> 
		<li>CSS</li> 
		<li>JS</li>
		<li>PHP</li>
	</ul>
@show
<div class="container"> <marquee> @yield('content') </marquee> </div> 
</body> 
</html>