import '@coreui/coreui';

// lisen livewire event
window.livewire.on("open-modal-create", function () {
    $("#create-thumb-modal").modal('show');
});
window.livewire.on("close-modal-create", function () {
    $("#create-thumb-modal").modal('hide');
});

window.livewire.on("swal-livr", function (data) {
    Swal.fire("Good job!", data.message, data.type);
});
