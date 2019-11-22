//查询用户信息
window.onload = function(){
    $.ajax({
        url: path+"/db_userinfo/db_select_userinfo.php",
        method: 'POST',
        dataType: 'json',
        data:{
            "page_id":1
        },
        contentType:"application/json",
        headers:{
            'Content-Type':'application/x-www-form-urlencoded'
        },
        success: function(resp)
        {
            table_info(resp);
        },
        error:function(xhr){console.log("wrong");console.log(xhr.responseText);}
    });
}

function table_info(resp){
    console.log(resp);
    if(resp['data'] == "no_info"){
        $("#all_user").empty();
        $("#page_num").empty();
        console.log("no_info");
    }else{
        let str = "";
        let page_str = "";
        let li = "";
        $("#all_user").empty();
        //表格信息
        for(let i=0;i<resp['data'].length;i++){
            str = "<tr><td>"+resp['data'][i].name+"</td>"+
                // "<td>"+resp[i].phone+"</td>"+
                "<td>"+resp['data'][i].phone+"</td>"+
                "<td>"+resp['data'][i].address+"</td>"+
                "<td>"+resp['data'][i].workunit+"</td>"+
                "<td><a onclick='mod_userinfo("+resp['data'][i].id+")' ><i class=\"linecons-cog\"></i></a >      <a onclick='dele_userinfo("+resp['data'][i].id+")'><i class=\"fa fa-trash-o\"></i></a></td></tr>";
            $("#all_user").append(str);
        }
        console.log(str);

        $("#page_num").empty();
        //previous按钮控制
        if(resp['page_id']==1){
            li = "<li  class='paginate_button previous disabled' aria-controls='example-1' tabindex='0' id='example-1_previous'>" +
                "<a href='#'>Previous</a></li>";
        }else{
            li = "<li  class='paginate_button previous' onclick='change_page("+(resp['page_id']-1)+")' aria-controls='example-1' tabindex='0' id='example-1_previous'>" +
                "<a href='#'>Previous</a></li>";
        }
        $("#page_num").append(li);

        //分页页码部分信息
        console.log("fd");
        console.log(resp['page_id']);
        for(let v=1;v<=resp['page_num'];v++){
            if(v==resp['page_id']){
                page_str = "<li class='paginate_button active'  aria-controls='example-1' tabindex='0'>" +
                    "<a href='#'>"+v+"</a></li>";
            }else{
                page_str = "<li class='paginate_button' onclick='change_page("+v+")' aria-controls='example-1' tabindex='0'>" +
                    "<a href='#'>"+v+"</a></li>";
            }
            $("#page_num").append(page_str);
        }
        //next按钮控制
        if(resp['page_id']==resp['page_num']){
            li="<li class='paginate_button next disabled' aria-controls='example-1' tabindex='0' id='example-1_next'>" +
                "<a href='#'>Next</a></li>" ;
        }else{
            let page_tmp = new Number(resp['page_id'])+1;
            console.log(typeof(page_tmp));
            console.log(page_tmp)
            li="<li class='paginate_button next ' onclick='change_page("+page_tmp+")' aria-controls='example-1' tabindex='0' id='example-1_next'>" +
                "<a href='#'>Next</a></li>" ;
        }

        $("#page_num").append(li);
    }
}

function change_page(id){
    $.ajax({
        url: path+"/db_userinfo/db_select_userinfo.php",
        method: 'POST',
        dataType: 'json',
        data: {
            "page_id": id
        },
        contentType:"application/json",
        headers:{
            'Content-Type':'application/x-www-form-urlencoded'
        },

        success: function(resp)
        {
            table_info(resp);
        },
        error:function(xhr){console.log(xhr.responseText);}
    });
}

//添加用户信息
function add_userinfo(){
    var name= document.getElementById('name').value;
    var phone= document.getElementById('phone').value;
    var address= document.getElementById('address').value;
    var workunit= document.getElementById('workunit').value;

    if(name==""){
        toastr.error("请填写姓名", "Invalid Info!");
    }else{
        $.ajax({
            url: path+"/db_userinfo/db_add_userinfo.php",
            method: 'POST',
            dataType: 'json',
            data: {
                "name": name,
                "phone": phone,
                "address": address,
                "workunit": workunit,
            },
            contentType:"application/json",
            headers:{
                'Content-Type':'application/x-www-form-urlencoded'
            },

            success: function(resp)
            {
                if(resp == '1'){
                    jQuery('#add_modal').modal('hide');
                    document.getElementById('back_info').innerText="添加数据成功";
                    document.getElementById('add_success').style.display="inline";
                    setTimeout("window.location.href='info.php'",1000);
                    //setTimeout("change_page(1)",1000);
                    //document.getElementById('add_success').style.display="none";
                }else{
                    toastr.error("请检查网络情况，稍后再试", "Try Again!");
                }
            },
            error:function(xhr){console.log(xhr.responseText);}
        });
    }

}

