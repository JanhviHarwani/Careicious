let items = [
    {id:01, name: "FACE WASH", image: "Careicious/1.facewash.jpg", price: 999, quantity: 1 },
    {id:02, name: "FACE SERUM", image: "Careicious/4.faceserum.jpg", price: 499, quantity: 1 },
    {id:03, name: "FACE CREAM", image: "Careicious/8.facecream.jpg", price: 499, quantity: 1 },
    {id:04, name: "BODY LOTION", image: "Careicious/2. bodylotion.jpg", price: 899, quantity: 1 },
    {id:05, name: "SHAMPOO", image: "Careicious/3.shampoo.jpg", price: 1099, quantity: 1 },
    {id:06, name: "HAIR SERUM", image: "Careicious/5.hairserum.jpg", price: 899, quantity: 1 },
    {id:07, name: "SUNSCREEN LOTION", image: "Careicious/6.sunscreen lotion.jpg", price: 899, quantity: 1 },
    {id:08, name: "CONDITIONER", image: "Careicious/7.conditioner.jpg", price: 999, quantity: 1 },
    {id:09, name: "SOAP", image: "Careicious/9.soap.jpg", price: 599, quantity: 1 },

]

let showItemsNum = (totalQuantity) => {
    setTimeout(function(){
        document.getElementById("showItemsNum").innerHTML = totalQuantity

    }, 500)
}
let incrementItem = (index) => {
    let itemsAdded = JSON.parse(localStorage.getItem("cartList")) || [];
    if (itemsAdded) {
        var selectedItem = items[index]
        var itemExists = false;
        var totalQuantity = 0;
        for (var i = 0; i < itemsAdded.length; i++) {
            totalQuantity += itemsAdded[i].quantity;
            if (itemsAdded[i].id == selectedItem.id) {
                itemExists = true;
                itemsAdded[i].quantity++;
                break;
            }
        }
        if (!itemExists) {
            totalQuantity++;
            itemsAdded.push(items[index]);
        }
        showItemsNum(totalQuantity);
        localStorage.setItem("cartList", JSON.stringify(itemsAdded));

    }

}
let checkQuantity = () => {
    let itemsAdded = JSON.parse(localStorage.getItem("cartList")) || [];
    var totalQuantity = 0;
    if (itemsAdded) {
        for (var i = 0; i < itemsAdded.length; i++) {
            totalQuantity += itemsAdded[i].quantity;
        }
    }
    showItemsNum(totalQuantity);
}

checkQuantity();