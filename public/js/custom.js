// controls scrolling for project carousel gallery
$('.carousel').carousel({
    interval: false
});

// removes flashed success image when email has been sent
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);