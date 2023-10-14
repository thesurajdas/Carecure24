$.ajax({
    url: './config/api.php',
    type: 'GET',
    success: function(result){
        $('#tableData').html(result);
    }
});