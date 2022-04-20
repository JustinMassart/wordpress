class DW_controller {
    constructor() {
        console.log('Ça construit - constructor');
        // Ici, le DOM n'est pas encore prêt
        // Pour le moment, rien à faire.
    }

    run() {
        console.log('Ça cours - run');
        // Ici, le DOM est prêt.
    }

}

window.dw = new DW_controller();

window.addEventListener('load', () => window.dw.run())