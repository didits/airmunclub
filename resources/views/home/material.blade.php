@extends('master.master_owline')
@section('title', 'BridgeYes.com')
@section('description')

@stop
@section('content')
<div class="uk-container uk-container-center">
    <div class="tm-container">
        @include('master.navbar_owline')                               
        
        <div id="tm-hero" class="uk-contrast" >
            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                    <div class="uk-panel ">
                        <div class="uk-width-large-4-4 uk-text-center uk-margin-large">
                            <div class="uk-margin-bottom uk-margin-top">
                                <h1 class="uk-heading-large uk-margin-large-top" style="color:#000">MATERIAL</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>     

         <div id="tm-main" class="tm-main uk-block uk-block-default">
            <article class="uk-article">

                            <div class="uk-overflow-container">
                                <table class="uk-table uk-table-hover  uk-table-striped uk-table-condensed">
                                    <thead class="uk-text-bold">
                                        <tr class="uk-text-bold">
                                            <td>DATE</td>
                                            <td>TITLE</td>
                                            <td>DESCRIPTION</td>
                                            <td>LINK</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                        </tr>
                                        <tr>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                        </tr>
                                        <tr>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                        </tr>
                                        <tr>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                        </tr>
                                        <tr>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                        </tr>
                                        <tr>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                            <td>Table Data</td>
                                        </tr>
</tbody>
                                </table>
                            </div>
                            </article>
</div>


        
@include('master.footer')  
@include('master.navbar_mobile')  
@endsection