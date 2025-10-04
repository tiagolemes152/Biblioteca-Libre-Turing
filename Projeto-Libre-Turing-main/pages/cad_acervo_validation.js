// -----------------Validação da página "cadastro-acervo"-----------------

document.addEventListener('DOMContentLoaded', function() {
    
    // 1--> campos do formulário
    const form = document.getElementById('form-cadastro');
    const nomeInput = document.getElementById('nome-livro');
    const isbnInput = document.getElementById('isbn-livro');
    const codigoInput = document.getElementById('codigo-barras');
    const dataInput = document.getElementById('data-aquisicao');

    // 2--> menssagens de erro
    const nomeError = document.getElementById('nome-error');
    const isbnError = document.getElementById('isbn-error');
    const codigoError = document.getElementById('codigo-error');
    const dataError = document.getElementById('data-error');
    
   
    form.addEventListener('submit', function(event) {
        
        event.preventDefault();

        // 3 --> limpa menssagens erradas
        nomeError.textContent = '';
        isbnError.textContent = '';
        codigoError.textContent = '';
        dataError.textContent = '';

        let isValid = true;

        // 4 --> Validação dos campos obrigatórios
        if (nomeInput.value.trim() === '') {
            nomeError.textContent = 'O campo "Nome do Livro" é obrigatório.';
            isValid = false;
        }

        if (codigoInput.value.trim() === '') {
            codigoError.textContent = 'O campo "Código de Barras" é obrigatório.';
            isValid = false;
        }

        if (dataInput.value === '') {
            dataError.textContent = 'O campo "Data de aquisição" é obrigatório.';
            isValid = false;
        }

        // 5. Validação específica para o ISBN (apenas números) e cod de barras 
       
        const isbnValue = isbnInput.value.trim();
        if (isbnValue !== '' && !/^\d+$/.test(isbnValue)) {
            isbnError.textContent = 'O ISBN deve conter apenas números.';
            isValid = false;
        }

        const codigoValue = codigoInput.value.trim();
        if (codigoValue !== '' && !/^\d+$/.test(codigoValue)) {
            codigoError.textContent = 'O codígo de barras deve conter apenas números.';
            isValid = false;
        }
        
        // 6 --> envio para o banco dados
        if (isValid) {
            alert('Livro cadastrado com sucesso!');
            
        }
    });
});

