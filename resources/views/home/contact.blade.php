@extends('master.master_owline')
@section('title', 'BridgeYes.com')
@section('description')

@stop
@section('content')
    <div class="uk-container uk-container-center">
        <div class="tm-container">
@include('master.navbar_owline')                               
<div id="tm-top" class="tm-top uk-block uk-block-muted">
                <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                    <div class="uk-width-medium-5-10 uk-container-center">
                        <form class="uk-form" method="POST" action="http://ivo-acapella.com/public/auth/login">
                            <legend><b>CONTACT US</b></legend>
                            <div class="uk-grid">
                                <div class="uk-width-medium-5-10">
                                    <div class="uk-form-row">
                                    <label class="uk-form-label" for="">Nama Depan</label>
                                        <input name="email" type="text" style="width:100%;" placeholder="Nama Depan" required>
                                    </div>
                                    <br>
                                    <div class="uk-form-row">
                                    <label class="uk-form-label" for="">Email</label>
                                        <input name="password" type="text" style="width:100%;" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="uk-width-medium-5-10">
                                    <div class="uk-form-row">
                                    <label class="uk-form-label" for="">Nama Belakang</label>
                                        <input name="email" type="email" style="width:100%;" placeholder="Nama Belakang" required>
                                    </div>
                                    <br>
                                    <div class="uk-form-row">
                                    <label class="uk-form-label" for="">No. Telephone</label>
                                        <input name="password" type="text" style="width:100%;" placeholder="No. Telephone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-10-10">
                                    <div class="uk-form-row">
                                    <label class="uk-form-label" for="">Subject</label>
                                        <input name="email" type="text" style="width:100%;" placeholder="Email" required>
                                    </div>
                                    <br>
                                    <div class="uk-form-row">
                                    <label class="uk-form-label" for="">Your Message</label>
                                        <textarea style="width:100%"></textarea>
                                    </div>
                                    <br>
                                    <div class="uk-form-row">
                                <button class="uk-button" type="button submit">SUBMIT</button>
                            </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </section>
            </div>
@include('master.footer')  
@include('master.navbar_mobile')  
@endsection