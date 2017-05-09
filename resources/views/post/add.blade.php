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
<form action="{{ route('add-post') }}" method="post">
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;width: 100%;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    code: <input type="text" name="code" value="" placeholder="000" style="margin-left: 35px;margin-top: 10px;"><br>
    title:<input type="text" name="title" value="" placeholder="abc" style="margin-left: 45px;"><br>
    despction:<input type="text" name="despction" value="" placeholder="abc...."><br>
    <input type="submit" value="add" style="width: 50px;height: 30px;background: #00008B;color: #fff;border-radius: 5px;margin-left: 200px;margin-top: 5px;">
</form>
</div>
</div>
@endsection