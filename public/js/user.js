/**
 * Created by appota on 08/05/2017.
 */
function adduser(){
    window.location.href = "/adduser";
}
function deleteuser(id){
    var txt;
    var r = confirm("you are delete post");
    if (r == true) {
        txt = "OK";
        $.ajax({
            url: '/deleteuser',
            data: {'id': id},
            type: 'POST',
            success: function (data) {
                if (data.status == "success") {

                    location.reload();
                }
            }
        });
    } else {
        txt = "Cancel";
    }
}
function getuser(id){
    window.location.href = "/getuser/"+id;
}