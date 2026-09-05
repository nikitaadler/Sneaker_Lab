(function() {
    const colorFilter = document.getElementById('colorFilter');
    const priceFilter = document.getElementById('priceFilter');
    const priceValue = document.getElementById('priceValue');
    const carContainer = document.getElementById('carContainer');
    const resetBtn = document.getElementById('resetFilters');

    const updatePriceValue = () => {
      priceValue.textContent = priceFilter.value;
    };
    priceFilter.addEventListener('input', updatePriceValue);
    updatePriceValue();
    const filterCards = () => {
      const color = colorFilter.value;
      const maxPrice = parseInt(priceFilter.value, 10);


      const cards = carContainer.querySelectorAll('.main__cart');
      cards.forEach(card => {
        const cardColor = card.getAttribute('data-color') || '';
        const cardPrice = parseInt(card.getAttribute('data-price') || '0', 10);

        const colorMatch = (color === 'all') || (cardColor === color);
        const priceMatch = (cardPrice <= maxPrice);

        if (colorMatch && priceMatch) {
          card.style.display = 'inline-block';
        } else {
          card.style.display = 'none';
        }
      });
    };

    colorFilter.addEventListener('change', filterCards);
    priceFilter.addEventListener('input', filterCards);

    resetBtn.addEventListener('click', () => {
      colorFilter.value = 'all';
      priceFilter.value = '1000';
      updatePriceValue();
      filterCards();
    });

    filterCards();
  })();




document.addEventListener('DOMContentLoaded', function () {
    const cartButtons = document.querySelectorAll('.main__cart_button');
    
    cartButtons.forEach(button => {
        button.addEventListener('click', function () {

            const productId = this.getAttribute('data-id');

            fetch('index.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'product_id=' + productId
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('cart-count').innerText = data; 
                alert('Товар добавлен в корзину!');
            });
        });
    });
});


