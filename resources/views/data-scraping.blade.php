<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
	@foreach($data as $key => $value)
	<div class="col-sm-12">
      	<a href="{!! $value->url !!}">
      		<h3 class="title">{!! $value->title !!}</h3>
      	</a>
      	<p class="text-muted">
	      	<strong>Points :</strong> {!! $value->points !!}
	      	<strong>Comments :</strong> {!! $value->comments !!}
      	</p>
      	<p class="text-muted">Posted by <a href="#">{!! $value->username !!}</a></p>
    </div>
    @endforeach
</div>

</body>
</html>