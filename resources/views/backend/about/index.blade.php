@extends('backend.layouts.master')

@section('content')

<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-9">
                @include('backend.layouts.notification')
                <div class="box-content card white">
                    <h4 class="box-title">à propos</h4>

                    <div class="col-md-12">
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                        @endif
                    </div>
                    <div class="card-content">
                        <form action="{{route('about.update')}}" method="POST">
                            @csrf
                            @method('put')
                            <fieldset style="border: solid 5px;padding: 10px;">
                                <legend style="width: max-content;padding: 3px;">Présentation de groupe</legend>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Titre</label>
                                <input type="text" class="form-control" placeholder="Titre" value="{{$about->heading}}" name="heading">
                            </div>

                            <div class="m-t-20">
                                <label>Image</label>

                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                      </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="image" value="{{$about->image}}">
                                  </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;">
                                    <img src="{{$about->image}}" style="margin-top:15px;max-height:100px;" />
                                </div>
                            </div>
                            <br>
                            <div class="m-t-20">
                                <label>video</label>

                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <a id="lfmvideo" data-input="thumbnailvideo" data-preview="holdervideo" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                      </a>
                                    </span>
                                    <input id="thumbnailvideo" class="form-control" type="text" name="video" value="{{$about->video}}">
                                  </div>
                                <div id="holdervideo" style="margin-top:15px;">

                                    <video width="320" height="240" controls>
                                        <source src="{{$about->video}}" type="video/mp4">
                                        <source src="{{$about->video}}" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </div>
                            </div>

                            <div class="m-t-20" style="margin-top: 25px;">
                                <label for="exampleInputEmail1">Présentation</label>
                                <textarea name="content" class="form-control" id="description" placeholder="Text....">{{$about->content}}</textarea>
                            </div>

                            </fieldset>
                            <br>

                            <fieldset style="border: solid 5px;padding: 10px;">
                                <legend style="width: max-content;padding: 3px;">Nos Contact</legend>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" placeholder="Email" value="{{$about->email}}" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Téléphone</label>
                                    <input type="text" class="form-control" placeholder="Téléphone" value="{{$about->phone}}" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Adresse</label>
                                    <input type="text" class="form-control" placeholder="Adresse" value="{{$about->address}}" name="address">
                                </div>
                            </fieldset>
                            <br>

                            <fieldset style="border: solid 5px;padding: 10px;">
                                <legend style="width: max-content;padding: 3px;">Nos Social-Media</legend>
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" class="form-control" placeholder="https://facebook.com/Nomdevotrepagefb" value="{{$about->facebook}}" name="facebook">
                                </div>
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" class="form-control" placeholder="https://instagram.com/Nomdevotrepageinsta" value="{{$about->instagram}}" name="instagram">
                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text" class="form-control" placeholder="https://instagram.com/Nomdevotrepagetwitter" value="{{$about->twitter}}" name="twitter">
                                </div>
                                <div class="form-group">
                                    <label>Linkedin</label>
                                    <input type="text" class="form-control" placeholder="https://instagram.com/Nomdevotrepagelinkedin" value="{{$about->linkedin}}" name="linkedin">
                                </div>
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input type="text" class="form-control" placeholder="https://youtube.com/Nomdevotrechaineyoutube" value="{{$about->youtube}}" name="youtube">
                                </div>
                            </fieldset>
                            <br>

                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
<script>
    $('#lfmvideo').filemanager('video');
</script>
<script>
    $('#lfm_mot').filemanager('image');
</script>
<script>
    $('#lfm_cata').filemanager('file');
</script>
<script>
    $(document).ready(function() {
        $('#description').summernote();
    });
  </script>
<script>
    $(document).ready(function() {
        $('#description_mot').summernote();
    });
  </script>
  <script>
    $(document).ready(function() {
        $('#mot_mot').summernote();
    });
  </script>
@endsection
