@extends("partials.app")
@section("content")

<div class="container">

    <div class="row">
        <img src={{ Storage::url($pageData->get('headerImage')->path) }} alt="" class="img-fluid">
    </div>
    
    <div class="row about-text">
       {!! $pageData->get('mainText')->text !!}
    </div>
</div>

@endsection
