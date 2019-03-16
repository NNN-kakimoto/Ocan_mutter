@extends('template.common')
@section('title', 'new')
@section('content')

<div class="new">
	<div class="new_nickname">体験で設定したnicknameを入力してください。</div>
	<form method="POST" action="/branch_select">
		{{ csrf_field() }}
		<input name="nickname" id="new_content" class="nickname_input" autofocus>
		<button type="submit" name="post" class="send">つぎへ</button>
	</form>
	</div>
</div>

@endsection