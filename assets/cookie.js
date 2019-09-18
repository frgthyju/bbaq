function get_cookie(name){
    var c_info = document.cookie;
    var c_i = c_info.split("; ");

    for(var i=0;i<c_i.length;i++){
        var c_arr = c_i[i].split("=");
            if(c_arr[0] == name){
                return decodeURIComponent(c_arr[1]);
            }
        }
}
