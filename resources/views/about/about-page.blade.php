@extends("partials.app")
@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src={{ Storage::url($pageData->get('headerImage')->path) }} alt="" class="img-fluid">
            </div>

            <div class="about-text col-md-6">
                {!! $pageData->get('mainText')->text !!}
            </div>
        </div>
    </div>

@endsection
