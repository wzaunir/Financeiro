
var Registro = Backbone.Model.extend({
    defaults: {
        data: "",
        desc: "",
        cat: "",
        tipo: "D",
        valor: 0.00
    }

});

var ContaCorrente = Backbone.Collection.extend({
    model: Registro,
    url: '/php/dados.php',
    update: function(){
        
        this.sync('update',this);
    }
});

var Tabela = Backbone.View.extend({
    el: '#tbl-cc',
    initialize: function(opt) {
        this.coll = opt.coll;
        this.listenTo(this.coll, "sync", this.render);
        this.listenTo(this.coll, "add", this.render);
    },
    render: function() {
        $(this.el).find('tbody').empty();

        var el = $(this.el);



        this.coll.each(function(elem, i) {

            var classe = (elem.get('tipo') == 'D') ? 'negativo' : 'positivo';
            var tr = $('<tr><td>' + elem.get('data') + '</td>\n\
                        <td>' + elem.get('desc') + '</td>\n\
                        <td>' + elem.get('cat') + '</td>\n\
                        <td>' + elem.get('tipo') + '</td>\n\
                        <td class="valor ' + classe + '">' + elem.get('valor') + '</td>\n\
                        </tr>');

            el.find('tbody').append(tr);
        })

    }

});

var Saldo = Backbone.View.extend({
    el: "#saldo-total",
    initialize: function(opt) {
        this.coll = opt.coll;
        this.listenTo(this.coll, "sync", this.render);
        this.listenTo(this.coll, "add", this.render);
    },
    render: function() {
        var el = $(this.el);
        el.find('tbody').empty();
        var saldo = 0;

        this.coll.each(function(elem, i) {

            saldo += elem.get('valor');

        })
        var classe = (saldo < 0) ? 'negativo' : 'positivo';
        $(this.el).html(saldo.toFixed(2)).addClass(classe);

    }
})