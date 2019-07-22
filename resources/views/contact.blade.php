@extends('layouts.layout')
@section('title', 'İletişim')
@section('content')
@section('headerTitle', 'İletişim')
@section('headerSub', 'İletişime geçmek için formu doldurabilirisin.')
<div class="col-md-10 col-lg-8 mx-auto">
    <p>
        Bir sorun, öneri, düşüncelerinizi lütfen iletiniz. 
    </p>
    <form id="contactForm" name="sentMessage" novalidate="novalidate">
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Adınız ve Soyadınız</label>
                <input class="form-control" type="text" id="name" required="" placeholder="Adınız ve Soyadınız">
                <small class="form-text text-danger help-block"></small>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Email Adresiniz</label>
                <input class="form-control" type="email" id="email" required="" placeholder="Email Addresiniz">
                <small class="form-text text-danger help-block"></small>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-3">
                <label>Mesajınız</label>
                <textarea class="form-control" id="message" data-validation-required-message="Lütfen mesajınızı giriniz."
                    required="" placeholder="Mesajınız" rows="5"></textarea>
                <small class="form-text text-danger help-block"></small>
            </div>
        </div>
        <div id="success"></div>
        <div class="form-group">
            <button class="btn btn-primary" id="sendMessageButton" type="submit">Gönder</button>
        </div>
    </form>
</div>
</div>
@endsection
