<html> 
	<head> 
		<title></title> 
		<link rel="stylesheet" href="{!! asset ('css/b.css') !!}" media="screen">
	</head> 
	<body>
	<div class="box">
	<center><h1>Data Produk</h1></center>
	</div>
	<table border="1" cellpadding="20">
	<thead>
		<tr> NO </tr>
		<tr> Nama Produk </tr>
	</thead>
	<tbody>
		@foreach ($produk as $i => $v )
		<tr>
			<td> {{ $i+1 }} </td>
			<td> {{ $v }} </td>
		</tr>
		@endforeach
	<tbody>
	</table>
	</body> 
</html> 
 