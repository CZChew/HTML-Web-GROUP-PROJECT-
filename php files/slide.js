var index = 0;
displaySlide(index);

function clickSlide(x) {
  displaySlide(index += x);
}

function displaySlide(y) {
  var i;
  var slide = document.getElementsByClassName("previewImg");
  for (i = 0; i < slide.length; i++) {
    slide[i].style.display = "none";
  }
  if (y > slide.length) {
    index = 1
  }
  if (y < 1) {
    index = slide.length
  }
  slide[index-1].style.display = "flex";
}
