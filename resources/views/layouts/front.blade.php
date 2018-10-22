

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    @include("components.front.meta")
    </head>
<body>

    @include("components.front.header")

    @yield("content")

<!-- footer start here -->
@include("front.components.footer")
<!-- footer end here -->

@include("front.components.js_files")
</body>
</html>
