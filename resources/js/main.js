let modeIcon = document.querySelector('#modeIcon');
let mode = localStorage.getItem('mode');

function setLightMode(){
    document.documentElement.style.setProperty('--bg-main', '#F1F1F1')
    document.documentElement.style.setProperty('--text-main', '#1A1A1A')
}

function setDarkMode(){
    document.documentElement.style.setProperty('--text-main', '#F1F1F1')
    document.documentElement.style.setProperty('--bg-main', '#1A1A1A')
}

if (mode == "light"){
    setLightMode();
}else{
    setDarkMode();
}

modeIcon.addEventListener('click', () =>{
    if (mode === "light") {
        setDarkMode()
        localStorage.setItem('mode', 'dark')
        mode = localStorage.getItem('mode')
    }else{
        setLightMode()
        localStorage.setItem('mode', 'light')
        mode = localStorage.getItem('mode')
    }
})