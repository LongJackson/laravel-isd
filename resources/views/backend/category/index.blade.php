@extends('backend.layout.blank')
@section('main')
<div class="row-fluid">
	<div class="span6 form" rel="form">
		@include('backend.category.form.add')
	</div>
	<div class="span6" rel="list">
		@include('backend.category.component.list')
	</div>
</div>
@stop