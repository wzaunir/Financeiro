
var Cidades = Backbone.Model.extend({
    defaults: {
        nome: "",
        uf: ""
    }

});

var ListaCidades = Backbone.Collection.extend({
  model: Cidades,
  url: '/js/cidades.json'
});

var Listagem = Backbone.View.extend({
    
    el: '#lista',
    model:{},
    initialize: function(opt) {
        this.model = opt.model;
        this.listenTo(this.model, "add", this.render);
        this.listenTo(this.model, "change", this.render);
    },
    render: function(){
        $(this.el).empty();
        
        var el = $(this.el);
        this.model.each(function(elem,i){
            var cidade = elem.get('nome');
            $('<li>'+cidade+'</li>').appendTo(el);
        })
       
    }
    
})

