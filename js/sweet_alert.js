function alert_success(msj) {
    Swal.fire({
        title: 'success!',
        text: msj,
        icon: 'success',
        confirmButtonText: 'OK'
    })
}

function alert_error(msj) {
    Swal.fire({
        title: 'Error!',
        text: msj,
        icon: 'error',
        confirmButtonText: 'OK'
    })
}

function alert_saved(msj) {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: msj,
        showConfirmButton: false,
        timer: 1500
    })
}