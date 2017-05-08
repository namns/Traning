@include('template/header')
<style>
    form {
        border: 3px solid #f1f1f1;
        width: 40%;
        margin: 0 auto;margin-top: 20px;
    }
</style>
<form action="{{ route('edit-user') }}" method="post">
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;width: 100%;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
        @foreach($data as $key =>$value)
            <input type="hidden" name="id" value="{{$value['id']}}">
    username: <input type="text" name="username" value="{{$value['username']}}" placeholder="xxxx" style="margin-left: 35px;margin-top: 10px;"><br>
    fullname:<input type="text" name="fullname" value="{{$value['fullname']}}" placeholder="xxxxx" style="margin-left: 50px"><br>
        @endforeach
    <input type="submit" value="edit" style="width: 50px;height: 30px;background: #00008B;color: #fff;border-radius: 5px;margin-top: 5px;margin-left: 200px;">
</form>
</body>

</html>