console.log("dsd")
// const cartAction  = document.getElementsByClassName("cart-button")
// const cartAction  = document.querySelector("button");
const cartAction  = document.querySelector(".cart-button");
const cartMenu = document.querySelector(".skins-market-user-cart")
console.log(cartMenu)

cartAction.addEventListener("click", (event) => {
    // fetch('/get_items')
    //     .then(response => {
    //         // Проверить, успешно ли выполнен запрос
    //         if (!response.ok) {
    //             throw new Error('Network response was not ok');
    //         }
    //         // Распарсить ответ в формате JSON
    //         return response.json();
    //     })
    //     .then(data => {
    //         // item = data[0]
    //         // console.log(data[0].classid)
    //
    //
    //         console.log('Received data:', data);
    //     })
    //     .catch(error => {
    //         // Обработать ошибку, если что-то пошло не так
    //         console.error('There was a problem with the fetch operation:', error);
    //     });


    cartMenu.classList.toggle("none")

});

const items = document.querySelector('.market-cart-items')

function remove(button){
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/remove_all', true);

    xhr.setRequestHeader('Content-Type', 'application/json');

    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            items.style.visibility = "hidden"
            button.textContent = 'КОРЗИНА ОЧИЩЕНА'
            button.style.background = 'green'
        } else {
            console.error('Request failed with status', xhr.status);
        }
    };
    xhr.onerror = function() {
        console.error('Request failed');
    };

    xhr.send();
}


function removeItem(data){
    const json = JSON.stringify(data);
    const item = JSON.parse(json)
    const item_html = document.getElementById('item-' + item.id)

    let xhr = new XMLHttpRequest();
//
//     // Указываем метод запроса и URL-адрес
    xhr.open('POST', '/remove', true);

    // Устанавливаем заголовок Content-Type для указания типа данных, которые отправляются на сервер
    xhr.setRequestHeader('Content-Type', 'application/json');

    // Определяем обработчик события загрузки данных
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            // item.classList.add('none')
            // item_html.className += " none"
            item_html.style.visibility = "hidden"
            // Успешно получен ответ, обновляем содержимое на странице
            // document.getElementById('output').textContent = xhr.responseText;
        } else {
            // Обработка ошибок, если они есть
            console.error('Request failed with status', xhr.status);
        }
    };

    // Определяем обработчик события ошибки
    xhr.onerror = function() {
        console.error('Request failed');
    };

    // Создаем объект с данными для отправки
    var data = {
        classid: item.classid,
    };

    // Преобразуем объект в строку JSON
    var jsonData = JSON.stringify(data);

    // Отправляем запрос с данными
    xhr.send(jsonData);
// });
}
