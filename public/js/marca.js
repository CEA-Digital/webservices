$('#modalBorrarMarca').on('show.bs.modal', function (e) {
    var button = $(e.relatedTarget);
    var id = button.data('id');
    var name= button.data('name');

    var modal=$(this);
    modal.find('.modal-footer #id').val(id);
    modal.find('.modal-body #nombreMarca').text(name);
});
