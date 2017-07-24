/**
 * Created by milena on 24-Jul-17.
 */
function showKnn(el) {
    if (el.options[el.selectedIndex].value == 'knn') {
        document.getElementById('showKnn').style.display = 'block'; // Show el
    } else {
        document.getElementById('showKnn').style.display = 'none'; // Hide el
    }
}

