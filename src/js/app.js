$(function () {
    var form = $('#form');

    /***
     * IE 8/9 placeholder compatibility fallback
     */
    $('input').placeholder();

    /***
     * Handle Form Errors
     */
    form.parsley({
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
    });

    /***
     * Handle Campaign Monitor form with ajax
     */
    form.submit(function (e) {
        e.preventDefault();
        $.getJSON(
            this.action + "?callback=?",
            $(this).serialize(),
            function (data) {
                if (data.Status === 400) {
                    // Don't show any problems
                } else { // 200 - Success
                    $('.form-main').fadeOut(500);
                    $('.form-response').fadeIn(500).removeClass('hidden');
                }
            });
    });

});

