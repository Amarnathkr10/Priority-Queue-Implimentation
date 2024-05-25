function addItem() {
    var page = document.getElementById('rmv')
    var ne = page.childNodes.length
    if (ne > 10) {
        alert("Queue Overflow");
        return;
    } else {
        const newItem = document.createElement("div")
        newItem.innerText = document.getElementById('no').value
        newItem.classList.add('queue')
        page.appendChild(newItem)
        var normal = document.getElementById('rmv').children;
        var n = normal.length
        var arr = []
        for (var i = 0; i < n; i++) {
            arr[i] = Number(normal[i].innerText)
            console.log(typeof (arr[i]))
        }
        arr.sort(function (a, b) {
            return a - b
        });
        for (var i = 0; i < n; i++) {
            normal[i].innerText = arr[i]
        }
    }
}

function removeItem() {

    const list = document.getElementById("rmv");
    if (list.children.length == 0) {
        alert("Queue Underflow")
    } else {

        list.removeChild(list.firstElementChild);

    }

}