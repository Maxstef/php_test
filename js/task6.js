
$(document).ready(function () {
    
    $('#add-user-btn').on('click', function (event) {
        event.preventDefault();
        var newName = $('#new-name').val();
        if (newName.length == 0 || newName == ' ') {
            alert('введіть ім\'я');
            return;
        } else {
            $('#loading').show();
            $.post("php/task_6.code.php",
            {
                newname: newName
            },
            function (data, status) {
                $('#loading').hide();
                $('#feedback2').text(data);
            });
        }
    })
    $('#add-result-btn').on('click', function (event) {
        event.preventDefault();
        var name = $('#name').val();
        var result = $('#result').val();
        
        if (name.length == 0 || name == ' ' || result.length == 0 || result == ' ') {
            alert('введіть дані');
            return;
        } else if(isNaN(parseInt(result))){
            alert('результат число');
            return;
        } else {
            $('#loading').show();
            $.post("php/task_6.code.php",
            {
                name: name,
                result: result
            },
            function (data, status) {
                $('#loading').hide();
                $('#feedback1').text(data);
            });
        }
    })
    $('#reset-btn').on('click', function (event) {
        event.preventDefault();
        
        if(confirm('впевнені що хочете очистити всі результати?')){
            $('#loading').show();
            $.post("php/task_6.code.php",
            {
                reset: 1,
                
            },
            function (data, status) {
                $('#loading').hide();
                $('#feedback3').text(data);
            });
        }
        
        
            
        
    })
    
    
})