$('.responsibility-link').on('click', function() {
    $(this).siblings('.responsibility').toggle(1000)
})

$('.responsibility-hide').on('click', function() {
    $(this).parent().hide(1000)
})
