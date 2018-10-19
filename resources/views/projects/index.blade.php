@extends("partials.app")

@section('content')
    <div class="index-top">
        @foreach($projects as $projectBatch)
            <div class="row pb-5">
                @foreach($projectBatch as $project)
                    @if ($project)
                        <div class="col-md-4 project-thumbnail">
                            <a href="/project/{{$project->id}}">
                                <img class="img-fluid"
                                     src={{ Storage::url($project->thumbnailImage->path) }} alt="">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        @endforeach
    </div>
@endsection