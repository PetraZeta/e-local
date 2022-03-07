const carrito = document.querySelector('#carrito');

const contenedorCarrito = document.querySelector('#lista-carrito tbody');

const vaciarCarritoBtn = document.querySelector('#vaciar-carrito');

const listaProductos = document.querySelector('#lista-productos');

let articulosCarrito = [];

cargarEventListener();

function cargarEventListener() {
    //cuando agregas un producto usando agregar
    listaCursos.addEventListener('click', agregarProducto);
    //eliminar cursos del carrito
    carrito.addEventListener('click', eliminarProducto);
//mostrar los productos del storage
    document.addEventListener('DOMContentLoaded', () => {
        articulosCarrito = JSON.parse(localStorage.getItem('carrito')) || [];
        carritoHTML();
    });


    //vaciar carrito
    vaciarCarritoBtn.addEventListener('click', () => {
        articulosCarrito = []; //resetear carrito
        limpiarHTML(); 
    })

}
function agregarCurso(e) {
    e.preventDefault();
    if (e.target.classList.contains('agregar-carrito')) {
       
        const productoSeleccionado=e.target.parentElement.parentElement;

        leerDatosProducto(productoSeleccionado);
    }
    
}

function eliminarProducto(e) {
    
    if (e.target.classList.contains('borrar-producto')) {
        /*   console.log(e.target.getAttribute('data-id')); */
        //obtener id del producto a eliminar
        const productoId = e.target.getAttribute('data-id');
        //elimina con filter
        

        articulosCarrito = articulosCarrito.filter(producto => producto.id !== productoId);
        carritoHTML();//iterar sobre el carrito y mostrar su HTML
    }
}

//leer datos del producto y extraer el html
function leerDatosProducto(producto) {
    console.log(producto);
    //crear objeto con los datos del producto
    const infoProducto = {
        imagen: producto.querySelector('img').src,
        titulo: producto.querySelector('h4').textContent,
        precio: producto.querySelector('.precio span').textContent,
        id: producto.querySelector('a').getAttribute('data-id'),
        cantidad:1

    }
//revisa si ya existe el producto en el carrito
    const existe = articulosCarrito.some(producto => producto.id === infoProducto.id);
    if (existe) {
        //actualiza cantidad
        const productos = articulosCarrito.map(producto => {
            if (producto.id === infoProducto.id) {
                producto.cantidad++;
                return productos;
            } else {
                return producto;
            }
        });
        articulosCarrito = [...productos];
    } else {
         //agregar a arreglo de carrito
    articulosCarrito = [...articulosCarrito, infoCurso];
        
    }
    /*  console.log(infoProducto); */
   
    carritoHTML();

}

//muestra el carrito en html
function carritoHTML() {
    //limpiar html para q no aparezcan repetidos
    limpiarHTML();
    //recorre el carrito y genera html
    articulosCarrito.forEach(curso => {
        const row = document.createElement('tr');
        row.innerHTML = `
        <td>
            <img src="${producto.imagen}" width="100">
        </td>
        <td>
        ${producto.titulo}
        </td>
        <td>
        ${producto.precio}
        </td>
        <td>
        ${producto.cantidad}
        </td>
        <td>
          <a href="#" class="borrar-curso" data-id="${producto.id}">X</a>
        </td>
        `;
        //agreaga el html del carrito en el tbody
        contenedorCarrito.appendChild(row);

    });
    //agregar carrito al storage
    sincronizarStorage();
}
function sincronizarStorage() {
    localStorage.setItem('carrito', JSON.stringify(articulosCarrito));
}
//eliminar los cursos del tbody
function limpiarHTML() {
    //forma lenta
    /*   contenedorCarrito.innerHTML = ''; */
    //forma rapida
    while (contenedorCarrito.firstChild) {
        contenedorCarrito.removeChild(contenedorCarrito.firstChild);
    }
}