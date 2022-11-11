// FORMULÁRIOS
//--------------------------------------
document.addEventListener("DOMContentLoaded", function(event) {
    
   // TELEFONE E CELULAR
    //--------------------------------------
    // var SPMaskBehavior = function (val) {
    //     return val.replace(/D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    // },
    // spOptions = {
    //     onKeyPress: function(val, e, field, options) {
    //         field.mask(SPMaskBehavior.apply({}, arguments), options);
    //     }
    // };

    // MASKS
    //--------------------------------------
    // document.querySelector('input[name="telefone"]').mask(SPMaskBehavior, spOptions);
    // document.querySelector('input[name="celular"]').mask(SPMaskBehavior, spOptions);
    // document.querySelector('input[name="cep"]').mask('00000-000');
    // document.querySelector('input[name="cpf"]').mask('000.000.000-00', {reverse: true});
    // document.querySelector('input[name="cnpj"]').mask('00.000.000/0000-00', {reverse: true});
    // document.querySelector('input[name="money"]').mask('000.000.000.000.000,00', {reverse: true});
    // document.querySelector('.date-formated').mask("00/00/0000", {placeholder: "__/__/____"});


    // CIDADE E ESTADO
    //--------------------------------------
    var api = "../wp-content/themes/arteminas-storefront-child-theme-master/assets/json/city_state.json";
    var db = [];

    function fetchDb(json, cb) {
        $.getJSON(json, function(item) {
            item.estados.forEach(function(geo) {
                db.push(geo);
            })
        }).done(cb);
    }

    function renderEstado() {
        db.forEach(function(item) {
            document.querySelector(".uf").insertAdjacentHTML("beforeend",'<option value="' + item.sigla + '">' + item.nome + '</option>');
        });
    }

    function renderCity(uf, cidade) {
        var cidades = db.filter((e) =>  e.sigla === uf);

        cidades[0].cidades.forEach(function(nome) {
            cidade.insertAdjacentHTML("beforeend", '<option value="' + nome + '">' + nome + '</option>' );
        });
    }

    function cleanSelect(select) {
        select.querySelector('option').not(':first').remove();
    }

    fetchDb(api, renderEstado);
    document.querySelector('.city').attr('disabled', true);

    document.querySelector('.uf').change(function() {
        var cidade = document.querySelector('.city');
        var ufid = document.querySelector(this).value;

        cleanSelect(cidade);
        renderCity(ufid, cidade);
        cidade.attr("disabled", false);
    });

});
