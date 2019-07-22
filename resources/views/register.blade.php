@extends('layouts.layout1')
@section('title', 'Kayıt Ol')

@section('content')
<div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center">Kayıt Ol</h5>
                <form class="form-signin">
                    <div class="form-label-group">
                        <input type="text" id="inputEmail" class="form-control" placeholder="Kullanıcı adı" required
                            autofocus>
                        <label for="inputEmail">Kullanıcı adı</label>
                    </div>
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Kullanıcı adı" required
                            autofocus>
                        <label for="inputEmail">E-Posta</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <label for="inputPassword">Şifre</label>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Kayıt Ol</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
