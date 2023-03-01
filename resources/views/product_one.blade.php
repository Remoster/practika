@extends('layouts.app')
@section('content')
<div class='list'>

    <div class="item">
        <div class="title">
          {{$product->name}}</a>
        </div>
        <div class="price">
            {{$product->year}}
        </div>
    </div>


</div>
@endsection
