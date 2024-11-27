function submit(){
  const {value} = document.getElementById ("inp");
  const baseUrl = "https://google.com/search?q=";
  location.replace(baseUrl + value);
}

// Select the menu icon and menu elements
const menuIcon = document.getElementById('popup');
const menu = document.getElementById('menu');

// Add a click event listener to the menu icon
menuIcon.addEventListener('click', function() {
    // Toggle the display of the menu
    if (menu.style.display === 'flex') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'flex';
    }
});
