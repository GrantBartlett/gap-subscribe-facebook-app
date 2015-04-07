$(function () {
    $('input').placeholder();

    $('#form').parsley({
        successClass: 'has-success',
        errorClass: 'has-error',
        errors: {
            classHandler: function (el) {
                console.log(el);
                return $(el).closest('.form-group');
            },
            errorsWrapper: '<span class=\"help-block\"></span>',
            errorElem: '<span></span>'
        }
    })
});