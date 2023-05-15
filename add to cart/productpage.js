function addToCart()
        {
            var productTitle = document.getElementById('product-name').textContent;
            var productPrice = document.getElementById('product-price').textContent;
            var selectedSize = checkRadio();

            var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

            var cartItem = {
                selectedSize: selectedSize,
                productTitle: productTitle,
                productPrice: productPrice
            };

            cartItems.push(cartItem);

            localStorage.setItem('cartItems', JSON.stringify(cartItems));

            window.location.href = "cart.html";
        }

        function checkRadio()
        {
            var a;
            let radio1 = document.getElementById('S');
            let radio2 = document.getElementById('M');
            let radio3 = document.getElementById('L');
            let radio4 = document.getElementById('XL');

            if(radio1.checked)
            {
                a = "S";
            }
            else if(radio2.checked)
            {
                a = "M";
            }
            else if(radio3.checked)
            {
                a = "L";
            }
            else if(radio4.checked)
            {
                a = "XL";
            }
            else {
                a = "XXL";
            }
            return a;
        }