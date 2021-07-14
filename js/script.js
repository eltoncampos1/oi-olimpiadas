$(document).ready(() => {
    
    $('#btn-enviar').on('click', e => {

        e.preventDefault

        var dados = {}

        dados.nome = $('#nome').val();
        dados.email = $('#email').val();
        dados.primaryPais = $('#primary-pais option:selected').val();
        dados.primaryGold = $('#primary-gold').val();
        dados.primarySilver = $('#primary-silver').val();
        dados.primaryBronze = $('#primary-bronze').val();

        dados.secondaryPais = $('#secondary-pais option:selected').val();
        dados.secondaryGold = $('#secondary-gold').val();
        dados.secondarySilver = $('#secondary-silver').val();
        dados.secondaryBronze = $('#secondary-bronze').val();

        dados.tertiaryPais = $('#tertiary-pais option:selected').val();
        dados.tertiaryGold = $('#tertiary-gold').val();
        dados.tertiarySilver = $('#tertiary-silver').val();
        dados.tertiaryBronze = $('#tertiary-bronze').val();


        if (dados.nome != '' && dados.email != ''
            && dados.primaryPais != '' && dados.primaryGold != '' && dados.primarySilver != '' && dados.primaryBronze != ''
            && dados.secondaryPais != '' && dados.secondaryGold != '' && dados.secondarySilver != '' && dados.secondaryBronze != ''
            && dados.tertiaryPais != '' && dados.tertiaryGold != '' && dados.tertiarySilver != '' && dados.tertiaryBronze != '') {
            
            if (dados.email.includes('@')) {

                if(dados.primaryPais === dados.secondaryPais || dados.secondaryPais === dados.tertiaryPais || dados.tertiaryPais ===dados.primaryPais ){
                    alert('Os países selecionado são iguais, aumente sua chanse de ganhar escolhendo países diferente')
                }

                $.ajax({

                    type: 'POST',
                    url: 'controller_app.php',
                    data: dados,
                    dataType: 'json',
                    success: dados => { console.log(dados) },
                    error: erro => { console.log(erro) }
                })


            } else {

                alert('Por favor preencher com um email valido')
            }

        }
        else {
            alert("por favor preencher o campo!");
        }
    })

})