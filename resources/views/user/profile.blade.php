@extends('layouts.app')


@section('content')

<div class="container">
	<user-profile :user="{{ $profile }}"></user-profile>
</div>

@stop