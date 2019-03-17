
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>new | OCAN MUTTER</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="/css/app.css" rel="stylesheet">
	<script src="/js/app.js"></script>
	<style>

	</style>
</head>

<body>
	<article>
		<header>
			<span class="header_top"><a href="">OCAN MUTTER</a></span>
			<div class="header_controller">
				<span class="header_button"><a href="">NEW</a></span>
			</div>
		</header>
		<div id="app">
			<div class="new" >
				<div class="new_nickname"><span id="nickname">名無し</span>さんこんにちは!</div>
				<!-- 文字入力欄を作る部分ここから -->

				<textarea id="new_content"></textarea>

				<!-- 文字入力欄を作る部分ここまで -->
				<div class="new_controll">
					<a href="" class="new_back_button">BACK</a>
					<!-- 送信ボタンを作る部分ここから -->

					<button type="button" id="send">送信</button>
					
					<!-- 送信ボタンを作る部分ここまで -->
				</div>
			</div>
		</div>
		<footer>
			<div class="footer_title">OCAN MUTTER</div>
			<div class="footer_links">
				<span class="footer_link_item right"><a href="https://twitter.com/kakimoto_itc" target="_blank">Twitter@kakimoto_itc</a></span><span class="symbol">|</span><span class="footer_link_item"><a href="https://nnn-kakimoto.github.io/mySite" target="_blank">About Kakimoto?</a></span>
			</div>
		</footer>
	</article>
</body>

<script>
$(function(){
	// 上から順にプログラムが実行されるよ↓↓
	$('#send').css('background-color', 'black');
	$('.new').css('background-color', 'red');
	token = ''; //ここから↓↓
	$.ajax({
		url : 'http://ocan-mutter.herokuapp.com/csrf_token',
		type : "POST",
		dataType : "json"
	}).then(function(data){
		token = data.token;
		if(token != null){
			$('#send').removeClass('sended');
		}
	}); //↑↑ここまでは気にしないでほしい


	// ここから作業エリア
	// 変数に文字を入れる

nickname = 'tokumoto'
	// 画面に表示する!
	$('#nickname').html(nickname);


	// ここでボタンクリックを検知!
	$('#send').click(function(){
		// 入力欄の文字を変数に入れる
		content = $('#new_content').val(); // #の後ろにテキストエリアのidを入れよう！

		//　ボタン押されたらF12 → consoleに表示する
		console.log(content)　 // ↑でidを入れれたら()の中を content に変えてみよう！
		if(content == ''){
			return true;
		}
		$(this).addClass('sended').prop('disabled',true);
		
		$.ajax({
			url: 'http://ocan-mutter.herokuapp.com/api/mutter/store',
			type: "POST",
			dataType: "json",
			data: {
				content: content,
				csrf_token: token,
				nickname: nickname
			}
		}).done(function(data){
			$('#send').removeClass('sended');
		});

	});
});
</script>
</html>
