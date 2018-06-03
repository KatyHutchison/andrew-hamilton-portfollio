@extends('partials.app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-8">
            <form action="/contact" method="POST">
                <div class="form-group justify-content-end">
                    <div class="form-row pb-3">
                        <label for="name">NAME</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="form-row pb-3">
                        <label for="email">EMAIL</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>

                    <div class="form-row pb-3">
                        <label for="message">MESSAGE</label>
                        <textarea rows="10" name="message" class="form-control" id="message"></textarea>
                    </div>

                    <div class="form-row">
                        <button type="submit" class="btn btn-lg btn-outline-info">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection