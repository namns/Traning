
function addpost(){
    window.location.href = "/add";
}
function deletepost(id){
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

