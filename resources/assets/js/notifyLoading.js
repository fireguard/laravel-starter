function notifyLoading(isLoading) {
    jQuery("button.btn-primary").prop('disabled', isLoading);
    if (isLoading) {
        jQuery("button i.fa-save").removeClass('fa-save').addClass('fa-refresh fa-spin');
    }
    else {
        jQuery("button i.fa-refresh.fa-spin").removeClass('fa-refresh fa-spin').addClass('fa-save');
    }
}
