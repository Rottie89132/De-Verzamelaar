const ToonWagen = () => {
    const Card = JSON.parse(window.localStorage.getItem("Card"));
    const ToonPrijs = document.querySelector("#TotaalPrijs");
    const IDs = document.querySelector("#BestelIDs");
    const Winkel = document.querySelector("#Winkel");
    let tootaalprijs = 0;

    document.querySelector("#Winkel").innerHTML = ``
    document.querySelector("#BestelIDs").innerHTML = "";

    Card.forEach(async element => {
        const request = await fetch(`./server/mandje.php?id=${element.ProductID}`, {
            method: 'GET', headers: { 'Content-Type': 'application/json' }
        }); const data = await request.json()

        tootaalprijs += Number(data[0].Prijs)
        ToonPrijs.innerHTML = `€${tootaalprijs}`
        
        IDs.innerHTML += `
            <input type="hidden" name="ItemID[]" value="${data[0].ItemId}"/>
        `

        Winkel.innerHTML += `
        <tr class="border-b border-gray-200 group hover:bg-gray-100">
            <td class="px-4 py-3 text-left">${data[0].Naam}</td>
            <td class="px-4 py-3 text-left">€${data[0].Prijs}</td>
            <td class="px-4 py-3 text-center group-hover:opacity-100 text-red-500 opacity-60 "><i onclick="verwijder(${data[0].ItemId})" class="fa-solid fa-trash"></i></td>
        </tr>`
    });
}

const verwijder = (ItemId) => {
    const ItemsData = JSON.parse(window.localStorage.getItem("Card"));
    const bijgewerkteItems = ItemsData.filter(item => item.ProductID !== ItemId);

    if(bijgewerkteItems.length < 1) {
        document.querySelector("#TotaalPrijs").innerHTML = "€0"
        document.querySelector("#BestelIDs").innerHTML = "";
    }

    localStorage.setItem("Card", JSON.stringify(bijgewerkteItems));
    ToonWagen()
    
}

const StapTerug = () => {
    const Winkelwagen = document.querySelector("#Winkelwagen");
    const Formulier = document.querySelector("#Formulier");
    Winkelwagen.style.display = "block"
    Formulier.style.display = "none"
}

const Volgendestap = () => {
    const Winkelwagen = document.querySelector("#Winkelwagen");
    const Formulier = document.querySelector("#Formulier");
    Winkelwagen.style.display = "none"
    Formulier.style.display = "block"
}


window.onload = async () => {
    ToonWagen()
}




