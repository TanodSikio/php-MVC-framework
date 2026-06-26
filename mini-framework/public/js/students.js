function bindDeleteButtons(){
    $('.delete-student').on('click', function(){
        if(!confirm('Delete this student?')){
            return;
        }

        const id = $(this).data('id');

        $.get('?url=students/delete&id=' + id, function (html){
            $('#studentTable').html(html);
            bindDeleteButtons();
        });
    });
}

$(document).ready(function(){
    bindDeleteButtons();
});