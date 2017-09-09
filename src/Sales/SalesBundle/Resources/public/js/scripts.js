document.addEventListener("DOMContentLoaded", () => {

    /**
     * @type {Element}
     * Cache DOM
     */
    const products = document.querySelector("#products"),
          addProductButton = document.querySelector("#addProduct"),
          total = document.querySelector("#total"),
          template = document.createElement("template")

    if(!products) return;

    /**
     * @type {Number}
     * init variables
     */
    let counter = products.children.length;

    /**
     * @param {Number} index
     * The index of node, starts from 0, this is used to keep name attribute unique
     * @returns {Element} (Product Element)
     */
    let product = (index) => {
        template.innerHTML = `
            <div class="form-group">
                <div class="col-xs-12 col-md-8 description">
                    <input type="text" 
                           name="invoice[products][${index}][description]" 
                           class="form-control" 
                           placeholder="Description"
                           required />
                </div>
                <div class="col-xs-6 col-md-3">
                    <input type="text" 
                           name="invoice[products][${index}][amount]"
                           class="form-control amount" 
                           placeholder="Amount"
                           required />
                </div>
                <a class="col-md-1 col-xs-6 btn btn-info btn-danger removeProduct">X</a>
            </div>
        `;

        return template.content.firstElementChild;
    };

    /**
     * Event Listener of #addProduct Button,
     * appends child (Product Element) to products (div.#products)
     */
    const addProduct = () => products.appendChild(product(counter++));

    /**
     * @param {Event|null} event
     * Calculates total amount and updates #total.textContent
     */
    const updateTotalAmount = (event = null) => {
        //If amount is changed, update total amount
        if(!event || event.target.classList.contains("amount")){
            /** @type {Number} */
            let totalAmount = 0;

            /**
             * @type {Array}
             * Array of input.amount elements
             */
            let amountElements = Array.from(document.querySelectorAll(".amount"));
            amountElements.forEach((elm) => totalAmount += Number(elm.value));
            total.textContent = totalAmount.toString();
        }
    };

    /**
     * @param {Event} event
     * Event Listener of .removeProduct Button,
     * Deletes Element (Product Element) and updates total amount
     */
    const deleteProduct = (event) => {
        //Clicked element
        let elm = event.target;

        //If 'X' button is clicked, delete the element and update total amount
        if(elm.classList.contains("removeProduct")){
            elm.parentNode.parentNode.removeChild(elm.parentNode);
            updateTotalAmount();
        }
    };

    /**
     * Bind Event Listeners
     */
    addProductButton.addEventListener("click", addProduct);
    products.addEventListener("click", deleteProduct);
    products.addEventListener("input", updateTotalAmount);
});


