
<div class="header">
	<ul class="nav nav-pills pull-right">
		<li class="active">
			<{if $username!=''}>
				<a href="#">主页</a>
			<{else}>
				<a id="cli1">主页</a>
			<{/if}>
		</li>
		<li>
			<{if $username!=''}>
				<a href="#">个人</a>
			<{else}>
				<a id="cli2">个人</a>
			<{/if}>
			
		</li>
		<li>
			<{if $username!=''}>
				<a id="logout">退出</a>
			<{else}>
				<a id="modal-90773" href="#modal-container-90771" data-toggle="modal">
					   登录
				</a>
			<{/if}>
		</li>
	</ul>
	<h5 class="text-muted">
		欢迎您:
		<{if $username!=''}>
			<b><{$username}></b>
		<{else}>
			游客
		<{/if}>
	</h5>
</div>
<div id="modal-container-90771" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">
			赶快登录~！
		</h3>
	</div>
	<form method="post" action="" style="margin-left:10%; margin-top:10px;">
		<div style="float:left; margin-bottom:30px;">
	         <div class="input-group input-group" >
	            <span class="input-group-addon" id="sizing-addon1">用户邮箱：</span>
	            <input type="text" class="form-control" name="useremail" placeholder="请输入邮箱" style="height:30px;">
	         </div>
	         <div class="input-group input-group">
	            <span class="input-group-addon" id="sizing-addon1">用户密码：</span>
	            <input type="password" class="form-control" name="userpwd" placeholder="请输入用户密码" style="height:30px;">
	         </div>
	         <div class="input-group input-group">
	            <span class="input-group-addon" id="sizing-addon1">验&nbsp;证&nbsp;码&nbsp;：<{$yzm}></span>
	            <input type="text" class="form-control" name="yzm" placeholder="请输入验证码" style="height:30px;">
	         </div>
         </div>
         <div style="float:left; margin-left:20px;">
            <button type="button" class="btn btn-lg" style="margin-bottom:13px;">
		     	 登录
		    </button><br/>
		    <button id='clear' type="button" class="btn btn-lg" style="margin-bottom:13px;">
		     	 重置
		    </button><br/>
      		&nbsp;&nbsp;<a id="register">还没有账号？快去注册</a>
         </div>
      </form>
</div>
<script>
	$(function(){
		$("#cli1").click(function(){
			alert("请先登录");
		});
		$("#cli2").click(function(){
			alert("请先登录");
		});
		$("#clear").click(function(){
			$("form").find(':input').not(':button, :submit, :reset').val('')
			.removeAttr('checked').removeAttr('selected');
		})
	})
</script>