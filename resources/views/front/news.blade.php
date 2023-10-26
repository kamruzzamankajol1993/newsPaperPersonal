<!DOCTYPE html>
<html>
<head>
	<title>Environmental TalkBd</title>
	<meta property="og:url"    content="http://localhost/environment/share/{{ $post->id }}" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="{{ $post->title }}" />
	<meta property="og:description"   content="{{ $post->paragraph}}" />
	<meta property="og:image"         content="{{ asset('public/uploads/'.$post->cover_image) }}" />

</head>
<body>

</body>
</html>