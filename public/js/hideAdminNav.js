let hideNavSide = document.getElementById('hideNavSide')
let menu = document.getElementsByClassName('leftside-menu')

// Add click event listener to the slider span element
// showHideButton.querySelector('.slider').addEventListener('click', function() {
//     showNavState = !showNavState;
//     if (showNavState === true) {
//         navBar.style.display = 'block';
//         showNavState = true;
//     } else {
//         navBar.style.display = 'none';
//         showNavState = false;
//     }
// });
// let showStripe = true
hideNavSide.addEventListener('click', () =>{
    console.log(menu[0].clientWidth)
    if (menu[0].clientWidth !== 70){
        document.getElementById('stripeLogo').style.display = 'none'
    }else{
        document.getElementById('stripeLogo').style.display = 'block'
    }
})
