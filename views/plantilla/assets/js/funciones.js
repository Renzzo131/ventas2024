/**Carrito de compras */
function sumarcantidad() {
    var precio = document.getElementById('precio_p1').value;
    var cantidad = document.getElementById('cantidad_p1').value;
    var nueva_cantidad = parseInt(cantidad) + 1;
    document.getElementById('cantidad_p1').value = nueva_cantidad;
    calcular_subtotal(precio, nueva_cantidad);
}
function restarcantidad() {
    var precio = document.getElementById('precio_p1').value;
    var cantidad = document.getElementById('cantidad_p1').value;
    if (cantidad > 1) {
        var nueva_cantidad = parseInt(cantidad) - 1;
        document.getElementById('cantidad_p1').value = nueva_cantidad;
        calcular_subtotal(precio, nueva_cantidad);
    }

}
function calcular_subtotal(precio, cantidad) {
    var subtotal = precio * cantidad;
    document.getElementById('subtotal').innerHTML = 'S/. ' + subtotal;
}

/*------Detalle del producto-------*/
function sumarcantidaddetalle() {
    var cantidad = document.getElementById('cantidad_p1').value;
    var nueva_cantidad = parseInt(cantidad) + 1;
    document.getElementById('cantidad_p1').value = nueva_cantidad;
    calcular_subtotal(precio, nueva_cantidad);
}
function restarcantidaddetalle() {
    var cantidad = document.getElementById('cantidad_p1').value;
    if (cantidad > 1) {
        var nueva_cantidad = parseInt(cantidad) - 1;
        document.getElementById('cantidad_p1').value = nueva_cantidad;
        calcular_subtotal(precio, nueva_cantidad);
    }

}
/**-----Precio filtro-------*/
const price = document.querySelector("#price");
const output = document.querySelector(".price-output");

output.textContent = preciop.value;

preciop.addEventListener("input", function () {
    output.textContent = preciop.value;
});