<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('Levels')</title>
</head>
<body>
<select name="levels" id="levels">
    <option value="" disabled selected>Choose a level</option>
    @foreach($levels as $level)
        <option value="{{ $level->id }}">{{ $level->name }}</option>
    @endforeach
</select>
</body>
</html>
