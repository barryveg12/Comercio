async function fetchProductos() {
    try {
        const response = await fetch('http://localhost/comercio/Apiphp/api/service?find=obtener_productos');
        const data = await response.json();

        if (data.error) {
            document.getElementById('resultado').innerText = data.error;
        } else {
            let html = '';
            data.forEach(producto => {
                html += `
                <div class="col-md-4">
                    <div class="card product-card">
                        <div class="card-body">
                            <h5 class="card-title">${producto.name}</h5>
                            <p class="card-text">${producto.description}</p>
                            <button class="btn btn-primary" onclick="agregarAlCarrito('${producto.name}', '${producto.description}')">Ver detalles</button>
                            <button class="btn btn-success" onclick="verProducto('${producto.name}', '${producto.description}', '${producto.price}')">Ver producto</button>
                        </div>
                    </div>
                </div>`;
            });
            document.getElementById('resultado').innerHTML = html;
        }
    } catch (error) {
        console.error('Hubo un error al obtener los datos:', error);
        document.getElementById('resultado').innerText = 'Hubo un error al obtener los datos.';
    }
}

function agregarAlCarrito(nombre, descripcion) {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    carrito.push({ nombre, descripcion });
    localStorage.setItem('carrito', JSON.stringify(carrito));
}

function verProducto(nombre, descripcion, precio) {
    // Redirigir al usuario a la página del producto con todos los detalles necesarios
    window.location.href = `producto.html?nombre=${encodeURIComponent(nombre)}&descripcion=${encodeURIComponent(descripcion)}&precio=${encodeURIComponent(precio)}`;
}

window.onload = fetchProductos;