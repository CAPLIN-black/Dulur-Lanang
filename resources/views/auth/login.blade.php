@extends('Layouts.main')

@section('Content')
<body>
    <div class="container my-5">
        <div class="row justify-content-center ">
            <div class="col-12 col-md 8 col-lg 5">
                <div class="card" style="width: 50%">
                    <div class="card-body">

                        <h2>Login bang</h2>
                        @if(session()->has('error'))
                        <p class="text-danger">{{ session('error') }}</p>

                        @endif

                        <form action="/loginInput" method="POST">
                        @csrf
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button class="btn btn-primary mb-3" type="submit">Login</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

