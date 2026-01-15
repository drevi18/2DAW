"use strict";

// MODIFICA EL CÓDIGO ABAJO --------------------
class Luz {
  #id; // El ID debe ser privado
  constructor(nombre) {
    this.nombre = nombre;
    this.estado = "apagada";
    this.timer = null;
    this.#id = Math.random().toString(36).substr(2, 9);
  }

  // Crea un método llamado 'encender' que reciba un elemento del DOM (li)
  // Debe cambiar el estado a "encendida" e iniciar un setTimeout de 5 segundos
  // que añada la clase "urgente" al li. Guarda el ID del timer en this.timer.
  encender(liElement) {
    this.estado = "encendida";
   this.timer = setTimeout(()=>{
      liElement.classList.add("urgente");
      console.log(`${this.nombre} ha pasado a estado urgente.`);
    },5000);
  }

  // Crea un método 'fundir' que limpie el temporizador si existe
  fundir() {
    if (this.timer != null ) {
      clearTimeout(this.timer);
    }
  }
}

class Centralita {
  constructor() {
    this.luces = []; // Array de objetos Luz
  }

  // Añade una luz al array y devuelve el total de luces
  añadirLuz(luz) {
    this.luces.push(luz);
    return this.luces.length
  }
}
// FIN MODIFICA EL CÓDIGO ---------------------

const miCentralita = new Centralita();

// Simulación de uso:
const luzSalon = new Luz("Salón");
miCentralita.añadirLuz(luzSalon);
console.log("Luces activas:", miCentralita.luces.length);