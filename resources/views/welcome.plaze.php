<@extends('layouts.app')

<@section('title', __('view.welcomeTo').config('app.name'))

<@section('content')
	<header>
		<div class="container">
			<div class="brand">
				<h1>{{ config('app.name') }}</h1>
			</div>
		</div>
	</header>
	<div class="content">
		<div class="container">
			<div class="status">
				<h2 class="text-gradient">{{ __('view.welcomeTo') }} {{ config('app.name') }}</h2>
				<code>
					<span class="check">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M0 0h24v24H0z" fill="none"></path>
							<path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
						</svg>
					</span>
					<span>{{ basePath() }}</span>
				</code>
				<p class="status-message">
					{{ __('view.successfullyInstalled') }}
				</p>
			</div>
		</div>
	</div>
<@stop
