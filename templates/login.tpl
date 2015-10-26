<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
    <script src="../bootstrap/jquery-2.1.4.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script>
    	$(function(){
    		$("#register").click(function(){
    			window.location.href="/Base/rooter.php?rooter=User/showadduser";
    		});
    	})
    </script>
    {if $data.code!=''}
    	<script>
    	alert('{$data.message}');
    	</script>
    {/if}
</head>
<body class="container">

<div class="page-header">
  <h1>欢迎来围观哦~！ <small>赶快登录吧</small></h1>
</div>
<div style="margin-top: 10px;">
  <div class="jumbotron" style="float: left; width:60%">
      <h1>Hello, world!</h1>
      <p>...</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
  </div>
  <div class="alert alert-warning" style="margin-left:10px;float: left; width: 30%;">
      <form method="post" action="/Base/rooter.php?rooter=User/checkUser">
         <div class="input-group input-group" style="width: 100%;margin-top: 10px">
                    <span class="input-group-addon" id="sizing-addon1">用户邮箱</span>
                    <input type="text" class="form-control" name="useremail" placeholder="请输入邮箱" aria-describedby="sizing-addon1">
         </div>
          <div class="input-group input-group" style="width: 100%;margin-top: 10px">
                    <span class="input-group-addon" id="sizing-addon1">用户密码</span>
                    <input type="password" class="form-control" name="userpwd" placeholder="请输入用户密码" aria-describedby="sizing-addon1">
          </div>
          <div class="input-group input-group" style="width: 100%;margin-top: 10px">
                    <span class="input-group-addon" id="sizing-addon1">验证码：{$yzm}</span>
                    <input type="text" class="form-control" name="yzm" placeholder="请输入验证码" aria-describedby="sizing-addon1">

          </div>
          <div style="margin: 10px">
                    <button type="submit" class="btn btn-default">登录</button>
              		&nbsp;&nbsp;<a id="register">还没有账号？快去注册</a>
          </div>
      </form>
  </div>
</div>

</body>
</html>
