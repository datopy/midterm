<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<table>
		<tr>
			<tr>#</tr>
		    <tr>cook_name</tr>
		    <tr>recipt</tr>
                <tr>category_id</tr>
		</tr>


		@foreach ($products as $product)
            <tr>
            	<td>{{  ++loop->index}}</td>
            	<td>{{  $product->cook_name}}</td>
                  <td>{{  $product->recipt}}</td>
                  <td>{{  $product->category_id}}</td>



            	<td>
            		<a href="{{route('adminshow',["id"=>$product->id])}}">დათვალიერება</a>
            		<form method="POST" action="{{{{ route('admindelete') }}}}">
            			@csrf
            			<input type="hidden" name="id" value="{{$product->id}}">
            			<button>წაშლა</button>
            		</form>
            		
            	</td>

            </tr>
		@endforeach

	</table>

</body>
</html>