@extends('Layouts.main')

@section('Content')
<body>
    <div class="container my-5">
        <div class="row justify-content-center ">
            <div class="col-12 col-md 8 col-lg 5">
                <div class="card" style="width: 50%">
                    <div class="card-body">

                        <form action="{{ route('registerInput') }}" method="POST">
                        @csrf
                            <h2>Register</h2>
        
                            <div class="mb-3">
                                <label for="">Nama</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button class="btn btn-primary" type="submit">Register</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

