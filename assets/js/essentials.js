const navigation = {
    showing: false,
    minSize: 0,
    toggler: null,
    navigation: null,

    /**
     * @param {String} navigation default is #jsNavigation
     * @param {String} toggler default is #jsNavigationToggler
     * @param {Number} minSize min window size
     */
    start(navigation = '#jsNavigation', toggler = '#jsNavigationToggler', minSize = 1280) {
        this.toggler = document.querySelector(toggler);
        this.navigation = document.querySelector(navigation);
        this.minSize = minSize;

        this.setEventsListener();
    },

    setEventsListener() {
        this.toggler.addEventListener('click', () => {
            this.handleTheClick();
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth >= this.minSize && this.navigation.style?.transform) {
                this.navigation.style.transform = null;
            }
        });
    },

    handleTheClick() {
        if (this.showing) {
            this.hidden();
        } else {
            this.show();
        }
    },

    show() {
        this.navigation.style.transform = 'translateX(0%)';

        document.addEventListener('click', (e) => {
            if (e.target === this.toggler) {
                return;
            }

            if (!this.navigation.contains(e.target) && window.innerWidth < this.minSize) {
                this.hidden();
            }
        });

        this.showing = true;
    },

    hidden() {
        this.navigation.style.transform = 'translateX(-100%)';

        this.showing = false;
    }
};

export { navigation };