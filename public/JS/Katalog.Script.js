document.addEventListener("DOMContentLoaded", () => {
    const boxes = document.querySelectorAll(".box");

    boxes.forEach((box) => {
        console.dir(box);

        const button = box.querySelector("button");
        const image = box.querySelector(".imageKatalog");
        const title = box.querySelector(".titleKatalog");

        console.log(button, image, title);

        if (button) {
            button.classList.add("custom-button"); // Add custom class to the button

            button.addEventListener("click", () => {
                const cartStorage = localStorage.getItem("cart") || "[]";
                const cart = JSON.parse(cartStorage);

                const itemIndex = cart.findIndex(item => item.title === title.textContent);
                if (itemIndex === -1) {
                    const item = { image: image.src, title: title.textContent };
                    cart.push(item);
                    localStorage.setItem("cart", JSON.stringify(cart));
                } else {
                    console.log("Item already exists in the cart!");
                }
            });
        }
    });
});
