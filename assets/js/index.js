let loginbtn = document.getElementById('log');
let singupbtn = document.getElementById('sig');
let welcom = document.getElementById('welc')
let logboard = document.getElementById('login')
let singupboard = document.getElementById('singup')
let refreasher = document.getElementById('refr');

loginbtn.addEventListener('click', () => {
    refreasher.style.display = "block";

    welcom.style.display= "none";
    logboard.style.display= "block";

    

})
singupbtn.addEventListener('click', () => {
    refreasher.style.display = "block";
    welcom.style.display= "none";
    singupboard.style.display= "block";


})

refreasher.addEventListener('click', () => {
    refreasher.style.display = "none";

    welcom.style.display= "block";
    logboard.style.display= "none";
    singupboard.style.display= "none";

})
