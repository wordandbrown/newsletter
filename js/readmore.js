

$('.readmore-box').wrap('<div class="readmore-wrap"></div>');
$('.readmore-box').before('<div class="readmore-tag">Read More</div>');
$('.readmore-box').hide();
$('.readmore-wrap').on('click', function() {
    $(this).find('.readmore-box').slideToggle();
});