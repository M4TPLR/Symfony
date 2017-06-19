jQuery(function ($) {
    var conditionsCheckboxLabel = $('#conditionscheckbox-label');
    var publicCheckboxLabel = $('#publiccheckbox-label');
    var allowedCheckboxLabel = $('#allowedcheckbox-label');
    var checkboxLabel = $('.checkbox-label');
    var monetizeCheckbox = $('#monetize-checkbox');
    var conditionsCheckbox = $('#conditions-checkbox');
    var publicCheckbox = $('#public-checkbox');
    var allowedCheckbox = $('#allowed-checkbox');
    var isChecked = false;
    var tagContent;

    monetizeCheckbox.on("click", function () {
        if (monetizeCheckbox.is(':checked')) {
            isChecked = true;
            console.log(isChecked);
        } else {
            console.log("else");
            isChecked = false;
            console.log(isChecked);
        }
    });

    $('#addtag-input').on('keydown', function (e) {
        if (e.which == 13) {
            console.log("ENTER");
            tagContent = $('#addtag-input').val();
            console.log(tagContent);
            $(".taglist").append('<li><span>' + tagContent + '</span> <img class=\"icon\" src=\"https://png.icons8.com/price-tag/p1em/16\" title=\"Price Tag\" width=\"16\" height=\"16\"></li> ');
            $('#addtag-input').val("");
        }
    });

    $(".taglist li img").hover(function () {
        $(this).attr('src', 'https://png.icons8.com/close-window/color/24');
    } , function() {
        $(this).attr('src', "https://png.icons8.com/price-tag/p1em/16");
    });

    $(".taglist li img").on('click', function () {
        var id = $(this).parent().attr('id');
        console.log('#'+id);
        $('#'+id).remove();
    });



    checkboxLabel.click(function () {
            if (isChecked) {
                console.log("lala");
                conditionsCheckboxLabel.click(function () {
                    if (conditionsCheckboxLabel.css('color') !== "rgb(0, 128, 0)") {
                        conditionsCheckboxLabel.css('color', 'green');
                        conditionsCheckbox.prop('checked', true);
                    }
                    else {
                        conditionsCheckboxLabel.css('color', 'black');
                        conditionsCheckbox.prop('checked', false);
                    }
                });

                publicCheckboxLabel.click(function () {
                    if (publicCheckboxLabel.css('color') !== "rgb(0, 128, 0)") {
                        publicCheckboxLabel.css('color', 'green');
                        publicCheckbox.prop('checked', true);
                    }
                    else {
                        publicCheckboxLabel.css('color', 'black');
                        publicCheckbox.prop('checked', false);
                    }
                });

                allowedCheckboxLabel.click(function () {
                    if (allowedCheckboxLabel.css('color') !== "rgb(0, 128, 0)") {
                        allowedCheckboxLabel.css('color', 'green');
                        allowedCheckbox.prop('checked', true);
                    }
                    else {
                        allowedCheckboxLabel.css('color', 'black');
                        allowedCheckbox.prop('checked', false);
                    }
                });
            } else {
                console.log("lolo");
                conditionsCheckboxLabel.css('color', 'black');
                publicCheckboxLabel.css('color', 'black');
                allowedCheckboxLabel.css('color', 'black');

                conditionsCheckbox.prop('checked', false);
                publicCheckbox.prop('checked', false);
                allowedCheckbox.prop('checked', false);

            }
        }
    );

});

