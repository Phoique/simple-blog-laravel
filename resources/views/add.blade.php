@extends('layouts.layout1')
@section('title', 'Blog Yazısı Ekle')
@section('content')
@extends('partials.authNavbar')
<div class="row" style="position: relative;top: 50px;">
    <div class="col-sm-12 col-md-12 col-lg-6 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center">Blog yazısı ekle</h5>
                <form method="post" action="{{ route('post.create') }}" class="form-signin">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Başlık</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Başlık">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sub_title" class="col-sm-3 col-form-label">Alt Başlık</label>
                        <div class="col-sm-9">
                            <input type="text" name="sub_title" class="form-control" id="sub_title" placeholder="Alt Başlık">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sub_title" class="col-sm-3 col-form-label">İçerek</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Yazıyı Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
