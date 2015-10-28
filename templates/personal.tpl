<html>
<head>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>
<link href="../other/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="../other/js/fileinput.js" type="text/javascript"></script>
<script src="../other/js/fileinput_locale_zh.js" type="text/javascript"></script>
<script>
	{if $data.code!=""}
		alert('{$data.message}');
		window.location.href = "/Base/rooter.php?rooter=User/showperson";
	{/if}
	{if $img.code!=""}
		alert('{$img.message}');
		window.location.href = "/Base/rooter.php?rooter=User/showperson";
	{/if}
	{if $update.code!=""}
		alert('{$img.message}');
		window.location.href = "/Base/rooter.php?rooter=User/showperson";
	{/if}
</script>
<script>
	$(function(){
		$("#logout").click(function(){
			if(confirm("真的要离开吗 ？")){
				window.location.href = "/Base/rooter.php?rooter=User/login";
			}		
		});
	})
	
function UploadSpecialRecommendPic() {
	$.ajaxFileUpload({
		url : '/GZZSServer/s_util/uploadSpecialRecommendPic.action',
		secureuri : false,
		fileElementId : 'specialrecommendfile',
		dataType : 'json',
		success : function(d, status) {
			var data = eval('(' + d + ')');
			alert(data.msg);
			if (data.flag == 1) {
				$("#SpecialTopicPicShow").attr("src", data.path);
				$("#specialRecommendPic").val(data.picName);
			}
		},
		error : function(data, status, e) {
			alert(e);
		}
	});
}

	
</script>
</head>
<body>
<div class="container-fluid">
<div class="row-fluid">
		<div class="span12">
			<div class="header">
				<ul class="nav nav-pills pull-right">
					<li>
						<a href="/Base/rooter.php?rooter=User/index">主页</a>
					</li>
					<li class="active">
						<a href="/Base/rooter.php?rooter=User/showperson">个人</a>
					</li>
					<li>
						<a id="logout">登出</a>
					</li>
				</ul>
				<h5 class="text-muted">
					欢迎您:<b>{$username}</b>
				</h5>

			</div>
	<div class="row-fluid" style="margin-top:10px;">
		<div class="span8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a class="panel-title">
						我的趣事
					</a>
					
					<span id="modal-90773" 
						data-toggle="modal"
						style = "float:right"
						href="#modal-container-90773"
						class="glyphicon glyphicon-plus" 
						aria-hidden="true">
					</span>
						
					</span>
				</div>
				<form action="/Base/rooter.php?rooter=Thing/addThing" method="post">
					<div id="modal-container-90773" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-header">
								 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h3 id="myModalLabel">
									有什么开心的事，一起分享吧~！
								</h3>
							</div>
							<div class="modal-body">
								<form role="form">
								  <div class="form-group">
									<label for="name">文本框</label>
									<textarea class="form-control" name="thingcontent" style="width:100%" rows="5"></textarea>
								  </div>
								</form>

							</div>

							<div class="modal-footer">
								 <button class="btn" data-dismiss="modal" aria-hidden="true">不发表了</button>
								 <input type="submit" class="btn btn-primary" value="发表出去"/>
							</div>
						</div>
					</form>
				<div class="panel-body">
				{if $res!=""}
					{foreach from=$res item=thing}
						<blockquote>
							<p>
								{$thing['2']}
							</p> 
						</blockquote>
						<a>评论数 <span class="badge">50</span></a>
						<a href="/Base/rooter.php?rooter=Thing/showDetail" role="button" class="btn">查看详情</a>
						<hr/>
					{/foreach}
				{else}
					暂时还没有趣事哦，快去发表吧~！
				{/if}
				</div>
				<div class="panel-footer">
					<div class="pagination">
						<ul>
							<li>
								<a href="#">上一页</a>
							</li>
							<li>
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">5</a>
							</li>
							<li>
								<a href="#">下一页</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="span4">
			<a href="#" class="list-group-item active">
			   	<img src="{$person['0']['4']}" width="50px;" height="50px;">&nbsp;&nbsp;<span>我的资料</span>
			</a>
			<a class="list-group-item">
				<span id="modal-90773" href="#modal-container-90771" role="button" class="btn" data-toggle="modal">修改资料</span>
				<span id="modal-90773" href="#modal-container-90772" role="button" class="btn" data-toggle="modal">更换头像</span>
			</a>
			<a class="list-group-item">
				我的id：{$person['0']['0']}
			</a>
			<a class="list-group-item">
				我的昵称：{$person['0']['1']}
			</a>
			<a href="#" class="list-group-item">
				我的邮箱：{$person['0']['2']}
			</a>
			<a href="#" class="list-group-item">共发表了12条趣事</a>
		</div>
		
			<div id="modal-container-90771" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
					 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">
						新名片，新气象~！
					</h3>
				</div>
				<form action="/Base/rooter.php?rooter=User/updatePerson" method="post">
					<div class="modal-body">
			                <input type="text" style="height:34px" name="newname" value="{$person['0']['1']}"><br/>
			                <input type="text" style="height:34px" name="newemail" value="{$person['0']['2']}">
					</div>
					<div class="modal-footer">
						 <button class="btn" data-dismiss="modal" aria-hidden="true">不改了</button>
						 <button type="submit" class="btn btn-primary">点击修改</button>
					</div>
				</form>
			</div>
		</form>
		<form action="/Base/rooter.php?rooter=User/uploadImg" method="post"
			  enctype="multipart/form-data">
			<div id="modal-container-90772" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
					 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">
						选一张漂亮的图片吧
					</h3>
				</div>
				<div class="modal-body">
						  <div class="form-group">
		                    <label>选一张</label>
		                    <input name="file" id="file-3" type="file" multiple=true>
		                </div>
				</div>
				 
				<div class="modal-footer">
					 <button class="btn" data-dismiss="modal" aria-hidden="true">不改了</button>
					 <button type="submit" class="btn btn-primary">点击修改</button>
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>
<script>
	$("#file-3").fileinput({
			showUpload: false,
			showCaption: false,
			browseClass: "btn btn-primary btn-lg",
			fileType: "any",
	        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
		});
    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
 
    });
</script>