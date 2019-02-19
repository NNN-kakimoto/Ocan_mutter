@extends('template.common')
@section('title', 'mutters')
@section('content')

<?php foreach($mutters as $mutter){ ?>
	<div class="mutter_card">
		<div class="mutter_content">{{ $mutter->content }}</div>
		<div class="mutter_status">
			<span class="mutter_nickname">by : {{ $mutter->nickname }}</span>
			<span class="mutter_created_at">{{  $mutter->created_at }}</span>
		</div>
	</div>
<?php } ?>

@endsection