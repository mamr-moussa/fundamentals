@extends('layouts.main')

@section('externals')


@endsection

@section('content')

<div class="row">
    <br/>
    <codearea></codearea>
</div>

@endsection

@section('tail')
<script type="text/javascript" src="{{asset('js/map.js')}}"></script>
@endsection