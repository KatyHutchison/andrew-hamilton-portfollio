@extends("partials.app")

@section('content')
    <div class="pt-4">
        @foreach($projects as $projectBatch)
            <div class="row pb-3 ">
                @foreach($projectBatch as $project)
                    @if ($project)
                        <div class="col-md-4 thumbnail-height">
                            <a href="/project/{{$project->id}}">
                                <img class="img-fluid"
                                     src={{ asset($project->thumbnailImage->path) }} alt="">
                            </a>
                            <div class="text-center pt-2">
                                {{ $project->thumbnailImage->label }}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endforeach
    </div>
@endsection