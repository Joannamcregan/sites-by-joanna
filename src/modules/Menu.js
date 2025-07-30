class Menu {
    constructor() {
        this.menuIcon = document.getElementById('header--mobile-menu-icon');
        this.modeIcon = document.getElementById('header--mode-selector');
        this.events();
    }
    events(){
        this.menuIcon.addEventListener('click', ()=>{
            console.log('clicked');
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