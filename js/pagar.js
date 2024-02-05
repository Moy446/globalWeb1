const datosStorage = JSON.parse(localStorage.getItem('carrito'));
const TableProductos = document.querySelector('#tablaPagar');
const txtTotal = document.querySelector('#txtTotal');
const pagar = document.querySelector('#btnPagar');
let totalCompra = 0;
let articulosPagar=[];

cargarEventListener()
function cargarEventListener(){
    pagar.addEventListener('click', procesoPago);
}

imprimirDatos();
function imprimirDatos(){
    datosStorage.forEach(carrito => {
        const row = document.createElement('tr');
        const cantidad = parseFloat(carrito.Cantidad);
        const precio = parseFloat(carrito.Precio);
        total = cantidad * precio;
        row.innerHTML=`
        <td><img src ="${carrito.img}" width ="100"></td>
        <td>${carrito.Nombre}</td>
        <td>${carrito.Precio}</td>
        <td>${carrito.Cantidad}</td>
        <td>${total}</td>
        `;
        totalCompra += total;

        TableProductos.appendChild(row);
    });
    txtTotal.textContent = txtTotal.textContent +parseFloat(totalCompra);

}

function procesoPago(){
    console.log('pago');
    datosStorage.forEach(carrito => {
        const infoPagar ={
            id: carrito.id,
            Cantidad: carrito.Cantidad,
            Precio: carrito.Precio
        };
        articulosPagar = [...articulosPagar,infoPagar];
    });
    enviarPago(articulosPagar);
}
function enviarPago(articulos){
    console.log(JSON.stringify(articulos));
    let articulosFinales = [];
    articulosFinales = JSON.stringify({datos: articulos});
    fetch('./php/subirPago.php',{
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: articulosFinales
    }).then(response => response.text()).then(data =>{
        console.log(data);
        if(data ==='Se realizo la compra correctamente'){
            localStorage.removeItem('carrito');
            alert(data);
            window.location='./index.php'
        }
    }).catch (error=> console.error(error));
}