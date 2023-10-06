import { getCookie } from "./cookie.js"

window.onload = async () => {

    const Code = getCookie('TokenUser');
    if (!Code) window.location.replace("./Login.html")

    const response = await fetch(`./server/auth?PassCode=${Code}`, {
        method: 'POST', headers: { 'Content-Type': 'application/json' }
    }); const data = await response.json()

    if (data.status != 200) {
        window.location.replace("./Login.html")
    }

}



