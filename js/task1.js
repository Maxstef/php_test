$(document).ready(function () {
    $('#submitBtn').on('click', function (event) {
        event.preventDefault();
        number = $('#number').val();
        if (isNaN(parseInt(number))) {
            alert('Введіть число');
            return;
        } else if (parseInt(number) < 1) {
            alert('Введіть число більше за 0');
            return;
        } else {
            $('#loading').show();
            $.post("php/task_1.code.php",
            {
                number: number
            },
            function (data, status) {
                $('#loading').hide();
                $('#result').text(data);
                
            });
        }
    })
})