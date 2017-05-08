<form action="{{ route('add-post') }}" method="post">
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    code: <input type="text" name="code" value="" placeholder="000" style="margin-left: 35px;"><br>
    title:<input type="text" name="title" value="" placeholder="abc" style="margin-left: 45px;"><br>
    despction:<input type="text" name="despction" value="" placeholder="abc...."><br>
    <input type="submit" value="add" style="width: 50px;height: 30px;background: #00008B;color: #fff;border-radius: 5px;">
</form>
