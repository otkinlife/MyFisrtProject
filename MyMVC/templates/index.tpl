<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
	<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
	<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>
	<script>
	</script>
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<{include file="head.tpl"}>
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
					<a>评论数 <span class="badge">{$thing.num}</span></a>
					<a href="/Base/rooter.php?rooter=Thing/showDetail/{$thing['0']}//1" role="button" class="btn">查看详情</a>
					<a id="modal-90773" href="#modal-container-90773" role="button"
					   class="btn" data-toggle="modal" data-js="{$thing['0']}">
						发表评论
					</a>
					<hr/>
				{/foreach}
					<div id="modal-container-90773" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h3 id="myModalLabel">
								写写你的看法~
							</h3>
						</div>
						<form id="fm" method="post" action="/Base/rooter.php?rooter=Comment/addComment">
							<div class="modal-body">
							<div class="form-group">
							  	<input type="hidden" name="thingid" id="thingid" value="{$thing['0']}" />
							    <label for="name" id="aaa">文本框</label>
							    <span id="msg" style="color: Red; display: none; font-size: 10pt; font-weight: bold; font-family: Andalus;">评论内容不能为空!</span>
							    <textarea id="ta" name="comment" class="form-control" style="width:100%" rows="5"></textarea>
							  </div>

							</div>
						<div class="modal-footer">
							 <button class="btn" data-dismiss="modal" aria-hidden="true">取消评论</button>
							 <button id="bt" type="button" class="btn btn-primary">发表评论</button>
						</div>
						</form>
					</div>
				
				</div>
				<div class="panel-footer">
					<div class="pagination">
						<ul>
							<li>
								<a href="/Base/rooter.php?rooter=User/index//1">首页</a>
							</li>
							<li>
								<a href="/Base/rooter.php?rooter=User/index//{$currentpage-1}">上一页</a>
							</li>
							<li>
								<a>当前第{$currentpage}/{$pagenum}页</a>
							</li>
							<li>
								<a href="/Base/rooter.php?rooter=User/index//{$currentpage+1}">下一页</a>
							</li>
							<li>
								<a href="/Base/rooter.php?rooter=User/index//{$pagenum}">尾页</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<script>
	$(".btn").click(function(){
		$("#modal-container-90773").attr('aria-hidden',false);
		$("#thingid").attr('value',$(this).attr("data-js"));
	})

</script>
</body>
</html>