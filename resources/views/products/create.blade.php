<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form action="{{{{ route('adminstore') }}}}" method="POST">
  	@csrf
  	<input type="text" name="cook_name">
    <textarea name="recipt"> </textarea>
    <input type="text" name="category_id">
    <button>save</button>
  </form>
</body>
</html>