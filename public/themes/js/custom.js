function previewImage() {
  document.getElementById("image-preview").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

  oFReader.onload = function(oFREvent) {
    document.getElementById("image-preview").src = oFREvent.target.result;
  };
};

function previewImageFront() {
  document.getElementById("image-preview-front").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("image-source-front").files[0]);

  oFReader.onload = function(oFREvent) {
    document.getElementById("image-preview-front").src = oFREvent.target.result;
  };
};

function previewImageBack() {
  document.getElementById("image-preview-back").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("image-source-back").files[0]);

  oFReader.onload = function(oFREvent) {
    document.getElementById("image-preview-back").src = oFREvent.target.result;
  };
};

function previewImageAditional() {
  document.getElementById("image-preview-aditional").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("image-source-aditional").files[0]);

  oFReader.onload = function(oFREvent) {
    document.getElementById("image-preview-aditional").src = oFREvent.target.result;
  };
};

