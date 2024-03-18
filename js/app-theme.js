const themeModeButton = document.querySelector("#sgapp-theme-mode-button");
let themeSelectIcon = null;

if (themeModeButton !== null)
{
    themeSelectIcon = themeModeButton.querySelector(".position-relative");
}

const body = document.querySelector("body");
const moonIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon align-middle"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>`;
const sunIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun align-middle"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>`;


function isDarkMode()
{
    let theme = body.getAttribute("data-theme");
    
    return (theme === "dark");
}

function refreshThemeSelectorIcon()
{
    if (isDarkMode())
    {
        themeSelectIcon.innerHTML = sunIcon;
    }
    else
    {
        themeSelectIcon.innerHTML = moonIcon;
    }
}

function applyAllTablesToDarkTheme()
{
    const listOfTables = document.querySelectorAll(".table");
        
    if ((listOfTables != null) && (listOfTables.length > 0))
    {
        listOfTables.forEach(table => {
            if (!table.classList.contains(`table-dark`))
            {
                table.classList.add(`table-dark`);
            }
        });
    }
}

function applyAllTablesToLightTheme()
{
    const listOfTables = document.querySelectorAll(".table");
        
    if ((listOfTables != null) && (listOfTables.length > 0))
    {
        listOfTables.forEach(table => {
            if (table.classList.contains(`table-dark`))
            {
                table.classList.remove(`table-dark`);
            }
        });
    }
}

function toggleTheme()
{
    if (isDarkMode())
    {
        setTheme("light");
    }
    else
    {
        setTheme("dark");
    }
}

function applyBrandLogoToDarkTheme()
{
    const brandLogoImg = document.querySelector("#sgapp-logo-img");
    brandLogoImg.setAttribute("src", "./img/logo-dark.png");
}

function applyBrandLogoToLightTheme()
{
    const brandLogoImg = document.querySelector("#sgapp-logo-img");
    brandLogoImg.setAttribute("src", "./img/logo.png");
}

function setTheme(theme)
{
    body.setAttribute("data-theme", theme);
    setCookie("sgapp-theme", theme);
    
    if (isDarkMode())
    {
        applyAllTablesToDarkTheme();
        applyBrandLogoToDarkTheme();
    }
    else
    {
        applyAllTablesToLightTheme();
        applyBrandLogoToLightTheme();
    }
    
    if (themeModeButton !== null)
    {
        refreshThemeSelectorIcon();
    }
}

// Get a cookie
function getCookie(cName)
{
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie); //to be careful
    const cArr = cDecoded .split('; ');
    
    let res;
    
    cArr.forEach(val => {
        if (val.indexOf(name) === 0) res = val.substring(name.length);
    });
    
    return res;
}

// Set a Cookie
function setCookie(cName, cValue, expDays)
{
    expDays = ((expDays !== null) && (expDays !== undefined)) ? expDays : 365;
    
    let date = new Date();
    date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
}

if (themeModeButton !== null)
{
    themeModeButton.addEventListener("click", event => {

        toggleTheme();

    });
}

// Test
//toggleTheme();

// Check user selected theme
let userTheme = getCookie("sgapp-theme");

if (userTheme !== undefined)
{
    setTheme(userTheme);
}