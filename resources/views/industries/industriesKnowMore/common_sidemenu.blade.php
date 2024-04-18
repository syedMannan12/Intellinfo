<div class="row industries_common_sec">
    <div class="col-12">
        <h5>Our Industries</h5>
        @if( \Request::is('industries-retail'))
        <a href="{{URL::to('industries-retail')}}" class="solutions_links active_industries_links">
            <p class="mt-3"> Retail Industries </p>
        </a>
        @else
        <a href="{{URL::to('industries-retail')}}" class="solutions_links">
            <p class="mt-3"> Retail Industries </p>
        </a>
        @endif


        @if( \Request::is('industries-hospitality'))
        <a href="{{URL::to('industries-hospitality')}}" class="solutions_links active_industries_links">
            <p> Hospitality Industry </p>
        </a>
        @else
        <a href="{{URL::to('industries-hospitality')}}" class="solutions_links">
            <p> Hospitality Industry </p>
        </a>
        @endif


        @if( \Request::is('industries-it'))
        <a href="{{URL::to('industries-it')}}" class="solutions_links active_industries_links">
            <p> IT Industries </p>
        </a>
        @else
        <a href="{{URL::to('industries-it')}}" class="solutions_links">
            <p> IT Industries </p>
        </a>
        @endif


        @if( \Request::is('industries-call-center'))
        <a href="{{URL::to('industries-call-center')}}" class="solutions_links active_industries_links">
            <p> Call Centers </p>
        </a>
        @else
        <a href="{{URL::to('industries-call-center')}}" class="solutions_links">
            <p> Call Centers </p>
        </a>
        @endif



        @if( \Request::is('industries-health-care'))
        <a href="{{URL::to('industries-health-care')}}" class="solutions_links active_industries_links">
            <p> Healthcare Industry </p>
        </a>
        @else
        <a href="{{URL::to('industries-health-care')}}" class="solutions_links">
            <p> Healthcare Industry </p>
        </a>
        @endif



        @if( \Request::is('industries-education'))
        <a href="{{URL::to('industries-education')}}" class="solutions_links active_industries_links">
            <p> Education industry </p>
        </a>
        @else
        <a href="{{URL::to('industries-education')}}" class="solutions_links">
            <p> Education industry </p>
        </a>
        @endif


        @if( \Request::is('industries-music'))
        <a href="{{URL::to('industries-music')}}" class="solutions_links active_industries_links">
            <p> Music </p>
        </a>
        @else
        <a href="{{URL::to('industries-music')}}" class="solutions_links">
            <p> Music </p>
        </a>
        @endif



        
    </div>
</div>