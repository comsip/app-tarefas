<<<<<<< HEAD
@if (@session('success'))
    <div class="alert alert-success">
        {{ @session('success') }}
    </div>
@endif

@if (@session('error'))
    <div class="alert alert-danger">
        {{ @session('error') }}
=======
@if(session('success'))
    <div class="alert alert-success">

        {{ session('success') }}

    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">

        {{ session('error') }}

>>>>>>> beb5549a22f22ab23a94c2d283ca9c0abd466ad1
    </div>
@endif