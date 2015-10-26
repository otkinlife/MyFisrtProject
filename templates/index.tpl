<html>
<head>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="header">
				<ul class="nav nav-pills pull-right">
					<li class="active">
						<a href="#">主页</a>
					</li>
					<li>
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
			<div class="jumbotron well">
				<h1>
					快来跟我们一起围观
				</h1>
				<p class="lead">
					世界那么大，我想去看看！这么多趣事等着你去发现，快乐就是这么简单~！
				</p>
				
			</div>
			<div class="row marketing">
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						趣事广场
					</h3>
				</div>
				<div class="panel-body">
				{foreach from=$data item=thing}
					<blockquote>
						<p>
							{$thing['2']}
						</p> 
					</blockquote>
					<a>评论数 <span class="badge">50</span></a>
					<a id="modal-90773" href="#modal-container-90773" role="button" class="btn" data-toggle="modal">发表评论</a>
					<hr/>
				{/foreach}
					<div id="modal-container-90773" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h3 id="myModalLabel">
								写写你的看法~
							</h3>
						</div>
						<div class="modal-body">
							<form role="form">
							  <div class="form-group">
							    <label for="name">文本框</label>
							    <textarea class="form-control" style="width:100%" rows="5"></textarea>
							  </div>
							</form>
							
						</div>
						 
						<div class="modal-footer">
							 <button class="btn" data-dismiss="modal" aria-hidden="true">取消评论</button> <button class="btn btn-primary">发表评论</button>
						</div>
					</div>
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
	</div>
</div>
</body>
</html>