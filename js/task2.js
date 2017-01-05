$(document).ready(function () {
    $('#submitBtn').on('click', function (event) {
        event.preventDefault();
        txt = $('#txt').val();
        if (txt.length == 0 || txt == ' ') {
            alert('введіть текст');
            return;
        } else {
            var reg = new RegExp(/[\s,.!?;:()-]/);
            var array = txt.split(reg);
            $('#loading').show();
            $.post("php/task_2.code.php",
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