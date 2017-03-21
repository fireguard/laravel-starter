function reloadCurrentPage($clearSearch) {
    if($clearSearch && $clearSearch === true) {
        window.location.replace(removeUrlParam('search'));
    }
    else {
        window.location.reload();
    }
}
