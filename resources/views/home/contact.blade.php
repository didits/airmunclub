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
                        <form class="uk-form" method="POST" action="{{url('contact_submit')}}">
                            {{csrf_field()}}
                            <legend><b>CONTACT US</b></legend>
                            <div class="uk-grid">
                                <div class="uk-width-medium-5-10">
                                    <div class="uk-form-row">
                                    <label class="uk-form-label" for="">First Name</label>
                                        <input name="first_name" type="text" style="width:100%;" placeholder="John" required>
                                    </div>                                    
                                </div>
                                <div class="uk-width-medium-5-10">
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="">Email</label>
                                        <input name="email" type="email" style="width:100%;" placeholder="john@gmail.com" required>
                                    </div>
                                </div>
                                </div>
                                <div class="uk-grid">
                                <div class="uk-width-medium-5-10">
                                    <div class="uk-form-row">
                                    <label class="uk-form-label" for="">Last Name</label>
                                        <input name="last_name" type="text" style="width:100%;" placeholder="Alexander" required>
                                    </div>                                    
                                </div>
                                <div class="uk-width-medium-5-10">
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="">Phone Number</label>
                                        <input name="phone" type="text" style="width:100%;" placeholder="+6285xxx" required>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-10-10">
                                    <div class="uk-form-row">
                                    <label class="uk-form-label" for="">Subject</label>
                                        <input name="subject" type="text" style="width:100%;" placeholder="" required>
                                    </div>
                                    <div class="uk-form-row">
                                    <label class="uk-form-label" for="">Your Message</label>
                                        <textarea name="message" style="width:100%" required></textarea>
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