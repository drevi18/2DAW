// -------------------- Variables --------------------
const divPos = document.getElementById("posicion"); // div para coordenadas
const contenedorPalabras = document.getElementById("palabras"); // contenedor de palabras
const botonAgregar = document.getElementById("agregar"); // botón para ingresar texto

// -------------------- Funciones --------------------

// Mostrar posición del ratón
document.addEventListener("mousemove", e => {
    divPos.textContent = `X: ${e.clientX}, Y: ${e.clientY}`;
});

// Pedir texto y dividirlo en palabras
const agregarPalabras = () => {
    const texto = prompt("Introduce un texto:");
    if(!texto) return;
    const palabras = texto.split(" "); // split en array
    contenedorPalabras.innerHTML = ""; // limpiar contenedor

    palabras.forEach((pal, idx) => {
        const span = document.createElement("span");
        span.textContent = pal + " ";
        span.dataset.index = idx; // guardamos índice en dataset
        span.addEventListener("mouseover", () => console.log(`Hover palabra #${idx}: ${pal}`));
        contenedorPalabras.appendChild(span);
    });

    // Guardar en localStorage
    localStorage.setItem("palabras", JSON.stringify(palabras));
};

// Recuperar palabras guardadas al cargar
const cargarPalabras = () => {
    const data = localStorage.getItem("palabras");
    if(data){
        const palabras = JSON.parse(data);
        contenedorPalabras.innerHTML = "";
        palabras.forEach((pal, idx) => {
            const span = document.createElement("span");
            span.textContent = pal + " ";
            span.dataset.index = idx;
            contenedorPalabras.appendChild(span);
        });
    }
};

// -------------------- Eventos --------------------
botonAgregar.addEventListener("click", agregarPalabras);

// -------------------- Inicialización --------------------
cargarPalabras();
