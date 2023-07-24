let sidebar = document.querySelector(".sidebar"),
        closeBtn = document.querySelector(".sidebar__close"),
        cartButton = document.querySelector(".cart"),
        selection_db = document.getElementById("volumes1"),
        selection_dn = document.getElementById("volumes2"),
        selection_eva = document.getElementById("volumes3"),
        sidebar_cart = document.querySelector(".sidebar__cart-list"),
        cart_count = document.querySelector(".cart__counter"),
        cartItemList = document.querySelector(".cart-list"),
        cancelOrderBtn = document.querySelector(".sidebar__cancel"),
        checkoutBtn = document.querySelector(".sidebar__checkout"),
        total_price_res = document.querySelector(".total-price");


cartButton.addEventListener("click", ()=>{
    
    //open sidebar
    sidebar.style.width = "350px";
    
    if(cartItemList.classList.contains("hidden")){
        cartItemList.classList.remove("hidden");
    }
});



closeBtn.addEventListener("click", ()=>{
    sidebar.style.width = 0;
    
    if(!cartItemList.classList.contains("hidden")){
        cartItemList.classList.add("hidden");
    }
})



/* fill cart list */

let productArr = []; //array stores product infos


/// product selections
selection_db.addEventListener("input", ev =>{
        if(ev.target.value !== '--choose volume--'){
            productArr.push(ev.target.value);
        }

        checkout();
        getProducts();
        
        
});

selection_dn.addEventListener("input", ev =>{
    if(ev.target.value !== '--choose volume--'){
        productArr.push(ev.target.value);
    }

    checkout();
    getProducts();

});

selection_eva.addEventListener("input", ev =>{
    if(ev.target.value !== '--choose volume--'){
        productArr.push(ev.target.value);
    }

    checkout();
    getProducts();

});

function checkout(){

    ////enable checkout button
    if(productArr.length >= 0){
        checkoutBtn.classList.remove("disabled");
        checkoutBtn.setAttribute("href", "./checkout_form.php");
    }
    else if(productArr.length <=0){
        checkoutBtn.classList.add("disabled");
        checkoutBtn.setAttribute("href", "javascript: void(0)");
    }
}

// update counter, create cart list item
function getProducts(){
    const orderList = document.querySelector(".cart-list");
    let item = document.createElement("li");


    cart_count.textContent = productArr.length; //update order counter

    for (let i = 0; i < productArr.length; i++) {
        item.innerHTML = `${productArr[i]} <span>5.00$</span>`;
        item.className = "cart-item";
        orderList.appendChild(item);
    }

    sessionStorage.setItem("order", JSON.stringify(productArr));
   
    totalPrice();
    
}

/* calculte total price */
function totalPrice(){

    let total = 5 * productArr.length; // 5,00$ for each manga

    total_price_res.textContent = `${total},00 $`;

    sessionStorage.setItem("price", total);

}

/* Empty Cart & cancel order */
cancelOrderBtn.addEventListener("click", ()=>{

    const orderList = document.querySelector(".cart-list");

    productArr.splice(0, productArr.length);
    cart_count.textContent = productArr.length;
    orderList.innerHTML = '';
    
    sidebar.style.width = 0;

    sessionStorage.clear();
});



















