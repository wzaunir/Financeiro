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
    
    //tabela.render();

});

