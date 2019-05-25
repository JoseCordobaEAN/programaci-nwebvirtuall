function cambio(){
    var valorSelector = document.getElementById('ir').value;
    var valorNombre = document.getElementById('nombre').value;
    var valorColor = document.getElementById('color').value;
    var valorNumero = document.getElementById('numero').value;
    
    var cadena = '<p>Seleccionó: </p>'+ valorSelector + '<br> ' + valorColor+ '<br> ' + valorNombre + '<br> ' + valorNumero
    
    document.getElementById('parrafo2').innerHTML = cadena;


}
btnCambio = document.getElementById("btnCambio");
btnCambio.addEventListener("click", cambio);