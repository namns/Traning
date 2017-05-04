<form action="/editpost" method="post" >
    <?php foreach($data as $key =>$value):?>
        <input type="hidden" name="id" value="{{$value['id']}}">
    code: <input type="text" name="code" value="{{$value['code']}}" style="margin-left: 35px;"><br>
    title:<input type="text" name="title" value="{{$value['title']}}" style="margin-left: 45px;"><br>
    despction:<input type="text" name="despction" value="{{$value['despction']}}"><br>
    <?php endforeach;?>
    <input type="submit" value="edit" style="width: 50px;height: 30px;background: #00008B;color: #fff;border-radius: 5px;">
</form>