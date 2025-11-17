export class ThemeStore {
  static instance;

  constructor() {
    if (ThemeStore.instance) return ThemeStore.instance;

    this.state = { theme: 'light' };
    this.subscribers = [];
    ThemeStore.instance = this;
  }

  subscribe(subscriber) {
    this.subscribers.push(subscriber);
  }

  notify() {
    this.subscribers.forEach(sub => sub.update(this.state));
  }

  toggleTheme() {
    this.state.theme = this.state.theme === 'light' ? 'dark' : 'light';
    this.notify();
  }
}


export class StoreSub {
  // recibe un nodo del DOM
  constructor(node) {
    this.node = node;
  }
  // recibe el estado state, que contiene { theme: 'light' } o {theme: 'dark'}
  update(state) {
    this.node.classList.remove('light', 'dark');
    this.node.classList.add(state.theme);
  }
}
