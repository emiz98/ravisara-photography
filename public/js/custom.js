const cookieContainer = document.querySelector(".cookie-container")
const cookieButton = document.querySelector(".cookie-banner-button")

cookieButton.addEventListener("click", ()=>{
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true")
})

setTimeout(()=>{
    if(!localStorage.getItem("cookieBannerDisplayed")){
        cookieContainer.classList.add("active")
    }
}, 3000)
