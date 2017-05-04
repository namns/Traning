<!DOCTYPE html>
<html>
<head>
    <title>manager-post</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<body>
<div class="container">
    <div class="content">
        <div class="title">manager-post</div>
        <button class="add" onclick="javascript:addpost()">add</button>
        <table>
            <tr>
                <th>id</th>
                <th>code</th>
                <th>title</th>
                <th>despction</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            <?php foreach ($post as $key =>$data):?>
            <tr>
                <td><?php echo $data['id'];?></td>
                <td>{{$data['code']}}</td>
                <td>{{$data['title']}}</td>
                <td>{{$data['despction']}}</td>
                <td><button class="edit">edit</button></td>
                <td><button class="delete" onclick="javascript:deletepost({{$data['id']}})" id="delete-post" value="{{$data['id']}}">delete</button></td>
            </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>
</body>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="{{ URL::asset('js/manager-post.js') }}"></script>

</html>
