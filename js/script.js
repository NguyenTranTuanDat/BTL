$(() => {
    $('.setting, #error-pw').hide();
    $('#btnSignUp').prop('disabled', true);

    $('#user').click(() => {
        $('.setting').toggle();
    });

    // Darkmode
    $('#toggle-theme').click(() => {
        $('body').toggleClass('dark-body');
        $('header, .component, .temp p, li, span').toggleClass(
            'dark-component'
        );
        $('.icon').toggleClass('invert-icon');
        $('.setting').hide();
    });

    const date = new Date();
    $('.weekday').append(
        `Thứ ${date.getDay() + 1}, ${date.getDate()}/${
            date.getMonth() + 1
        }/${date.getFullYear()}`
    );

    // Check confirm password
    $('#confirm-pw').keyup(() => {
        if ($('#confirm-pw').val() === $('#pw').val()) {
            $('#btnSignUp').prop('disabled', false);
            $('#error-pw').css('display', 'none');
        } else {
            $('#btnSignUp').prop('disabled', true);
            $('#error-pw').css('display', 'block');
        }
    });
});
