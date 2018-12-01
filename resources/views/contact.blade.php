@extends('layouts.app')

@section('content')
    <h1 for="name">Contact</h1>
    <form action="{{route('submit')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}">
            @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="mess">Message</label>
            <textarea name="message" id="mess" cols="30" rows="10" class="form-control"></textarea>
        </div>           
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="submit">
        </div>    
    </form>
@endsection

