class MiSingleton {
  static #instance = null; // campo estático privado

  constructor() {
    if (MiSingleton.#instance) {
      return MiSingleton.getInstance();
      // podríamos lanzar un error, depende del caso
      // throw new Error("Usa MiSingleton.getInstance()");
    }
    // inicialización…
    this.valor = Math.random();
  }

  static getInstance() {
    if (!MiSingleton.#instance) {
      MiSingleton.#instance = new MiSingleton();
    }
    return MiSingleton.#instance;
  }
}

// Ejemplo de uso
const a = MiSingleton.getInstance();
const b = MiSingleton.getInstance();

console.log(a === b); // true
console.log(a.valor, b.valor);
