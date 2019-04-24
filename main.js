//alert('Hola usuario');
var btn = document.getElementById("hola");


/**
 * Retorna los elementos seleccionados de un selector multiple
 * @param   {object}   sel El selector multiple
 * @returns {[]} Los elementos seleccionados
 */
function seleccionados(sel){
    var retorno = [];

    for(var i= 0; i < sel.options.length; i++){
        var val = sel.options[i];

        if (val.selected){
            retorno.push(val);
        }
    }
    return retorno;
}


/**
 * Guarda en consola los elementos seleccionados
 */
function click(){
    var sel = document.getElementById("selector");
    var sele = seleccionados(sel);
    console.log(sele);
}

btn.addEventListener("click", click);
