@extends('template.common')
@section('title', 'new')
@section('content')


<div class="new">
	<div class="new_nickname">名無し さんこんにちは!</div>
	<textarea id="new_content" rows="10" autofocus></textarea>
	<div class="new_controll">
		<a href="/" class="new_back_button">BACK</a>
		<button type="button" id="send" class="sended">SEND</button>
	</div>
</div>



<script>
$(function(){
	token = '';
	$.ajax({
		url : '/csrf_token',
		type : "GET",
		dataType : "json"
	}).then(function(data){
		token = data.token;
		if(token != null){
			$('#send').removeClass('sended');
		}
	});

	$('#send').click(function(){
		content = $('#new_content').val();
		$('#new_content').val('');
		if(content == ''){
			return true;
		}
		$(this).addClass('sended').prop('disabled',true);
		
		$.ajax({
			url: '/api/mutter/store',
			type: "POST",
			dataType: "json",
			data: {
				content: content,
				csrf_token: token,
				nickname: 'test'
			}
		}).done(function(data){
			$('#send').removeClass('sended');
		});

	});
});
</script>
@endsection