$(document).ready(function(){
// $( ".row_position" ).sortable({
//         delay: 150,
//         stop: function() {
//             var selectedData = new Array();
//             $('.row_position>tr').each(function() {
//                 selectedData.push($(this).attr("id"));
//             });
//             updateOrder(selectedData);
//         }
//     });


//     function updateOrder(data) {
//         $.ajax({
//             url:"/web-setting",
//             type:'get',
//             data:{position:data},
//             success:function(){
//                 alert('your change successfully saved');
//             }
//         })
//     };

$("#row_position").sortable({
    placeholder: "ui-state-higlight",
    update : function(event, ui){
        var post_order_id = new Array();
        $('#row_position td').each(function(){
            post_order_id.push($(this).data("post-id"));
        });
        $.ajax({
            url:"/web-setting",
            method:"POST",
            data:{post_order_id:post_order_id},
            success:function(data)
            {
                if (data) {
                    $(".alert-danger").hide();
                    $(".alert-success").show();
                }else{
                    $(".alert-danger").show();
                    $(".alert-success").hide();
                }
            }
        });
    }
});
});