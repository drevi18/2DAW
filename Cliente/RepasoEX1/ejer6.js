const añadir  = document.getElementById("añadir") ;

const contenedor  = document.getElementById("Tareas") ;

const completar = document.getElementById("completar") ;
// const numEliminar  = document.getElementById("numEliminar").value ;
const eliminar = document.getElementById("eliminar") ;
let arrayTareas =[];
let id = 0;


function anyadir(tarea,contenedor){
    id++;
    let nueva = {
        "id" : id,
        "tarea" : tarea
    }
    arrayTareas.push(nueva);

    let p = document.createElement("p");
    arrayTareas.forEach(element => {
        p.textContent = element.id+" "+element.tarea; 
        contenedor.appendChild(p);
    });

    setCookie("tareas", JSON.stringify(arrayTareas), 10); // 10 segundos

}

function elim(numEliminar,contenedor){
    arrayTareas = arrayTareas.filter(tar => tar.id != numEliminar)

    contenedor.innerHTML = "";
    arrayTareas.forEach(element => {
        let p = document.createElement("p");
        p.textContent = element.id+" "+element.tarea; 
        contenedor.appendChild(p);
    });
}


// Crear o actualizar una cookie con duración en segundos
function setCookie(nombre, valor, segundos) {
    let fecha = new Date();
    fecha.setTime(fecha.getTime() + (segundos * 1000)); // segundos a milisegundos
    let expira = "expires=" + fecha.toUTCString();
    document.cookie = nombre + "=" + encodeURIComponent(valor) + ";" + expira + ";path=/";
}



añadir.addEventListener("click", (evento) => {
    evento.preventDefault();

    const tarea = document.getElementById("textonueva").value;


    anyadir(tarea,contenedor);

});

eliminar.addEventListener("click", (evento) =>{
    evento.preventDefault();

    const numCompletar  = document.getElementById("numCompletar").value ;
    const numEliminar  = document.getElementById("numEliminar").value ;

    elim(numEliminar,contenedor);

})


