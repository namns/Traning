{{--@include('template/header')--}}
@extends('template.layout')
@section('content')
<style>
    form {
        border: 3px solid #f1f1f1;
        width: 40%;
        margin: 0 auto;margin-top: 20px;
    }
</style>
<form action="{{ route('add-user') }}" method="post">
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;width: 100%;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    username: <input type="text" name="username" value="" placeholder="xxxx" style="margin-left: 35px;margin-top: 10px;"><br>
    password:<input type="password" name="password" value="" placeholder="....." style="margin-left: 41px;"><br>
    fullname:<input type="text" name="fullname" value="" placeholder="xxxxx" style="margin-left: 50px"><br>
    <input type="submit" value="add" style="width: 50px;height: 30px;background: #00008B;color: #fff;border-radius: 5px;margin-left: 200px;margin-top: 5px;" >
</form>
</div>
</div>
@endsection
