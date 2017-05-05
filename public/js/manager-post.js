
function addpost(){
    window.location.href = "/add";
}
function deletepost(id){
    var txt;
    var r = confirm("you are delete post");
    if (r == true) {
        txt = "OK";
        $.ajax({
            url: '/delete',
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
function copypost(id){
    $.ajax({
        url: '/copy',
        data: {'id': id},
        type: 'POST',
        success: function (data) {
            if (data.status == "success") {
                location.reload();
            }
        }
    });
}
function editpost(id){
    window.location.href = "/edit/"+id;
}
// $(document).ready(function() {
//     $("#delete-post").click(function () {
//         id = $(this).val();
//         $.ajax({
//             url: '/delete',
//             data: {'id': id},
//             type: 'POST',
//             success: function (data) {
//                 if (data == "true") {
//                     location.reload();
//                 }
//             }
//         });
//     });
// })

