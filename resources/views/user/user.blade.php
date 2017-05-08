@include('template/header')
<div class="title">user-list</div>
        <button class="add" onclick="javascript:adduser()">add</button>
        <table>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>fullname</th>
                <th>created</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($user as $data)
                <tr>
                    <td>{{$data['id']}}</td>
                    <td>{{$data['username']}}</td>
                    <td>{{$data['fullname']}}</td>
                    <td>{{$data['created']}}</td>
                    <td style="text-align: center;"><button onclick="javascript:getuser({{$data['id']}})" class="edit">edit</button></td>
                    <td style="text-align: center;"><button class="delete" onclick="javascript:deleteuser({{$data['id']}})" id="delete-post" value="{{$data['id']}}">delete</button></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="{{ URL::asset('js/user.js') }}"></script>

</html>
