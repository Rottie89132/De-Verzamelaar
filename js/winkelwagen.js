

const AddToCard = async (ProductID) => {

    const Items = JSON.parse(window.localStorage.getItem("Card")) || new Array();
    const itemExists = Items.some((Object) => Object.ProductID === ProductID );

    if (!itemExists) {
        Items.push({ "ProductID": ProductID })
        window.localStorage.setItem("Card", JSON.stringify(Items));
    } 
}


const Winkelwagen = async () => {

}