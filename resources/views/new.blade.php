@extends('template.common')
@section('title', 'new')
@section('content')

<div class="new">
	<div class="new_nickname">名無し さんこんにちは!</div>
	<textarea id="new_content" rows="10"></textarea>
	<div class="new_controll">
		<a href="/" class="new_back_button">BACK</a>
		<button type="button" id="send" class="sended">SEND</button>
	</div>
</div>



@endsection