//Dropdown Logic
const dropdownButton = document.querySelector('.header-dropdown-button');
const dropdownContainer = document.querySelector('.header-dropdown-container');
const eventButtonSpan = document.querySelector(".header-dropdown-button span");

function expand(){
    console.log("running expand");
    dropdownContainer.classList.add('expanded');
    eventButtonSpan.classList.remove('fa-angle-right');
    eventButtonSpan.classList.add('fa-angle-down');

}

function contract(){
    console.log("running contract");
    dropdownContainer.classList.remove('expanded');
    eventButtonSpan.classList.remove('fa-angle-down');
    eventButtonSpan.classList.add('fa-angle-right');
}

dropdownButton.addEventListener('mouseenter', expand);

dropdownContainer.addEventListener('mouseenter', expand);

dropdownButton.addEventListener('mouseleave', contract);

dropdownContainer.addEventListener('mouseleave', contract);

//Header opacity change on scroll logic
const header = document.querySelector('.header');
window.addEventListener('scroll', (e)=>{
    if(window.pageYOffset==0)
        header.classList.remove("translucent");
    else
        header.classList.add("translucent");
})