//修改用户信息界面
function mod_userinfo(user_id){
    console.log(user_id);
    $.ajax({
        url: path+"/db_userinfo/db_search_userinfo.php",
        method: 'POST',
        dataType: 'json',
        contentType:"application/json",
        data:{
            "id":user_id
        },
        headers:{
            'Content-Type':'application/x-www-form-urlencoded'
        },
        success: function(resp)
        {
            // console.log(resp.name);
            document.getElementById('mod_name').value = resp.name;
            document.getElementById('mod_phone').value = resp.phone;
            document.getElementById('mod_address').value = resp.address;
            document.getElementById('mod_workunit').value = resp.workunit;
            document.getElementById('mod_submit').value = resp.id;
        },
        error:function(xhr){console.log("wrong");console.log(xhr.responseText);}
    });
    jQuery('#mod_modal').modal('show', {backdrop: 'static'});
}

//修改用户具体信息
function mod_userinfo_detail(){
    $.ajax({
        url: path+"/db_userinfo/db_modify_userinfo.php",
        method: 'POST',
        dataType: 'json',
        contentType:"application/json",
        data:{
            "id":document.getElementById('mod_submit').value,
            "name":document.getElementById('mod_name').value,
            "phone":document.getElementById('mod_phone').value,
            "address":document.getElementById('mod_address').value,
            "workunit":document.getElementById('mod_workunit').value,
        },
        headers:{
            'Content-Type':'application/x-www-form-urlencoded'
        },
        success: function(resp)
        {
            if(resp=="1"){
                jQuery('#mod_modal').modal('hide');
                document.getElementById('back_info').innerText="修改数据成功";
                document.getElementById('add_success').style.display="inline";
                setTimeout("window.location.href='info.php'",1000);
                //setTimeout("document.getElementById('add_success').style.display='none',1000);
                //setTimeout("change_page(1)",1000);

            }else{
                toastr.error("请检查网络情况，稍后再试", "Try Again!");
            }
        },
        error:function(xhr){console.log("wrong");console.log(xhr.responseText);}
    });
}

//删除用户信息
function dele_userinfo(user_id){
    $.ajax({
        url: path+"/db_userinfo/db_delete_userinfo.php",
        method: 'POST',
        dataType: 'json',
        contentType:"application/json",
        data:{
            "id":user_id,
        },
        headers:{
            'Content-Type':'application/x-www-form-urlencoded'
        },
        success: function(resp)
        {
            console.log(resp);
            if(resp=="1"){
                document.getElementById('back_info').innerText="删除数据成功";
                document.getElementById('add_success').style.display="inline";
                setTimeout("window.location.href='info.php'",1000);
                //setTimeout("change_page(1)",1000);
                //document.getElementById('add_success').style.display="none";
            }else{
                toastr.error("请检查网络情况，稍后再试", "Try Again!");
            }
        },
        error:function(xhr){console.log("wrong");console.log(xhr.responseText);}
    });
}

//退出
function logout(){
    $.ajax({
        url: path+"/logout.php",
        method: 'POST',
        dataType: 'json',
        contentType:"application/json",
        headers:{
            'Content-Type':'application/x-www-form-urlencoded'
        },
        success: function(resp)
        {
            console.log(resp);
            if(resp=="success"){
                let keys = document.cookie.match(/[^ =;]+(?=\=)/g);
                console.log(keys);
                if(keys){
                    for(let i=keys.length;i--;){
                        document.cookie = keys[i]+'=0;expires='+new Date(0).toUTCString();
                    }
                }
                window.location.href='index.php';
            }else{
                toastr.error("安全退出失败，请稍后再试", "Try Again!");
            }
        },
        error:function(xhr){console.log("wrong");console.log(xhr.responseText);}
    });
}