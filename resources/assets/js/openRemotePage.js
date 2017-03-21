function openRemotePage(url, modalId) {
    if (modalId == undefined) modalId = '#default-modal';
    var refresh = '<div class="text-center"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span></div>';
    var baseModal = createModalBase('<i class="fa fa-spinner fa-spin"></i> Carregando', refresh);
    jQuery(modalId+"-content").html(baseModal);
    jQuery(modalId).modal("show");

    jQuery.ajax({
        type:"GET",
        async: true,
        cache: false,
        url: url
    })
        .done(function(data) {
            jQuery(modalId+"-content").html(data);
        })
        .fail( function(data) {
            jQuery(modalId+"-content").html(createErrorMessage(data));
        })
        .always(function() {

        });
}

function createModalBase(title, data, type) {
    if (type === undefined) type = '';
    return '<div class="box '+type+'"> <div class="box-header with-border"> <h3 class="box-title"> '+title+' </h3> <div class="box-tools pull-right"> <button type="button" class="btn btn-box-tool" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button> </div> </div> <div class="box-body">'+data+'</div></div>';
}

function createErrorMessage(data) {
    if (data.status == 403) window.location.replace("/manager");

    var errorMessage = 'Erro ao processar sua solicitação';
    if (data.status == 404) errorMessage = 'A página solicitada não está disponível!';

    var errorHtml = '<br><br><h3 class="text-center text-danger">'+errorMessage+'</h3><br><br>';
    return createModalBase('<div class="text-danger"><i class="fa fa-close "></i> Erro ao acessar a página solicitada</div>', errorHtml, 'box-danger');
}
