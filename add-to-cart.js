let items = [
    {id:01, name: "Product-title-1", image: "/images/5.jpg", price: 600, quantity: 1 },
    {id:02, name: "Product-title-2", image: "/images/5.jpg", price: 450, quantity: 1 },
    {id:03, name: "Product-title-3", image: "/images/6.jpg", price: 500, quantity: 1 },

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