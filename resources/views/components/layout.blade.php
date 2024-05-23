<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('app_NAME')}}</title>
    @vite(['resources/css/app.css','resources/css/app.js'])
</head>
<body>
<x-navbar></x-navbar>
{{$slot}}
<x-footer></x-footer>
</body>
</html>