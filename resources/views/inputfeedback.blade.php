@extends('Layouts.main')

@section('Content')
    <div class="container h-100">
        <h2 class="text-white border-bottom">Halaman Feedback</h1>
        <form class="mb-4" action="/inputanfeedback" method="POST" id="form_feedback">
            @csrf
            <textarea name="comment" placeholder="  Silahkan Hujat" id="form_feedback" class="w-100" style="height: 18rem"></textarea>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
    
@endsection