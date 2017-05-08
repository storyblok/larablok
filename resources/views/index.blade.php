<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <title>{{ $story->name }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=11"/>
    <meta name="generator" content="storyblok">
    <meta name="cms" content="https://www.storyblok.com">
    <link rel="icon" type="image/png" href="//app.storyblok.com/images/favicon-32x32.png" sizes="32x32">
    <link rel="stylesheet" href="{{ url('css/app.css') }}" media="all" />
  </head>
  <body>

	@include('components/' . $story->content['component'], ['blok' => $story->content])
  
	<script type="text/javascript" src="{{ url('js/app.js') }}"></script>

	<script type="text/javascript" src="//app.storyblok.com/storyblok-latest.js"></script>
	<script type="text/javascript">
		storyblok.init();
		storyblok.on('change', function() {
			window.location.reload(true);
		});
	</script>
  </body>
</html>