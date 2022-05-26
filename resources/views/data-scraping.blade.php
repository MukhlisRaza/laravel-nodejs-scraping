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
	
	<div class="col-sm-12">
      	<a href="">
      		<h3 class="title">{{ $data['posts']['text'] }}</h3>
      	</a>
      	<p class="text-muted">
	      	<strong>Points :</strong> {{ $data['posts']['post_id'] }}
	      	<strong>Comments :</strong> {{ $data['posts']['comments'] }}
      	</p>
		  <img src="{{$data['posts']['image']}}" alt="">
      	<p class="text-muted">Posted by <a href="{{ $data['posts']['link'] }}">{{ $data['posts']['link'] }}</a></p>
    </div>
    
</div>

</body>
</html>