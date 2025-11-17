
/*

Crea una clase ConfigManager que implemente el patrón Singleton.
Esta clase debe almacenar la configuración global de una aplicación (por ejemplo, tema, idioma, versión, usuario actual…).

Usa una propiedad privada y estática para guardar la instancia única.
Asegúrate de que aunque se ejecute new ConfigManager() varias veces, siempre recibe el mismo objeto

Demuestra el funcionamiento creando dos variables distintas (c1 y c2) y cambiando valores desde una, comprobando que cambian también en la otra.

*/
export class ConfigManager {
  static #instance = null;

  constructor() {
    if (ConfigManager.#instance) {
      return ConfigManager.#instance;
    }

    this.config = {
      theme: "light",
      language: "es",
      version: "1.0.0",
      user: null,
    };

    ConfigManager.#instance = this;
  }

  getParam(key) {j
    return this.config[key];
  }

  setParam(key, value) {
    this.config[key] = value;
  }

  getConfig() {
    return this.config;
  }
}

