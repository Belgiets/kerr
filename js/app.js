$(document).ready(function() {
    $.ajaxSetup({
        url: 'inc/scripts.php',
        async: true,
        type: 'POST',
        dataType: 'json'
    });

    /**
     * do ajax
     *
     * @param ajaxData object
     * @param callback
     */
    function doAjax(ajaxData, callback) {
        $.ajax({
            data: ajaxData,
            success: function (data) {
                return callback(data);
            }
        });
    }

    /**
     * slider
     */
    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: false,
        customDirectionNav: $(".slider-wr > a")
    });

    /**
     * set countries select content
     */
    doAjax(
        {
            action: 'get_countries'
        },
        function(data) {
            if ('false' != data) {
                var options = '<option disabled selected>Country</option>';

                $.each(data, function(key, value) {
                    options += '<option value="' + key + '">' + value + '</option>';
                });

                $('#country').html(options);
            }
        }
    );

    /**
     * set state/province select content by country
     */
    $('#country').change(function() {
        doAjax(
            {
                action: 'get_stpr',
                c_code: $('#country').val()
            },
            function(data) {
                if ('false' != data) {
                    var options = '<option disabled selected>State/Province</option>';

                    $.each(data, function(key, value) {
                        options += '<option value="' + value + '">' + value + '</option>';
                    });

                    $('#st-pr').html(options);
                }
            }
        );
    });

    /**
     * CUSTOM JQUERY VALIDATORS
     */
    $.validator.addMethod("names", function(value, element) {
        return this.optional(element) || /^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/.test(value);
    }, "Please specify the correct first/last name");

    $.validator.addMethod("only_spaces", function(value, element) {
        return this.optional(element) || /.*[^ ].*/.test(value);
    }, "Please specify not only spaces");

    $('#form').validate({
        rules: {
            "f-name": {
                required: true,
                names: true
            },
            "l-name": {
                required: true,
                names: true
            },
            "email": {
                email: true
            },
            "p-name": {
                required: true,
                names: true
            },
            "tel": {
                required: true,
                phoneUS: true
            },
            "address": {
                required: true,
                only_spaces: true
            },
            "country": {
                required: true
            },
            "st-pr": {
                required: true
            }
        },
        messages: {
            "f-name": {
                names: 'Please specify the correct first name'
            },
            "l-name": {
                names: 'Please specify the correct last name'
            },
            "p-name": {
                names: 'Please specify the correct practice name'
            }
        }
    });
});
