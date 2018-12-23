function coverSliderNext() {
    var slideContainer = $('.cover-slider .slides');
    var count = slideContainer.children().length;
    slideContainer.find('.second').addClass('first').removeClass('second');
    slideContainer.find('.third').addClass('second').removeClass('third');

    var lastButOneChild = slideContainer.find('.cover-slide:nth-child(' + (count) + ')');
    lastButOneChild.removeClass('first').addClass('third');
    lastButOneChild.remove();
    var lastChild = slideContainer.find('.cover-slide:nth-child(' + (count) + ')');
    lastChild.removeClass('first').addClass('second');
    lastChild.remove();
    slideContainer.prepend(lastChild);
    slideContainer.prepend(lastButOneChild);
}

function coverSliderPrev() {
    var slideContainer = $('.cover-slider .slides');
    var count = slideContainer.children().length;
    var firstChild = slideContainer.find('.cover-slide:first-child');
    firstChild.remove();
    firstChild.removeClass('third').addClass('first');

    slideContainer.find('.second').addClass('third').removeClass('second');
    slideContainer.find('.first').first().addClass('second').removeClass('first');
    slideContainer.append(firstChild);
}

$('.cover-slide-controller .control.next').click(function () {
    coverSliderNext();
});
$('.cover-slide-controller .control.prev').click(function () {
    coverSliderPrev();
});