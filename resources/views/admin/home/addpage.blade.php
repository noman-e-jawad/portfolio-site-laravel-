@extends('admin.dashboard')
@section('content')
    <section class="container">
        {!! Form::open() !!}
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Holy smokes!</strong>
                    <br>
                    {{ implode('', $errors->all(':message')) }}
                </div>
            @endif
            <div>
                <div>
                    <h2>Page content</h2>
                </div>
                <div class="container py-5">
                    <div class="form-group">
                        <label for="name" class="text-2xl text-white mr-4">Title : </label>
                        {!! Form::text('title','home',['class'=> 'text-white border px-2 py-3 outline-none', 'required' => 'required','readonly' => 'readonly']) !!}
                        <span class="text-red-900">{{ $errors->first('title') }}</span>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </section>
@endsection

@push('footer-script')
@endpush
