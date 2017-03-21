function submitForm(formId, params) {
    if (typeof params === "undefined" ) params = [];
    var type = ( typeof params['type'] === "undefined" ) ? '' : params['type'];
    var modal = ( typeof params['modal'] === "undefined" ) ? '#default-modal' : params['modal'];
    var urlBack = ( typeof params['urlBack'] === "undefined" ) ? '' : params['urlBack'];
    var method = ( typeof params['method'] === "undefined" ) ? "POST" : params['method'] ;
    var reload = ( typeof params['reload'] === "undefined" ) ? true : params['reload'] ;
    var form = jQuery('#'+formId);
    var url = form.attr('action') || '';


    jQuery(document).ready(function () {
        form.submit(function (e) {
            e.preventDefault();
            notifyLoading(true);

            var contentType = 'application/x-www-form-urlencoded;charset=UTF-8';
            var processData = true;
            var formData;
            if (form[0].enctype == "multipart/form-data") {
                formData = new FormData(this);
                contentType = false;
                processData = false;
                method = 'POST';
            }
            else {
                formData = form.serialize();
            }

            jQuery.ajax({
                url: url,
                method: method,
                async: true,
                cache: false,
                contentType: contentType,
                processData: processData,
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content'),
                },
            })
                .done(function (data) {
                    if (typeof data !== "object") {
                        console.log(data);
                        jQuery(modal+"-content").html(data); // TODO
                    }

                    else if ( modal == false) {
                        if (urlBack === '' || typeof data.data.id === "undefined") {
                            window.location.href = urlBack;
                        }
                        else {
                            var newUrl = params['urlEdit'];
                            newUrl = newUrl.replace('?', data.data.id);
                            if (newUrl !== window.location.href) {
                                window.location.href = newUrl;
                            }
                            getAlert("Atualização salva com sucesso!", 'success');
                        }
                    }
                    else {
                        notifyReloadGrid(reload);
                        if ( typeof jQuery(modal).modal == 'function' ) jQuery(modal).modal('hide');
                        getAlert("Atualização salva com sucesso!", 'success');
                    }
                })
                .fail(function (data) {
                    if ( data.status == 422 ) {
                        // Error de Validação
                        getAlert("Verifique os itens em vermelho!", "error");
                        try {
                            var results = data.responseJSON;
                            jQuery.each(results , function(key, result) {
                                jQuery.each(result, function(idx, msg) {
                                    console.log(key);
                                    jQuery("#"+key+"-input-message").html(msg);
                                    jQuery("#"+key+"-form-group").addClass("has-error");
                                });
                            });
                        }
                        catch(e){
                            console.log(e);
                        }
                    }
                })
                .always(function () {
                    notifyLoading(false);
                });

        });
    });
}
