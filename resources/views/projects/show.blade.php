@extends('partials.app')
@section('content')
    <div class="row">
        <!--image carrosel-->
        <div class="col-md-6">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src={{ Storage::url($project->galleryImages->first()->path) }}
                                alt="First slide">
                    </div>
                    @foreach($project->galleryImages->slice(1)->all() as $image)
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src={{ Storage::url($image->path) }}
                                    alt="First slide">
                        </div>
                    @endforeach

                </div>

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!--description-->
        <div class="col-md-6">
            <div class="project-heading">
                <h3>{{ $project->heading }}</h3>
            </div>
            <div class="project-text">
                {!! $project->body !!}
            </div>
        </div>
    </div>
@endsection