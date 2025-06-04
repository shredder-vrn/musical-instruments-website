const cartContainer = document.querySelector(".boxes_ppp");

if (cartContainer) {
    const cartItems = JSON.parse(localStorage.getItem("cart") || "[]");

    if (cartItems.length) {
        cartItems.forEach(item => {
            const { image, title } = item;

            const newItemBox = document.createElement("div");
            newItemBox.classList.add("box");
            newItemBox.classList.add("d-flex");

            newItemBox.innerHTML = `
                <div class="box_ppp">
                    <img class="imageKatalog" src="${image}" alt="${title}" width="300" height="225">
                    <figcaption></figcaption>
                    <a class="titleKatalog" href="Katalog.Irina.html">${title}</a>
                    <figcaption></figcaption>
                    <button class="remove-item button">Удалить из закладок</button>
                </div>
            `;

            const removeButton = newItemBox.querySelector(".remove-item");
            removeButton.addEventListener("click", () => {
                const updatedCartItems = cartItems.filter(cartItem => cartItem.title !== title);
                localStorage.setItem("cart", JSON.stringify(updatedCartItems));
                newItemBox.remove();
            });

            cartContainer.appendChild(newItemBox);
        });
    }
}

const clearButton = document.getElementById("clear-cart");
if (clearButton) {
    clearButton.addEventListener("click", () => {
        localStorage.removeItem("cart");
        cartContainer.innerHTML = ""; 
    });
}
