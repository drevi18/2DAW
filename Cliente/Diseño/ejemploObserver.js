class EventBus {
  constructor() {
    this.events = {};
  }

  subscribeOnEvent(eventName, newSubscirber) {
    if (!this.events[eventName]) {
      this.events[eventName] = [];
    }

    // nuevo subcriptor a un tipo de evento concreto
    this.events[eventName].push(newSubscirber);
  }

  unsubscribe(eventName, subscriber) {
    if (!this.events[eventName]) return;

    // actualiza la lista de subcriptores
    this.events[eventName] =
      this.events[eventName].filter(obj => obj !== subscriber);
  }


  emit(eventName, data) {
    if (!this.events[eventName]) return;

    // Cada observer DEBE tener update()
    this.events[eventName].forEach(sub => sub.update(data));
  }
}

class Subscriber {
  constructor(name) {
    this.name = name;
  }

  update(data) {
    console.log(`[${this.name}] recibió:`, data);
  }
}

// Prueba
const bus = new EventBus();
const s1 = new Subscriber("A");
const s2 = new Subscriber("B");
const s3 = new Subscriber("C");

// Suscribimos a un evento, por ejemplo "mensaje"
bus.subscribeOnEvent("click", s1);
bus.subscribeOnEvent("click", s2);
bus.subscribeOnEvent("focus", s3);

// Emitimos el evento "mensaje"
bus.emit("click", "Se ha usado click!");
bus.emit("focus", "Se ha usado focus!");

bus.unsubscribe("click",s1);
bus.emit("click", "segundo click!");