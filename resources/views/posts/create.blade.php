@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Crear Nuevo Post</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Texto del post</label>

                        <input id="caption" 
                            type="text" 
                            class="form-control @error('caption') is-invalid @enderror" 
                            caption="caption" 
                            value="{{ old('caption') }}"  
                            autocomplete="caption" autofocus>

                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">Imagen del Post</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <button class="btn btn-primary">Crear Nuevo Post</button>
                </div>
            </div>
        </div>
         
    </form>
</div>
@endsection
