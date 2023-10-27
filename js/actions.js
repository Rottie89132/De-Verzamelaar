const DeleteFiles = async (idToDelete) => {
    const response = await fetch(`./server/delete.php?id=${idToDelete}`, {
        method: 'DELETE', headers: { 'Content-Type': 'application/json' }
    }); const data = await response.json()

    if (data.status == 200) {
        location.reload();
    }
}

const Updatefiles = async (idToUpdate) => {
    const form = document.querySelector('form');

    const response = await fetch(`./server/Data.php?id=${idToUpdate}`, {
        method: 'GET'
    }); const data = await response.json()

    document.getElementById("Naam").value = data[0].Naam
    document.getElementById("Prijs").value = data[0].Prijs
    document.getElementById("Vooraad").value = data[0].Vooraad
    document.getElementById("Beschrijving").value = data[0].Beschrijving
    document.getElementById("id").value = idToUpdate
    document.getElementById("id").setAttribute("name", "id")

    form.setAttribute('action', `./server/update.php`)

}


const Logout = async () => {
    document.cookie = "TokenUser=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    setTimeout(() => {
        window.location.href = "./Login.html";
    }, 500)
}