<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('Topics')</title>
</head>
<body>
<select name="question" id="question">
    <option value="" disabled selected>Choose a question</option>
    @foreach($questions as $question)
        <option value="{{ $question->id }}">{{ $question->text }}</option>
    @endforeach
</select>
</body>
</html>
