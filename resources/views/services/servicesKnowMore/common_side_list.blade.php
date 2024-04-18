<div class="row industries_common_sec">
    <div class="col-12">
        <h5>Our Services</h5>
        


        @if( \Request::is('services-business-automation'))
        <a href="{{URL::to('services-business-automation')}}" class="solutions_links active_industries_links">
            <p> Business automation software solutions </p>
        </a>
        @else
        <a href="{{URL::to('services-business-automation')}}" class="solutions_links">
            <p> Business automation software solutions </p>
        </a>
        @endif


        @if( \Request::is('services-web-solutions'))
        <a href="{{URL::to('services-web-solutions')}}" class="solutions_links active_industries_links">
            <p> Web solutions </p>
        </a>
        @else
        <a href="{{URL::to('services-web-solutions')}}" class="solutions_links">
            <p> Web solutions </p>
        </a>
        @endif


        @if( \Request::is('services-mobile-solutions'))
        <a href="{{URL::to('services-mobile-solutions')}}" class="solutions_links active_industries_links">
            <p> Mobile solutions </p>
        </a>
        @else
        <a href="{{URL::to('services-mobile-solutions')}}" class="solutions_links">
            <p> Mobile solutions </p>
        </a>
        @endif




        @if( \Request::is('network'))
        <a href="{{URL::to('network')}}" class="solutions_links active_industries_links">
            <p> Network </p>
        </a>
        @else
        <a href="{{URL::to('network')}}" class="solutions_links">
            <p> Network </p>
        </a>
        @endif



        @if( \Request::is('cloud-computing'))
        <a href="{{URL::to('cloud-computing')}}" class="solutions_links active_industries_links">
            <p> Cloud Computing </p>
        </a>
        @else
        <a href="{{URL::to('cloud-computing')}}" class="solutions_links">
            <p> Cloud Computing </p>
        </a>
        @endif



        @if( \Request::is('it-consulting'))
        <a href="{{URL::to('it-consulting')}}" class="solutions_links active_industries_links">
            <p> IT Consulting </p>
        </a>
        @else
        <a href="{{URL::to('it-consulting')}}" class="solutions_links">
            <p> IT Consulting </p>
        </a>
        @endif



        @if( \Request::is('cyber-security'))
        <a href="{{URL::to('cyber-security')}}" class="solutions_links active_industries_links">
            <p> Cyber Security </p>
        </a>
        @else
        <a href="{{URL::to('cyber-security')}}" class="solutions_links">
            <p> Cyber Security </p>
        </a>
        @endif



        @if( \Request::is('help-desk'))
        <a href="{{URL::to('help-desk')}}" class="solutions_links active_industries_links">
            <p> Help Desk </p>
        </a>
        @else
        <a href="{{URL::to('help-desk')}}" class="solutions_links">
            <p> Help Desk </p>
        </a>
        @endif



        @if( \Request::is('data-backup-recovery'))
        <a href="{{URL::to('data-backup-recovery')}}" class="solutions_links active_industries_links">
            <p> Data Backup and Recovery </p>
        </a>
        @else
        <a href="{{URL::to('data-backup-recovery')}}" class="solutions_links">
            <p> Data Backup and Recovery </p>
        </a>
        @endif



        @if( \Request::is('application-development-maintenance'))
        <a href="{{URL::to('application-development-maintenance')}}" class="solutions_links active_industries_links">
            <p> Application Development and Maintenance </p>
        </a>
        @else
        <a href="{{URL::to('application-development-maintenance')}}" class="solutions_links">
            <p> Application Development and Maintenance </p>
        </a>
        @endif



        @if( \Request::is('artifical-intelligence'))
        <a href="{{URL::to('artifical-intelligence')}}" class="solutions_links active_industries_links">
            <p> Artificial Intelligence </p>
        </a>
        @else
        <a href="{{URL::to('artifical-intelligence')}}" class="solutions_links">
            <p> Artificial Intelligence </p>
        </a>
        @endif


        @if( \Request::is('machine-learning'))
        <a href="{{URL::to('machine-learning')}}" class="solutions_links active_industries_links">
            <p> Machine Learning </p>
        </a>
        @else
        <a href="{{URL::to('machine-learning')}}" class="solutions_links">
            <p> Machine Learning </p>
        </a>
        @endif


        @if( \Request::is('internet-of-things'))
        <a href="{{URL::to('internet-of-things')}}" class="solutions_links active_industries_links">
            <p> Internet of Things </p>
        </a>
        @else
        <a href="{{URL::to('internet-of-things')}}" class="solutions_links">
            <p> Internet of Things </p>
        </a>
        @endif
        
    </div>
</div>
