function removeDataTableItem(url, id, token) {
    bootbox.confirm({
        title: "Atenção",
        message: "Deseja realmente remover este item?",
        buttons: {
            "cancel": {
                label: "<i class='fa fa-times-circle'></i> Cancelar",
                className: "btn-default"
            },
            "confirm": {
                label: "<i class='fa fa-minus-circle'></i> Remover",
                className: "btn-danger"
            }
        },
        callback: function (result) {
            if (result) {
                notifyLoading(true);
                jQuery.ajax({
                    url: url,
                    method: 'DELETE',
                    async: true,
                    cache: false,
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content'),
                        'Content-Type':'application/json'
                    },
                }).done(function (data) {
                    var message = data.message || 'Registro removido com sucesso!';
                    getAlert(message, 'success');
                    jQuery('#row-'+id).remove();
                }).fail(function (data) {
                    console.log(data);
                    var message = data.message || 'Não foi possível remover o registro solicitado!';
                    getAlert(message, 'error');
                }).always(function () {
                    notifyLoading(false);
                });
            }
        }
    });
}
