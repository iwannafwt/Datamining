/**
 * Created by milena on 24-Jul-17.
 */
document.querySelector('#form').addEventListener('submit', function (e) {
    var form = this;
    e.preventDefault();
    swal({
        title: "Είστε σίγουροι?",
        showCancelButton: true,
        confirmButtonColor: '#449d44',
        cancelButtonColor: '#286090',
        confirmButtonText: 'Συνέχεια',
        cancelButtonText: "Επιστροφή",
        closeOnConfirm: false,
        closeOnCancel: true,
        allowEscapeKey: true
    }, function (isConfirm) {
        if (isConfirm) {
            document.getElementById("form").submit();
        }
    })
});
