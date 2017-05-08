<form action="{{ route('edit-post') }}" method="post">
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @foreach($data as $key =>$value)
        <input type="hidden" name="id" value="{{$value['id']}}">
    code: <input type="text" name="code" value="{{$value['code']}}" style="margin-left: 35px;"><br>
    title:<input type="text" name="title" value="{{$value['title']}}" style="margin-left: 45px;"><br>
    despction:<input type="text" name="despction" value="{{$value['despction']}}"><br>
    @endforeach
    <input type="submit" value="edit" style="width: 50px;height: 30px;background: #00008B;color: #fff;border-radius: 5px;">
</form>