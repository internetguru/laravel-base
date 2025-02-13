import { Toast, Tooltip } from 'bootstrap';

document.querySelectorAll('.toast').forEach(function (toast) {    var bsToast = new Toast(toast)
    bsToast.show()
})

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new Tooltip(tooltipTriggerEl))
