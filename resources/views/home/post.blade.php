@extends('master.master_owline')
@section('title', 'BridgeYes.com')
@section('description')

@stop
@section('content')
<div class="uk-container uk-container-center">
    <div class="tm-container">
        @include('master.navbar_owline')                               
          

         <div id="tm-main" class="tm-main uk-block uk-block-default">
            
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-3-4 uk-container-center">
                <h2 style="color:#000">{{$article->title}}</h2>
                    <article class="uk-article">

                      
                        <p><img src="{{$article->path}}" width="900" height="300" alt=""></p>
                        <p class="uk-article-meta" style="float:right">Written by Author on <?php $date = date_create($article->updated_at); echo date_format($date, 'jS F Y H:i:s');?>
                        <br><br>


                        {!!$article->description!!}

                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57bd3a55cbeac59c"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div style="margin-top:30px; margin-left:-3px" class="addthis_inline_share_toolbox"></div>

                    </article>
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <ul>

</ul>

    <script id="dsq-count-scr" src="//EXAMPLE.disqus.com/count.js" async></script>

<div id="disqus_thread"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */
    /*
    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
        var d = document, s = d.createElement('script');
        
        s.src = '//soraciel.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

            </div>

        </div>
</div>


        
@include('master.footer')  
@include('master.navbar_mobile')  
@endsection