{{-- inlcude this file in body of index --}}
{{-- checks for errors of form value session success and session errors --}}

{{-- @if(count($errors)>0)
    @foreach($errors->all()as $error)
    <div class="alert alert-danger">
        {{$error}}
    </div>
    @endforeach
@endif
@if(session('success'))
    <div class="alert alert-sucess">
        {{$session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif --}}