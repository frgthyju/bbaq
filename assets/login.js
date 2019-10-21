jQuery(document).ready(function($) {
        // Reveal Login form
        setTimeout(function () {
            $(".fade-in-effect").addClass('in');
        }, 1);

        //Form validation and AJAX request
        $(".lockcreen-form").validate({
            rules: {
                username: {
                    required: true
                },
                passwd: {
                    required: true
                }
            },
            messages: {
                username: {
                    required: ''
                },
                passwd: {
                    required: ''
                }
            },
            submitHandler: function(form)
            {
                show_loading_bar(70);
                var username = document.getElementById('username').value;
                var passwd = btoa(document.getElementById('passwd').value);
                // console.log(passwd);

                $.ajax({
                    url: path+"/login.php",
                    method: 'POST',
                    dataType: 'json',
                    contentType:"application/json",
                    headers:{
                        'Content-Type':'application/x-www-form-urlencoded'
                    },
                    data: {
                        "username": username,
                        "passwd": passwd,
                    },
                    success: function(resp)
                    {
                        if(resp == "no_info"){
                            toastr.error("用户名或密码错误", "Invalid Login!");
                        }else if(resp == "lack_info"){
                            toastr.error("用户名或密码错误", "Invalid Login!");
                        }else if(resp == "success"){
                            document.cookie="username="+username;
                            document.cookie = "info=d";
                            // console.log(document.cookie);
                            // console.log(get_cookie("username"));
                            window.location.href="/Page/info.php";
                        }else if(resp == "more_user"){
                            toastr.error("有重复用户，请联系管理员", "Invalid Login!");
                        }else{
                            toastr.error("请检查网络情况，稍后再试", "Try Again!");
                        }
                    },
                    error:function(xhr){
                        console.log("error");
                        console.log(xhr.responseText);
                    }
                });
            }
        });

    });

