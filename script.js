//Dropdown Logic

var dropdownButton = document.querySelector('.header-dropdown-button');
var dropdownContainer = document.querySelector('.header-dropdown-container');

console.log(dropdownButton)

dropdownButton.addEventListener('mouseenter', function() {
    dropdownContainer.classList.add('expanded');
});

dropdownContainer.addEventListener('mouseenter', function() {
    dropdownContainer.classList.add('expanded');
});

dropdownButton.addEventListener('mouseleave', function() {
    dropdownContainer.classList.remove('expanded');
});

dropdownContainer.addEventListener('mouseleave', function() {
    dropdownContainer.classList.remove('expanded');
});
