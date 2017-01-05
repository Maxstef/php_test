$(document).ready(function () {
    $('#submitBtn').hide();
    $('#nextBtn').on('click', function (event) {
        var days = parseInt($('#days').val());
        var num = parseInt($('#num').val());
        if (isNaN(days) || isNaN(num) || days > 1000000 || days < 2 || num < 2 || num > 100) {
            alert('Введіть коректні числа');
            return;
        } else {
            $('#d-input').text('днів у році: ' + days + '; кількість партій: ' + num + '. ' + '(1 < ai, bi < ' + days + ')');
            for (var i = 0; i < num; i++) {

                $('#f-input').append("<h5>Партія номер " + (i + 1) + ": </h5>");
                $('#f-input').append("<label for='a" + (i + 1) + "-n'>a" + (i + 1) + ":" + "</label>");
                $('#f-input').append("<input type='number' id='a" + (i + 1) + "-n'>");
                $('#f-input').append("<label for='b" + (i + 1) + "-n'>b" + (i + 1) + ":" + "</label>");
                $('#f-input').append("<input type='number' id='b" + (i + 1) + "-n'><hr>");
            }

            $('#submitBtn').show();
            $('#submitBtn').on('click', function (event) {
                var str1, str2;
                var arr = [];

                event.preventDefault();
                for (var i = 0; i < num; i++) {
                    str1 = '#a' + (i + 1) + '-n';
                    str2 = '#b' + (i + 1) + '-n';

                    if (isNaN(parseInt($(str1).val())) || parseInt($(str1).val()) >= days || parseInt($(str1).val()) < 2 || isNaN(parseInt($(str2).val())) || parseInt($(str2).val()) >= days || parseInt($(str2).val()) < 2) {
                        alert('введіть коректні дані');
                        return;
                    } else {
                        arr.push({ num: (i + 1), ai: parseInt($(str1).val()), bi: parseInt($(str2).val()) });
                    }
                }
                $('#loading').show();
                $.post("php/task_4.code.php",
                {
                    days: days,
                    number: num,
                    array: arr
                },
                function (data, status) {
                    $('#loading').hide();
                    $('#result').text(data);

                });
            })

        }
    })
})