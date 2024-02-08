const hamButton = document.querySelector('#menu');
const navigation = document.querySelector('.navigation');

hamButton.addEventListener('click', () => {
	navigation.classList.toggle('open');
	hamButton.classList.toggle('open');
});

$(document).ready(function(){
    // Evento change do select de status
    $('select[name="status"]').change(function(){
        var selectedStatus = $(this).val(); // Obtém o valor selecionado

        // Obtém a célula pai da seleção atual
        var statusCell = $(this).closest('td.statusCell');

        // Remove todas as classes de cor de fundo
        statusCell.removeClass('confirmada reposicao cancelada alterouData');

        // Adiciona a classe de cor de fundo correspondente ao status selecionado
        if(selectedStatus === 'Confirmada') {
            statusCell.addClass('confirmada');
        } else if(selectedStatus === 'Reposição') {
            statusCell.addClass('reposicao');
        } else if(selectedStatus === 'Cancelada') {
            statusCell.addClass('cancelada');
        } else if(selectedStatus === 'Alterou data') {
            statusCell.addClass('alterouData');
        }
    });
});

$(document).ready(function(){
    $("#showTableButton").click(function(){
        $("#scheduleTable").toggle(); // Mostra ou oculta a tabela ao clicar no botão
    });
});



