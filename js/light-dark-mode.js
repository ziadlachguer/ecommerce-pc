const a = document.getElementsByTagName("html")[0]

const themeButton = document.getElementById("themeButton")

localStorage.setItem("myCat", "Tom");


themeButton.addEventListener('click', changeTheme)

function changeTheme() {
    const theme = a.getAttribute("data-theme")
    const icon = document.getElementById("ii")
    

    if (theme === "light") {
        a.setAttribute("data-theme", "dark")
        icon.setAttribute("class", "fas fa-lg fa-moon")
    } else {
        a.setAttribute("data-theme", "light")
        icon.setAttribute("class", "fas fa-lg fa-sun")
    }
}

