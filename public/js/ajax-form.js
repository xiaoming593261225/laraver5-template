var ajaxForm = {
    formClass: '.ajax-form',
    init: function() {
        ajaxForm.initButtons();
        ajaxForm.disableFormSubmit();
    },
    initButtons: function () {
        $('.ajax-form-cancel').on('click', function () {
            $(ajaxForm.formClass).reset();
        });
        $('.ajax-form-submit').on('click', function () {
            ajaxForm.submit();
        });
    },
    disableFormSubmit: function () {
        $(ajaxForm.formClass).on('submit', function (e) {
            e.preventDefault();
            ajaxForm.submit();
        })
    },
    submit: function () {
        var url = $(ajaxForm.formClass).attr('action');
        var data = $(ajaxForm.formClass).serialize();
        $.post(url, data, function (response) {
            $('.modal').modal('hide');
            location.reload();
        })
    }
};

$(function () {
    ajaxForm.init();
});