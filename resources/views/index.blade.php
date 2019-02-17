@extends('template.common')
@section('title', 'mutters')
@section('content')

<?php foreach($mutters as $mutter){ ?>
	<div class="mutter_card">
		<div class="mutter_content">{{ $mutter['content'] }}</div>
		<div class="mutter_nickname">{{ $mutter['nickname'] }}</div>
		<div class="mutter_created_at">{{  $mutter['created_at'] }}</div>
	</div>
<?php } ?>

@endsection