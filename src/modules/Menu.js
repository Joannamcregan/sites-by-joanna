class Menu {
    constructor() {
        this.menuIcon = document.getElementById('header--mobile-menu-icon');
        this.modeIcon = document.getElementById('header--mode-selector');
        this.mobileMenu = document.getElementById('mobile-menu-overlay');
        this.events();
    }
    events(){
        this.menuIcon.addEventListener('click', ()=>{
            // document.body.classList.add('body-no-scroll');
            this.mobileMenu.classList.remove('hidden');
            this.mobileMenu.classList.add('mobile-menu-overlay--active');
        });
        this.modeIcon.addEventListener('click', ()=>{
            if (document.body.classList.contains('light')){
                document.body.classList.add('dark');
                document.body.classList.remove('light');
            } else {
                document.body.classList.add('light');
                document.body.classList.remove('dark');
            }
        })
    }
}
export default Menu;