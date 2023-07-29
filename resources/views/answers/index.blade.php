<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('Answers')</title>
</head>
<body>
<select name="answers" id="answers">
    <option value="" disabled selected>Choose an answer</option>
    @foreach($answers as $answer)
        <option value="{{ $answer->id }}">{{ $answer->text }}</option>
    @endforeach
</select>
</body>
</html>
