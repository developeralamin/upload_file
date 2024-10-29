<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	{{$data->name}}
	{{$data->description}}

	<iframe height="700"  width="700" src="/assets/{{$data->file}}"></iframe>
	<audio controls>
	<source src="/assets/{{$data->file}}" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>

</body>
</html>