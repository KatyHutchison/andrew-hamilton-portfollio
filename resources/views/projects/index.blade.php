@extends("partials.app")

@section('content')
    <div class="container pt-4">
        @foreach($projects as $project)
            <div class="row pb-3 ">
                @if ($project->slice(0,1)->first())
                    <div class="col-md-4 thumbnail-height">
                        <a href="/project/{{$project->slice(0,1)->first()->id}}">
                            <img class="img-fluid" src={{ storage_path($project->slice(0,1)->first()->thumbnailImage->path) }} alt="">
                        </a>
                        <div class="text-center pt-2">
                            {{ $project->slice(0,1)->first()->thumbnailImage->label }}
                        </div>
                    </div>
                @endif
                @if ($project->slice(1,1)->first())
                    <div class="col-md-4 thumbnail-height">
                        <a href="/project/{{$project->slice(1,1)->first()->id}}">
                            <img class="img-fluid" src={{ storage_path($project->slice(1,1)->first()->thumbnailImage->path) }} alt="">
                        </a>
                        <div class="text-center pt-2">
                            {{ $project->slice(0,1)->first()->thumbnailImage->label }}
                        </div>
                    </div>
                @endif
                @if ($project->slice(2,1)->first())
                    <div class="col-md-4 thumbnail-height">
                        <a href="/project/{{$project->slice(2,1)->first()->id}}">
                            <img class="img-fluid" src={{ storage_path($project->slice(2,1)->first()->thumbnailImage->path) }} alt="">
                        </a>
                        <div class="text-center pt-2">
                            {{ $project->slice(0,1)->first()->thumbnailImage->label }}
                        </div>
                    </div>
                @endif
            </div>
        @endforeach

    </div>
@endsection