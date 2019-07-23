@extends('layouts.layout1')
@section('title', 'Kayıt Ol')

@section('content')
<div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center">Kayıt Ol</h5>
                <form method="post" action="{{route('register.create')}}" class="form-signin">
                    @csrf
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                    @endforeach
                    
                    <div class="form-label-group">
                        <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Kullanıcı adı" required
                            autofocus>
                        <label for="inputEmail">Kullanıcı adı</label>
                    </div>
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Kullanıcı adı" required
                            autofocus>
                        <label for="inputEmail">E-Posta</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                        <label for="inputPassword">Şifre</label>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Kayıt Ol</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
