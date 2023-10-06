import { getCookie } from "./cookie.js"

window.onsubmit = async (event) => {
    event.preventDefault()
    const Code = document.querySelector("#PassCode")
    const message = document.querySelector("#Error")

    const response = await fetch(`./server/auth?PassCode=${Code.value}`, {
        method: 'POST', headers: { 'Content-Type': 'application/json'}
    }); const data = await response.json()

    if (data.status == 200){
        message.style.color = "Green"
        window.location.replace("./Admin.php")
    } 

    message.innerHTML = data.message
    Code.value = null
        
}


window.onload = async () => {

    const Code = getCookie('TokenUser');
    console.log(Code)

    const response = await fetch(`./server/auth?PassCode=${Code}`, {
        method: 'POST', headers: { 'Content-Type': 'application/json' }
    }); const data = await response.json()

    if (data.status == 200) {
        window.location.replace("./Admin.php")
    }

}