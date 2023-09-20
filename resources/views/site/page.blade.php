<!doctype html>
<html lang="en">
<head>
    <title> {{ $item->title }}</title>
    @vite('resources/css/app.css')
</head>
<body>
<div>

    <div class="mx-auto max-w-2xl">
        {!! $item->renderBlocks() !!}
    </div>
{{-- 
    Example preview. See <a href="https://twillcms.com/docs/modules/revisions-and-previewing.html">documentation.</a>
    <br />
    {{ $item->title }}
    <br />
    {{ $item->description }} --}}
</div>
</body>
</html>
