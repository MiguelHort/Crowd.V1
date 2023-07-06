const inputFile = document.querySelector("#picture__input");
const pictureImage = document.querySelector(".picture__image");
const IMAGEM_URL = "https://static.vecteezy.com/system/resources/previews/001/198/770/original/camera-png.png";

// Define a imagem inicial usando a URL fornecida
pictureImage.innerHTML = "<img src='https://static.vecteezy.com/system/resources/previews/001/198/770/original/camera-png.png' width='50px'>";

// Adiciona um ouvinte de eventos para a mudança do arquivo de entrada
inputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];

  if (file) {
    const reader = new FileReader();

    // Ouvinte de evento para quando a leitura do arquivo estiver concluída
    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;

      // Cria um elemento <img> para exibir a imagem carregada
      const img = document.createElement("img");
      img.src = readerTarget.result;
      img.classList.add("picture__img");

      // Limpa o conteúdo atual e adiciona a nova imagem
      pictureImage.innerHTML = "";
      pictureImage.appendChild(img);
    });

    // Lê o conteúdo do arquivo como uma URL de dados
    reader.readAsDataURL(file);
  } else {
    // Caso nenhum arquivo seja selecionado, mostra a imagem padrão
    pictureImage.innerHTML = IMAGEM_URL;
  }
  const IMAGEM_URL = 'caminho/para/imagem.jpg'; // <-- Isso é redundante e não está sendo usado corretamente

  window.onload = function () {
    var output = document.getElementById('output');
    output.src = IMAGEM_URL;
  }
});
