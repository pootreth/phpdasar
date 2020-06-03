// console.log('OK!');
// ambil elemen yang dibutuhkan

var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('btn-cari');
var container = document.getElementById('container');

keyword.addEventListener('keyup',function() {
    // console.log(keyword.value);

    // bikin object ajax
    var xhr = new XMLHttpRequest();
    
    // cek AJAX
    xhr.onreadystatechange = function(){
        if (xhr.readyState==4 && xhr.status == 200){
            // console.log('AJAX ok!');
            // console.log(xhr.responseText);
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi AJAX
    xhr.open('GET', 'ajax/book.php?keyword=' + keyword.value, true);
    xhr.send();
});