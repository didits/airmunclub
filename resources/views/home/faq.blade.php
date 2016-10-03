@extends('master.master_owline')
@section('title', 'BridgeYes.com')
@section('description')

@stop
@section('content')
<div class="uk-container uk-container-center">
    <div class="tm-container">
        @include('master.navbar_owline')                               


        <section class="uk-grid uk-grid-match" data-uk-grid-margin>
            <div class="uk-width-medium-1-1">
               <div id="tm-hero" class="uk-contrast" >
                <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                    <div class="uk-width-medium-1-1">
                        <div class="uk-panel ">
                            <div class="uk-width-large-4-4 uk-text-center uk-margin-large">
                                <div class="uk-margin-bottom uk-margin-top">
                                    <h1 class="uk-heading-large uk-margin-large-top" style="color:#000">FAQ</h1>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>     

            <div id="tm-top" class="tm-top uk-block uk-block-default">

                <section class="uk-grid uk-grid-match" data-uk-grid-margin>

                    <div class="uk-width-medium-1-1">

                        <div class="uk-panel  uk-text-center ">




                            <div class="uk-width-medium-3-4 uk-align-center">
                                <h3><strong>WHAT IS MUN?</strong></h3>
                                <p style="margin-top:-20px">
                                    Model United Nations (MUN) is an academic simulation of the United Nations conference. MUN aims to educate participants about major world issues which would be discussed by the actual United Nations. In this simulation, participants play the role of delegates from different countries and attempt to solve real world issues using the policies and perspectives of their assigned country. While playing their roles as ambassadors who representing a country, delegates obligated to make speeches, prepare working papers and draft resolutions, negotiate with allies, resolve conflicts, and navigate the Model UN conference rules of procedure - all in the interest of mobilizing international cooperation to resolve problems that affect countries all over the world.</p>
                                    <h3><strong>WHAT IS AIRLANGGA MUN CLUB?</strong></h3>
                                    <p style="margin-top:-20px">
                                        Airlangga Model United Nations Club (AIRMUN Club) is a form of community which facilitates every student of Universitas Airlangga with interest and passion for improving its diplomatic and debate skills on the global issue.  Our community aim to give the same opportunity and space to all students to improve their public speaking ability, expressing their ideas on international issues, and furthermore, to participate as a delegate represents Universitas Airlangga on national and international MUN conference such as Harvard National Model United Nations (HNMUN), Harvard World Model United Nations (Harvard WMUN), Asia-Pacific Model United Nations Conference (AMUNC), Jakarta Model United Nations (JMUN), and many more.</p>

                                        <h3><strong>WHO CAN BE A MEMBER OF AIRLANGGA MUN CLUB?</strong></h3>
                                        <p style="margin-top:-20px">
                                           Students from any major and faculty of Universitas Airlangga can be members of Airlangga MUN Club.</p>
                                           <h3><strong>HOW TO BECOME A MEMBER OF AIRLANGGA MUN CLUB? </strong></h3>
                                               <p style="margin-top:-20px">
                                                   For information about how to become a member, see the Member Recruitment page.</p>

                                               </div>
                                           </div>

                                       </div>
                                   </section>


                               </div>
                               @include('master.footer')  
                               @include('master.navbar_mobile')  
                               @endsection