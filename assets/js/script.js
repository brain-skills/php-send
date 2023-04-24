$(document).ready(function () {
    $('form').submit(function () {
        var formID = $(this).attr('id'); // ID
        var formNm = $('#' + formID);
        $.ajax({
            type: 'POST',
            url: 'mail.php', // Обработчик формы отправки
            data: formNm.serialize(),
            success: function (data) {
                // Вывод текста результата отправки в текущей форме
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Ваше сообщение отправлено !!!',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        });
        return false;
    });
});