@extends('main')
@section('content')

<div class="main_header_d d-none sticky-top">
@include('common.header')
</div>




<section class="industries_call_sec industries_common_for_all p-0">
    <div class="conatiner-fluid sticky-top trans_header">
    @include('common.header')
    </div>
    <div class="container mt-5 pt-5">
        <div class="row all_main_rows">
            <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12  d-flex align-items-center">
                <div>
                    
                    <h2>Call Center</h2>
                    <h4>Call centers, centralized offices for receiving and transmitting large volumes of requests by phone, are a growing and developing industry.</h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-10  col-sm-12 d-flex align-items-center  pt-3">
            </div>
        </div>
    </div>
</section>

<!-- <section class="all_industries_content_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 left__p">
                <h2>Software development services for call centers</h2>
                <p>Call centers, centralized offices for receiving and transmitting large volumes of requests by phone, are a growing and developing industry. Now work stations for each call center agent include a PC, a telephone set/headset connected to a telecom switch and one or more supervisor stations. They can form networks with additional centers or be linked to a corporate computer network. Since many aspects of a call center rely on IT, the complex structures of modern call or contact centers, inbound, outbound, or blended call centers can hardly be realized without a proper automation system.</p>

                <h5>Network-based Automated Call Distribution (ACD)</h5>
                <ul>
                    <li>Handling queues, peaks, overload, quality control, incoming call monitoring</li>
                    <li>Routing incoming calls to agents on site or to off-site agents</li>
                    <li>CRM-PBX integration: allows call management from a CRM interface, for instance for call distribution based on the specific caller information indicated in the CRM</li>
                </ul>
                <h5>Web-based agent workplace</h5>
                <ul>
                    <li>Allows agents to process calls, e-mails, faxes, and text messages</li>
                    <li>Entry and processing of caller information</li>
                    <li>Access to statistical information</li>
                    <li>Management systems for call center agent scripts</li>
                    <li>Integration with shared CRM</li>
                    <li>Workplaces for call center agent teams with statistics functionality, other options on demand</li>
                </ul>
                <h5>Web-based manager workplace</h5>
                <ul>
                    <li>Providing the call center manager with an overview of all current activities</li>
                    <li>Recording performance data down to the level of call detail records</li>
                    <li>Call statistics in real time: call status, call duration, number of active calls, etc.</li>
                </ul>
                <h5>Workforce management systems</h5>
                <ul>
                    <li>Differentiation of call center agents by skills, system of access levels based on employee skills</li>
                    <li>Error accounting for call center agents</li>
                    <li>Automated motivation systems based on errors and successes of call center agents, their scorecards, or performance indicators</li>
                    <li>Tickets for errors / feedback / any other questions in internal corporate management systems</li>
                    <li>Knowledge management systems</li>
                </ul>
                <h5>Call recording systems</h5>
                <ul>
                    <li>Network-based call recording</li>
                    <li>System options for retrieving records as well as accessing or monitoring calls</li>
                </ul>
                <h5>Reporting</h5>
                <ul>
                    <li>Real-time and historical statistics and performance reports</li>
                    <li>Statistics available online, including service levels, incoming calls, queue time, length of hold time, and abandons</li>
                </ul>
                <h5>Schedule optimization solutions</h5>
                <ul>
                    <li>Systems that utilize the forecast data, agents� individual skill profiles, work schedules, and their preferences regarding working hours</li>
                    <li>Calendars for planned events</li>
                    <li>Automated creation of shifts, shift management</li>
                </ul>
                <h5>Customer relationship management systems (CRM)</h5>
                <ul>
                    <li>Customer database</li>
                    <li>Integration with ACD system</li>
                    <li>Customer satisfaction surveys</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 ">
                @include('industries.industriesKnowMore.common_sidemenu')
            </div>
        </div>
    </div>
</section> -->


<section class="all_industries_content_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 left__p">
            <h2>Software development services for call centers</h2>
                <p>Call centers, centralized offices for receiving and transmitting large volumes of requests by phone, are a growing and developing industry. Now work stations for each call center agent include a PC, a telephone set/headset connected to a telecom switch and one or more supervisor stations. They can form networks with additional centers or be linked to a corporate computer network. Since many aspects of a call center rely on IT, the complex structures of modern call or contact centers, inbound, outbound, or blended call centers can hardly be realized without a proper automation system.</p>

                <div class="accordion mt-5" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5>Network-based Automated Call Distribution (ACD)
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1. Handling queues, peaks, overload, quality control, incoming call monitoring</p>
                                <p>2. Routing incoming calls to agents on site or to off-site agents.</p>
                                <p>3. Software prototyping.</p>
                                <p>4. CRM-PBX integration: allows call management from a CRM interface, for instance for call distribution based on the specific caller information indicated in the CRM.</p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5>Web-based agent workplace
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1. Allows agents to process calls, e-mails, faxes, and text messages.</p>
                                <p>2. Entry and processing of caller information.</p>
                                <p>3. Access to statistical information.</p>
                                <p>4. Management systems for call center agent scripts.</p>
                                <p>5. Integration with shared CRM.</p>
                                <p>6. Workplaces for call center agent teams with statistics functionality, other options on demand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5>Web-based manager workplace</h5>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1.Providing the call center manager with an overview of all current activities.</p>
                                <p>2.Recording performance data down to the level of call detail records.</p>
                                <p>3.Call statistics in real time: call status, call duration, number of active calls, etc.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h5>Workforce management systems
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1.Differentiation of call center agents by skills, system of access levels based on employee skills.</p>
                                <p>2.Error accounting for call center agents.</p>
                                <p>3.Automated motivation systems based on errors and successes of call center agents, their scorecards, or performance indicators.</p>
                                <p>4.Tickets for errors / feedback / any other questions in internal corporate management systems.</p>
                                <p>5.Knowledge management systems.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <h5>Call recording systems
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1.Network-based call recording.</p>
                                <p>2.System options for retrieving records as well as accessing or monitoring calls.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <h5>Reporting</h5>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1.Real-time and historical statistics and performance reports.</p>
                                <p>2.Statistics available online, including service levels, incoming calls, queue time, length of hold time, and abandons.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <h5>Schedule optimization solutions
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1.Systems that utilize the forecast data, agents� individual skill profiles, work schedules, and their preferences regarding working hours.</p>
                                <p>2.Calendars for planned events.</p>
                                <p>3.Automated creation of shifts, shift management.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <h5>Customer relationship management systems (CRM)
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1.Customer database.</p>
                                <p>2.Integration with ACD system.</p>
                                <p>3.Customer satisfaction surveys.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 text-center mt-5">
                @include('industries.industriesKnowMore.common_sidemenu')
            </div>
        </div>
    </div>
</section>





@include('common.banner')
@include('common.contactus')
@include('common.footer')
@endsection