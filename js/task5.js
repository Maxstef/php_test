$(document).ready(function () {
    $('#submitBtn').on('click', function (event) {
        event.preventDefault();
        txt = $('#txt').val();
        if (txt.length == 0 || txt == ' ') {
            alert('введіть текст');
            return;
        } else {
            reg = new RegExp(/\s/);
            var array = txt.split(reg);
            $('#loading').show();
            $.post("php/task_5.code.php",
            {
                array: array
            },
            function (data, status) {
                $('#loading').hide();
                $('#result').text(data);

            });
        }
    })
})