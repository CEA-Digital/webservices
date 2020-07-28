$('#modalVistaPreviaProductos').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var src_imagen = button.data("src_img");

    var modal = $(this);
    modal.find('.modal-body #img').attr("src","/images/productos/"+src_imagen);
});
//Editar modal Producto
$('#modalEditarProducto').on('show.bs.modal',function (e) {
    var button = $(e.relatedTarget)
    var id_producto = button.data('id');
    var name = button.data('name');
    var unit_prince = button.data('unit_price');
    var lote_price = button.data('lote_price');
    var description = button.data('description');
    var disponible = button.data('disponible');
    var categoria = button.data('id_categoria');
    var imag_url = button.data('imag_url');

    var modal = $(this);

    modal.find('.modal-footer #id').val(id_producto);
    modal.find('.modal-body #nombreEditarProducto').val(name);
    modal.find('.modal-body #precioUnitarioProducto').val(unit_prince);
    modal.find('.modal-body #precioLoteProducto').val(lote_price);
    modal.find('.modal-body #descripcionEditarProducto').val(description);
    modal.find('.modal-body #disponible').val(disponible);
    modal.find('.modal-body #tipoEditarCategoria').val(categoria);

})
