@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="custom-card-register">
          <div class="card-header">{{ __('Custom') }}</div>
          @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
          @endif
            <div class="card-body">
              <form method="POST" action=" {{ route('store') }} " onsubmit="return confirm('Save changes?');"> 
                  @csrf
                  <div class="form-group row">
                      <label for="logo" class="col-md-2 col-form-label text-md-right">{{ __('Logo') }}</label>

                      <div class="col-md-8">
                          <input id="logo" type="url" class="form-control {{ $errors->has('logo') ? ' is-invalid' : '' }}" name="logo" value="{{ (isset($custom)? $custom->logourl : old('logo')) }}" placeholder="url logo" onchange="javascript:document.getElementById('logo-preview').src = document.getElementById('logo').value; document.getElementById('logo-preview').style.display = 'block';" required autofocus>
                          @if ($errors->has('logo'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('logo') }}</strong>
                              </span>
                          @endif
                      </div>
                    <div class="col-md-2 div-preview">
                        @if ($custom)
                            <img id="logo-preview" src="{{ $custom->logourl }}" class="img-fluid img-thumbnail" title="logo" alt="Error">
                        @else
                            <img id="logo-preview" src="" class="img-fluid img-thumbnail" title="logo" style="display: none;" alt="Error"> 
                        @endif
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="background" class="col-md-2 col-form-label text-md-right">{{ __('Background') }}</label>

                      <div class="col-md-8">
                          <input id="background" type="url" class="form-control{{ $errors->has('background') ? ' is-invalid' : '' }}" name="background" value="{{ (isset($custom)? $custom->backgroundurl : old('background')) }}" placeholder="url background" onchange="javascript:document.getElementById('background-preview').src = document.getElementById('background').value; document.getElementById('background-preview').style.display = 'block';" required autofocus>

                          @if ($errors->has('background'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('background') }}</strong>
                              </span>
                          @endif
                      </div>
                       <div class="col-md-2 div-preview">
                        @if ($custom)
                            <img id="background-preview" src="{{ $custom->backgroundurl }}" class="img-fluid img-thumbnail" title="background" alt="Error">
                        @else
                            <img id="background-preview" src="" class="img-fluid img-thumbnail" title="background" style="display: none;" alt="Error">
                        @endif
                    </div>
                  </div>
                <label for="image1" class="col-md-12">{{ __('Carousel images:') }}</label>
                <div class="form-group row">
                    <label for="image1" class="col-md-2 col-form-label text-md-right">{{ __('Image1') }}</label>
                    
                    <div class="col-md-8">
                        <input id="image1" type="url" class="form-control{{ $errors->has('image1') ? ' is-invalid' : '' }}" name="image1" value="{{ ( (count($images) > 0)? $images[0]->url : old('imagen1') ) }}" placeholder="url image1" onchange="javascript:document.getElementById('image1-preview').src = document.getElementById('image1').value; document.getElementById('image1-preview').style.display = 'block';" required autofocus>
                        @if ($errors->has('image1'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image1') }}</strong>
                        </span>
                        @endif
                    </div>
                     <div class="col-md-2 div-preview">
                        @if (count($images) > 0)
                            <img id="image1-preview" src="{{ $images[0]->url }}" class="img-fluid img-thumbnail" title="image1" alt="Error">
                        @else
                            <img id="image1-preview" src="" class="img-fluid img-thumbnail" title="image1" style="display: none;" alt="Error">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image2" class="col-md-2 col-form-label text-md-right">{{ __('Image2') }}</label>
                    
                    <div class="col-md-8">
                        <input id="image2" type="url" class="form-control{{ $errors->has('image2') ? ' is-invalid' : '' }}" name="image2" value="{{ ( (count($images) > 0)? $images[1]->url : old('imagen2')) }}" placeholder="url image2" onchange="javascript:document.getElementById('image2-preview').src = document.getElementById('image2').value; document.getElementById('image2-preview').style.display = 'block';"  required autofocus>
                        @if ($errors->has('image2'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image2') }}</strong>
                        </span>
                        @endif
                    </div>
                     <div class="col-md-2 div-preview">
                        @if (count($images) > 0)
                            <img id="image2-preview" src="{{ $images[1]->url }}" class="img-fluid img-thumbnail" title="image2" alt="Error">
                        @else
                            <img id="image2-preview" src="" class="img-fluid img-thumbnail" title="image2" style="display: none;" alt="Error">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image3" class="col-md-2 col-form-label text-md-right">{{ __('Image3') }}</label>
                    
                    <div class="col-md-8">
                        <input id="image3" type="url" class="form-control{{ $errors->has('image3') ? ' is-invalid' : '' }}" name="image3" value="{{ ( (count($images) > 0)? $images[2]->url : old('imagen3')) }}" placeholder="url image3" onchange="javascript:document.getElementById('image3-preview').src = document.getElementById('image3').value; document.getElementById('image3-preview').style.display = 'block';" required autofocus>
                        @if ($errors->has('image3'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image3') }}</strong>
                        </span>
                        @endif
                    </div>
                     <div class="col-md-2 div-preview">
                        @if (count($images) > 0)
                            <img id="image3-preview" src="{{ $images[2]->url }}" class="img-fluid img-thumbnail" title="image3" alt="Error">
                        @else
                            <img id="image3-preview" src="" class="img-fluid img-thumbnail" title="image3" style="display: none;" alt="Error">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image4" class="col-md-2 col-form-label text-md-right">{{ __('Image4') }}</label>
                    
                    <div class="col-md-8">
                        <input id="image4" type="url" class="form-control{{ $errors->has('image4') ? ' is-invalid' : '' }}" name="image4" value="{{ ( (count($images) > 0)? $images[3]->url : old('imagen4')) }}" placeholder="url image4" onchange="javascript:document.getElementById('image4-preview').src = document.getElementById('image4').value; document.getElementById('image4-preview').style.display = 'block';" required autofocus>
                        @if ($errors->has('image4'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image4') }}</strong>
                        </span>
                        @endif
                    </div>
                     <div class="col-md-2 div-preview">
                        @if (count($images) > 0)
                            <img id="image4-preview" src="{{ $images[3]->url }}" class="img-fluid img-thumbnail" title="image4" alt="Error">
                        @else
                            <img id="image4-preview" src="" class="img-fluid img-thumbnail" title="image4" style="display: none;" alt="Error">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image5" class="col-md-2 col-form-label text-md-right">{{ __('Image5') }}</label>
                    
                    <div class="col-md-8">
                        <input id="image5" type="url" class="form-control{{ $errors->has('image5') ? ' is-invalid' : '' }}" name="image5" value="{{ ( (count($images) > 0)? $images[4]->url : old('imagen5')) }}" placeholder="url image5" onchange="javascript:document.getElementById('image5-preview').src = document.getElementById('image5').value; document.getElementById('image5-preview').style.display = 'block';"required autofocus>
                        @if ($errors->has('image5'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image5') }}</strong>
                        </span>
                        @endif
                    </div>
                     <div class="col-md-2 div-preview">
                        @if (count($images) > 0)
                            <img id="image5-preview" src="{{ $images[4]->url }}" class="img-fluid img-thumbnail" title="image5" alt="Error">
                        @else
                            <img id="image5-preview" src="" class="img-fluid img-thumbnail" title="image5" style="display: none;" alt="Error>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="video" class="col-md-2 col-form-label text-md-right">{{ __('Video') }}</label>

                    <div class="col-md-8">
                        <input id="video" type="url" class="form-control{{ $errors->has('video') ? ' is-invalid' : '' }}" name="video" value="{{ (isset($custom)? $custom->videourl : old('video')) }}" placeholder="url video" required autofocus>

                        @if ($errors->has('video'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('video') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="color" class="col-md-2 col-form-label text-md-right">{{ __('Color') }}</label>
                    
                    <div class="col-md-5">
                        <input id="color" type="color" class="col-10" name="color" value="{{ old('color') }}" onchange="javascript:document.getElementById('chosen-color').value = document.getElementById('color').value;">                        
                        @if ($errors->has('chosen-color'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('chosen-color') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <input id="chosen-color" type="text" class="form-control{{$errors->has('chosen-color') ? ' is-invalid' : '' }}" name="chosen-color" value="{{ (isset($custom)? $custom->color : old('chosen-color')) }}" onchange="javascript:document.getElementById('color').value = document.getElementById('chosen-color').value;" required autofocus>
                    </div>
                </div>
                <div class="form-group row mb-0">
                        <div class="col-md-4 offset-md-4">
                            <button type="submit" class="mx-auto btn appli-button">
                                {{ __('Apply') }}
                            </button>
                        </div>
                    </div>
                </form>
          </div>
        </div>
    </div>
        
    </div>
</div>
@endsection