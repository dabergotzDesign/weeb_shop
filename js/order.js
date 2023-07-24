/* FORM ORDER SCREEN OVERLAY */
let cancelOrder = document.getElementById("cancel-btn");

if(cancelOrder){
    cancelOrder.addEventListener("click", ()=>{
        sessionStorage.clear();
    });
}





/* SUCCESSFUL ORDER SCREEN OVERLAY */
let orderList = document.querySelector(".order-list-items");
let orderPrice = document.querySelector(".order__price");

let order = JSON.parse(sessionStorage.getItem("order"));
let price = sessionStorage.getItem("price");

const returnBtn = document.querySelector(".order__return");

for (let i = 0; i < order.length; i++) {
        
    let orderItem = document.createElement("li");
    orderItem.className = "order-item";
    orderItem.textContent = order[i];
    
    orderList.appendChild(orderItem);

}

orderPrice.textContent = price + ",00$";

if(returnBtn){
    returnBtn.addEventListener("click", ()=>{
        sessionStorage.clear();
    });
}
