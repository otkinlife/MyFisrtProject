<html>
<head>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>
<script>
	{if $data.code!=""}
		alert('{$data.message}');
	{/if}
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
						<a href="#">联系我</a>
					</li>
				</ul>
				<h5 class="text-muted">
					欢迎您{$username}
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
					{foreach from=$data item=thing}
						<blockquote>
							<p>
								{$thing['2']}
							</p> 
						</blockquote>
						<a>评论数 <span class="badge">50</span></a>
						<a role="button" class="btn">查看详情</a>
						<hr/>
					{/foreach}
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
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<a class="panel-title">
						我的资料
					</h3>
				</div>
				<div class="panel-body">
					
				</div>
				<div class="panel-footer">
					Panel footer
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>