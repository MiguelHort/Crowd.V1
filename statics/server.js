
const stars = document.querySelectorAll('.stars');
const estrelasInput = document.getElementById('estrelas');

function selecionarEstrelas(valor) {
    stars.forEach((star, index) => {
        if (index < valor) {
            star.classList.add('checked');
        } else {
            star.classList.remove('checked');
        }
    });
    
    estrelasInput.value = valor;
}

document.getElementById('avaliacaoForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const texto = document.getElementById('texto').value;
    const estrelas = parseInt(estrelasInput.value);
    
    // Aqui você pode enviar a avaliação para o servidor ou realizar qualquer ação desejada
    console.log('Texto:', texto);
    console.log('Estrelas:', estrelas);
    
    // Limpar o formulário após o envio
    document.getElementById('avaliacaoForm').reset();
    
    // Opcional: Exibir uma mensagem de sucesso ou redirecionar para outra página
    alert('Avaliação enviada com sucesso!');
});
