@extends('layouts.app')

@section('content')
<div class="container">
<sprint-component :sprint-data="'{!! json_encode($sprints)!!}'"></sprint-component>
</div>
@endsection
