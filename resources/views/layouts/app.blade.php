
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

	@include("components.front.meta")

</head>
<body>

	@include("components.front.header")

	@yield("content")

	@include("components.front.footer")

	@yield("js_files")

</body>

</html>
