var input = document.getElementById('txt');
function validate() {
    input.value = input.value.replace(/[^\d,]/g, '');
}
$(document).ready(function () {

    $('#submitBtn').on('click', function (event) {
        var num;
        event.preventDefault();
        txt = $('#txt').val();
        if (txt.length == 0) {
            alert('введіть числа');
            return;
        } else {
            var array = txt.split(',');
            for (var i = 0; i < array.length; i++) {
                num = array[i];
                num = parseInt(num);
                if (isNaN(num) || num < 3) {
                    alert('введіть розділяючи комою числа більші за 2');
                    return;
                }
                
            }
            $('#loading').show();
            $.post("php/task_3.code.php",
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