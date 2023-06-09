var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        cartItems.forEach(function(cartItem, index) {
            var tableRow = document.createElement('tr');

            var tableTitleCell = document.createElement('td');
            tableTitleCell.textContent = cartItem.productTitle;
            tableRow.appendChild(tableTitleCell);

            var tablePriceCell = document.createElement('td');
            tablePriceCell.textContent = cartItem.productPrice;
            tableRow.appendChild(tablePriceCell);

            var tableSizeCell = document.createElement('td');
            tableSizeCell.textContent = cartItem.selectedSize;
            tableRow.appendChild(tableSizeCell);

            var tableRemoveCell = document.createElement('td');
            var removeButton = document.createElement('button');
            removeButton.textContent = 'Remove';
            removeButton.addEventListener('click', function() {
                cartItems.splice(index, 1);
                localStorage.setItem('cartItems', JSON.stringify(cartItems));
                tableRow.remove();
            });
            tableRemoveCell.appendChild(removeButton);  
            tableRow.appendChild(tableRemoveCell);
            totalPrice += parseFloat(cartItem.productPrice);

            document.getElementById('cart-table-body').appendChild(tableRow);
        });