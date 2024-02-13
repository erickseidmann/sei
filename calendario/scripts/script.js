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

$(document).ready(function() {
    // Função para fechar todas as tabelas abertas quando o botão 'Close All' for clicado
    $(".closeAllButton").click(function() {
        $("main").hide();
    });

    // Função para fechar a tabela quando o botão 'x' for clicado
    $(".closeTableButton").click(function() {
        var targetId = $(this).data('target');
        var scheduleTable = $("#scheduleTable_" + targetId);
        var saveButtons = scheduleTable.find('.saveButton, .saveAllButton');
        if (saveButtons.hasClass('saved')) {
            scheduleTable.hide(); // Oculta a tabela correspondente se as alterações estiverem salvas
        } else {
            alert("Salve seu trabalho primeiro"); // Exibe a mensagem se as alterações não estiverem salvas
        }
    });

    // Função para marcar as alterações como salvas quando o botão 'Save' for clicado
    $(".saveButton").click(function() {
        $(this).addClass('saved');
        $(".closeAllButton").show(); // Mostra o botão 'Close All' quando o 'Save' é clicado
    });

    // Função para marcar todas as alterações como salvas quando o botão 'Save All' for clicado
    $(".saveAllButton").click(function() {
        $(".saveButton, .saveAllButton").addClass('saved');
        $(".closeAllButton").show(); // Mostra o botão 'Close All' quando o 'Save All' é clicado
    });
});






$(document).ready(function() {

    $(".showTableButton").click(function() {
        var targetId = $(this).data('target');
        $("main").hide(); // Esconde todas as tabelas
        $("#scheduleTable_" + targetId).show(); // Mostra apenas a tabela do professor específico
    });
});



$(document).ready(function() {
    // Variável para controlar se a senha foi inserida corretamente
    var senhaCorreta = false;

    // Função para exibir o modal quando o botão "All" for clicado
    $(".showAllButton").click(function() {
        // Verifica se a senha foi inserida corretamente
        if (!senhaCorreta) {
            // Pede a senha ao usuário
            var password = prompt("Por favor, insira a senha:");

            // Verifica se a senha está correta
            if (password === "sua_senha_aqui") { // Substitua "sua_senha_aqui" pela senha correta
                // Define que a senha foi inserida corretamente
                senhaCorreta = true;

                // Mostra todas as tabelas dos professores
                $("main").show();
            } else {
                // Exibe uma mensagem de senha incorreta
                alert("Senha incorreta. Tente novamente.");
            }
        } else {
            // Mostra todas as tabelas dos professores se a senha já foi inserida corretamente anteriormente
            $("main").show();
        }
    });

    // Função para fechar todas as tabelas quando o botão "Close All" for clicado
    $(".closeAllButton").click(function() {
        // Verifica se a senha foi inserida corretamente
        if (senhaCorreta) {
            // Fecha todas as tabelas dos professores
            $("main").hide();
        } else {
            // Exibe uma mensagem solicitando que o usuário salve seu trabalho primeiro
            alert("Por favor, salve seu trabalho primeiro.");
        }
    });
});


