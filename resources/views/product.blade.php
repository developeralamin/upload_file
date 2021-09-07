<!DOCTYPE html>
<html>
<head>
	<title>Upload file</title>
</head>
<body>


	<form style="margin-left: 10%;" action="{{  url('uploadproduct')  }}" method="post" enctype="multipart/form-data">

		@csrf

	<input type="text" name="name" placeholder="Product Name">

	<input type="text" name="description" placeholder="Product description">

	<input type="file" name="file">

	<input type="submit" >

	</form>

</body>
</html>