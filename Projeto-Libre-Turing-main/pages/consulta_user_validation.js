//-------------------validação RA alunos---------------------------
document.addEventListener('DOMContentLoaded', function() {
    

   
    const form = document.getElementById('form-consulta');
    const raInput = document.getElementById('consulta-ra-aluno');
    const raError = document.getElementById('ra-error');

    
    form.addEventListener('submit', function(event) {
        
        const clickedButton = event.submitter;

       
        raError.textContent = '';

        if (clickedButton.id === 'btn-consultar') {
            
           

            const raValue = raInput.value.trim();
            
           
            if (!/^\d{11}$/.test(raValue)) {
                
                
                event.preventDefault(); 
                
               
                raError.textContent = 'O RA deve conter exatamente 11 dígitos numéricos.';
            }
        }
        
       
    });
});
