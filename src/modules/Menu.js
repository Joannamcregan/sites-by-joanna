class Menu {
    constructor() {
        this.menuIcon = document.getElementById('header--mobile-menu-icon');
        this.events();
    }
    events(){
        this.menuIcon.addEventListener('click', ()=>{
            console.log('clicked');
        })
    }
}
export default Menu;