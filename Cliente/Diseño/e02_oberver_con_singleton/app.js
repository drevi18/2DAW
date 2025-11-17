import { ThemeStore , StoreSub } from './Store.js';

// Aquí inicializamos directamente el singleton
const store = new ThemeStore();

// Creamos los subscribers para cada elemento
const bodySub = new StoreSub(document.body);
const headerSub = new StoreSub(document.querySelector('h1#mainHeader'));
const btnSub = new StoreSub(document.querySelector('button#toggleThemeBtn'));
const containerSub = new StoreSub(document.querySelector('.container'));
const boxesSub = Array.from(document.querySelectorAll('.box')).map(
  box => new StoreSub(box)
);

// Suscribimos al store
store.subscribe(bodySub);
store.subscribe(headerSub);
store.subscribe(btnSub);
store.subscribe(containerSub);
boxesSub.forEach(boxSub => store.subscribe(boxSub));

// Evento del botón
document.querySelector('#toggleThemeBtn').addEventListener('click', () => {
  store.toggleTheme();
});

// Inicializamos la vista la primera vez con el tema por defecto


store.notify();
