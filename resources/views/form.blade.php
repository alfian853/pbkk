<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
    </style>
</head>
<body>
<div>
    {!! Form::open(['url' => '/form']) !!}
    {{Form::label('num1','angka 1')}}
    {{Form::number('num1', '0')}}
    {{Form::select('operator',['+'=>'+','-'=>'-','/'=>'/','*'=>'*'])}}
    {{Form::label('num2','angka 2')}}
    {{Form::number('num2', '0')}}
    {{Form::submit('post now!')}}
    {!! Form::close() !!}
</div>
</body>
</html>
