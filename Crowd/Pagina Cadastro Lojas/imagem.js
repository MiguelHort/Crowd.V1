const inputFile = document.querySelector("#picture__input");
const pictureImage = document.querySelector(".picture__image");
const IMAGEM_URL = "https://static.vecteezy.com/system/resources/previews/001/198/770/original/camera-png.png";
pictureImage.innerHTML = "<img src='https://static.vecteezy.com/system/resources/previews/001/198/770/original/camera-png.png' width = '50px'>";

inputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;

      const img = document.createElement("img");
      img.src = readerTarget.result;
      img.classList.add("picture__img");

      pictureImage.innerHTML = "";
      pictureImage.appendChild(img);
    });

    reader.readAsDataURL(file);
  } else {
    pictureImage.innerHTML = IMAGEM_URL;
  }
  const IMAGEM_URL = 'caminho/para/imagem.jpg';
    
  window.onload = function() {
    var output = document.getElementById('output');
    output.src = IMAGEM_URL;
}});
