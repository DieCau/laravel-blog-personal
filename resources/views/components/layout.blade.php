<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="{{ $metaDescription ?? 'Default description' }}">
    <title>{{ $metaTitle ?? 'Default Title' }}</title>
</head>
<body>
<x-navigation/>

{{ $slot  }}
@isset($sidebar)
    <div id="sidebar">
        <h3>Sidebar</h3>
        <div>{{ $sidebar }}</div>
    </div>
@endif

</body>
</html>
