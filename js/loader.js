

var images = [
            templateUrl + "/images/ad/001.jpg"
    ]; 
    var imageCount = images.length;
    var imagesLoaded = 0;
    for(var i=0; i<imageCount; i++) {
        var tmpImg = new Image() ;
        tmpImg.src = images[i];
        tmpImg.onload = function() {
            imagesLoaded++;
            if(imagesLoaded == imageCount) {
                $('.loader').fadeOut(1000);
            }
        }
    }