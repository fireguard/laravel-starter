function addUrlParam(key, value){
    key = encodeURIComponent(key);
    value = encodeURIComponent(value);

    var s = window.location.search;
    var kvp = key+"="+value;

    var r = new RegExp("(&|\\?)"+key+"=[^\&]*");

    s = s.replace(r,"$1"+kvp);

    if(!RegExp.$1) {s += (s.length>0 ? '&' : '?') + kvp;};

    return s;
}
