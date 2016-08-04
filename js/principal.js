$(document).ready(function() {

    var listagem = new ContaCorrente();
    listagem.fetch();

    var tabela = new Tabela({
        coll: listagem
    });

    //tabela.render();

    var saldo = new Saldo({
        coll: listagem
    });


    $('#data').datepicker({
        endDate: "today",
        language: "pt-BR",
        todayBtn: "linked",
    });
    
    $('#valor').maskMoney();
    
    $("#salvar").click(function(){
        
        valor = $('#valor').maskMoney('unmasked')[0];
        tipo = $('[name=tipo]:checked').val();

        valor = (tipo == 'D') ? valor * -1 : valor;
       
        var valores = {
            data: $('#data').val(),
            desc: $('#desc').val(),
            cat:  $('#cat').val(),
            tipo: $('[name=tipo]:checked').val(),
            valor: valor
            
        }
        listagem.add(valores);
        
        
        
        $("#form-add").modal('hide');
       
        $('#form-add').find('input[type="text"]').val('');
        
        listagem.update();
        console.log(listagem);
        
    });
});

