function addToCart(data){
    const data_raw = JSON.stringify(data)
    const item = JSON.parse(data_raw)
    const button = document.querySelector('.buy-now-button')
    button.style.background = "red"
    button.textContent = 'В КОРЗИНЕ'

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/add', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
        } else {
            console.error('Request failed with status', xhr.status);
        }
    };

    xhr.onerror = function() {
        console.error('Request failed');
    };

    var data = {
        classid: item.classid,
    };

    var jsonData = JSON.stringify(data);

    xhr.send(jsonData);
}

function changeButton(button)
{
    button.textContent = 'В КОРЗИНЕ'
    button.color = 'yellow'
}
