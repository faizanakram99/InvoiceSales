
var j = 1;
var _invoice_products =  document.getElementById("invoice_products");
var _addDiv = document.getElementById("addDiv");
var totalAmount = 0;
var obj;

obj = {
    _setDescription: function (j) {
        var _str = _invoice_products.getAttribute("data-prototype").replace(/__name__/g, j);
        var i = _str.indexOf("input");
        var n = _str.indexOf("/>");
        return _str.substring(--i, n + 2);
    },

    _setAmount: function (j) {
        var _str = _invoice_products.getAttribute("data-prototype").replace(/__name__/g, j);
        var i = _str.lastIndexOf("input");
        var n = _str.lastIndexOf("/>");
        return _str.substring(--i, n + 2);
    }

};



//<span class="input-group-addon" id="basic-addon2">@example.com</span>

function add()
{
    var div = document.createElement("div");
    var div1 = document.createElement("div");
    var div2 = document.createElement("div");
    var btnClose = document.createElement("a");

    div.setAttribute("class", "form-group clearfix");
    div1.setAttribute("class", "col-md-8 col-xs-12 description");
    div2.setAttribute("class", "col-md-3 col-xs-6");
    btnClose.setAttribute("class", "col-md-1 col-xs-6 btnClose");
    btnClose.addEventListener("click",function () {
        this.parentNode.parentNode.removeChild(this.parentNode);
        totalAmount = totalAmount - Number(this.parentNode.getElementsByTagName("div")[1].firstChild.value);
        document.getElementById("total-amount").innerText = totalAmount.toString() + "$";
    });
    btnClose.innerText="X";


    _addDiv.appendChild(div);
    div.appendChild(div1);
    div.appendChild(div2);
    div.appendChild(btnClose);

    div1.innerHTML= obj._setDescription(j);
    div1.firstChild.setAttribute("class", "form-control");
    div1.firstChild.setAttribute("placeholder", "Description");

    div2.innerHTML = obj._setAmount(j);
    div2.firstChild.setAttribute("class", "form-control");
    div2.firstChild.setAttribute("placeholder", "Amount");




    div2.firstChild.addEventListener("change", function () {
        totalAmount = totalAmount + Number(div2.firstChild.value);
        document.getElementById("total-amount").innerText = totalAmount.toString() + "$";
    });

    j ++;
}


