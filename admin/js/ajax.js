

function rbi(rbidropdown) {
    $('#resident').html('');
    $.ajax({
        type: 'post',
        url: 'ajax.php',
        data: {rbi_id: rbidropdown},
        success : function(data){
            $('#resident').html(data);
        }
    })
}