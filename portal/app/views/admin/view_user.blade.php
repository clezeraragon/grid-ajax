@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
View User Details
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
<link href="{{ asset('assets/vendors/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/pages/calendar_custom.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/vendors/datatables/media/css/jquery.dataTables.css') }}" rel="stylesheet" />
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css') }}">
<!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>View User</h1>
    <ol class="breadcrumb">
        <li>
            <a href="index"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Users</li>
        <li class="active">View User</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        {{ Sentry::getUser()->first_name }} {{ Sentry::getUser()->last_name }}
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-md-6" style="border:1x solid green">
                                <div>
                                    <div class="row">
                                        <div class="col-sm-12" style="font-size:11px;color:#A3A5AE; padding:5px 0px 0px 20px;">
                                            <img alt="" src="{{ asset('assets/img/rec.jpg') }}" />
                                            <br />
                                            <a href="#" style="font-size:11px;color:#A3A5AE; padding-top:5px;">Edit Image</a>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4>Contact Details</h4>
                                        </div>
                                        <div class="col-sm-4" style="color:#A3A5AE;">Address</div>
                                        <div class="col-sm-8">
                                            12HTC, James street, California,
                                            <br/>
                                            AK, USA 21456.
                                        </div>
                                        <div class="col-sm-4" style="color:#A3A5AE;">Phone</div>
                                        <div class="col-sm-8">+1-816-598-698</div>
                                        <div class="col-sm-4" style="color:#A3A5AE;">Fax</div>
                                        <div class="col-sm-8">+1-944-199-477</div>
                                        <div class="col-sm-4" style="color:#A3A5AE;">mail-id</div>
                                        <div class="col-sm-8">contact@contact.com</div>
                                        <div class="col-sm-4" style="color:#A3A5AE;">Web Address</div>
                                        <div class="col-sm-8">http://contactme.com</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="border:1x solid green">
                                <div style="display:inline-block;">
                                    <div class="col-sm-6 col-xs-6" style="color:#A3A5AE;">User Name</div>
                                    <div class="col-sm-6 col-xs-6">John Crisp</div>
                                    <div class="col-sm-6 col-xs-6" style="color:#A3A5AE;">Group</div>
                                    <div class="col-sm-6 col-xs-6">Open Group</div>
                                    <div class="col-sm-6 col-xs-6" style="color:#A3A5AE;">Industry</div>
                                    <div class="col-sm-6 col-xs-6">IT</div>
                                    <div class="col-sm-6 col-xs-6" style="color:#A3A5AE;">Activated On</div>
                                    <div class="col-sm-6 col-xs-6">6th June 2014</div>
                                    <div class="col-xs-6" style="color:#A3A5AE;">Status</div>
                                    <div class="col-xs-6" style="">Active</div>
                                    <div class="col-xs-6" style="color:#A3A5AE; ">Category</div>
                                    <div class="col-xs-6">IT Resources</div>
                                    <div class="col-xs-6" style="color:#A3A5AE; ">Gender</div>
                                    <div class="col-xs-6" style="">Male</div>
                                    <div class="col-xs-6" style="color:#A3A5AE;">Age</div>
                                    <div class="col-xs-6">26</div>
                                    <div class="col-xs-6" style="color:#A3A5AE; ">Source</div>
                                    <div class="col-xs-6">Web</div>
                                    <div class="col-xs-6" style="color:#A3A5AE; ">Club</div>
                                    <div class="col-xs-6">Manchesters</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End User Primary Details Panel-->
        <!--User Activity -->
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="panel panel filterable">
                    <div class="panel-heading panel-yellow">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="dashboard" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                            User Activity
                        </h3>
                        <span class="pull-right">
                            <button class="btn btn-default btn-xs btn-filter">
                                <span class="glyphicon glyphicon-filter"></span>
                                Filter
                            </button>
                        </span>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="activitytable">
                            <thead>
                                <tr class="filters">
                                    <th>
                                        <input type="text" class="form-control" placeholder="Field Name" disabled></th>
                                    <th>
                                        <input type="text" class="form-control" placeholder="Before Value" disabled></th>
                                    <th>
                                        <input type="text" class="form-control" placeholder="After Value" disabled></th>
                                    <th>
                                        <input type="text" class="form-control" placeholder="Changed By" disabled></th>
                                    <th>
                                        <input type="text" class="form-control" placeholder="Changed On" disabled></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Larry</td>
                                    <td>31-05-2014</td>
                                </tr>
                                <tr>
                                    <td>Group</td>
                                    <td>Private</td>
                                    <td>Open</td>
                                    <td>Larry</td>
                                    <td>31-05-2014</td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Larry</td>
                                    <td>31-05-2014</td>
                                </tr>
                                <tr>
                                    <td>Group</td>
                                    <td>Private</td>
                                    <td>Open</td>
                                    <td>Larry</td>
                                    <td>31-05-2014</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>Pending</td>
                                    <td>Approved</td>
                                    <td>Admin</td>
                                    <td>31-05-2014</td>
                                </tr>
                                <tr>
                                    <td>Group</td>
                                    <td>Private</td>
                                    <td>Open</td>
                                    <td>Larry</td>
                                    <td>31-05-2014</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>Pending</td>
                                    <td>Approved</td>
                                    <td>Admin</td>
                                    <td>31-05-2014</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div>
                <!--User Activity Ends Here--> </div>
            <!--row ends--> </div>
        <!--description and calendar -->
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="panel panel-info filterable">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="briefcase" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            User Details
                            <small>Click to perform Quick Edit Action</small>
                        </h3>
                        <span class="pull-right">
                            <span class="clickable showhide">
                                <i class="glyphicon glyphicon-chevron-up" style="cursor: pointer; cursor: hand;"></i>
                            </span>
                        </span>
                    </div>
                    <div class="panel-body" id="slim1">
                        <div data-provide="markdown-editable">
                            <div class="table-responsive">
                                <p>
                                    In the First World War, life for soldiers in the trenches was miserable. They were often cold, muddy and rat infested. Compared to the First World War, today's modern-day troops are set up with sophisticated gear, designed to adapt to the field environment. July 28 marks 100 years since the start of the First World War. A lot has changed for soldiers since then. We take a look at what life was like as a soldier then and now.
                                </p>
                                <p>
                                    In the First World War, life for soldiers in the trenches was miserable. They were often cold, muddy and rat infested. Compared to the First World War, today's modern-day troops are set up with sophisticated gear, designed to adapt to the field environment. July 28 marks 100 years since the start of the First World War. A lot has changed for soldiers since then. We take a look at what life was like as a soldier then and now.
                                </p>
                                <p>
                                    In the First World War, life for soldiers in the trenches was miserable. They were often cold, muddy and rat infested. Compared to the First World War, today's modern-day troops are set up with sophisticated gear, designed to adapt to the field environment. July 28 marks 100 years since the start of the First World War. A lot has changed for soldiers since then. We take a look at what life was like as a soldier then and now.
                                </p>
                                <p>
                                    In the First World War, life for soldiers in the trenches was miserable. They were often cold, muddy and rat infested. Compared to the First World War, today's modern-day troops are set up with sophisticated gear, designed to adapt to the field environment. July 28 marks 100 years since the start of the First World War. A lot has changed for soldiers since then. We take a look at what life was like as a soldier then and now.
                                </p>
                                <p>
                                    In the First World War, life for soldiers in the trenches was miserable. They were often cold, muddy and rat infested. Compared to the First World War, today's modern-day troops are set up with sophisticated gear, designed to adapt to the field environment. July 28 marks 100 years since the start of the First World War. A lot has changed for soldiers since then. We take a look at what life was like as a soldier then and now.
                                </p>
                                <p>
                                    In the First World War, life for soldiers in the trenches was miserable. They were often cold, muddy and rat infested. Compared to the First World War, today's modern-day troops are set up with sophisticated gear, designed to adapt to the field environment. July 28 marks 100 years since the start of the First World War. A lot has changed for soldiers since then. We take a look at what life was like as a soldier then and now.
                                </p>
                                <p>
                                    In the First World War, life for soldiers in the trenches was miserable. They were often cold, muddy and rat infested. Compared to the First World War, today's modern-day troops are set up with sophisticated gear, designed to adapt to the field environment. July 28 marks 100 years since the start of the First World War. A lot has changed for soldiers since then.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="panel panel-danger filterable">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            User Calender
                        </h3>
                        <span class="pull-right">
                            <span class="clickable showhide">
                                <i class="glyphicon glyphicon-chevron-up" style="cursor: pointer; cursor: hand;"></i>
                            </span>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id='calendar'></div>
                        <div style='clear:both'></div>
                    </div>
                </div>
            </div>
        </div>
        <!--row-->
        <!--calender description ends here--> </div>
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/btable1.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<!-- for calendar-->
<script src="{{ asset('assets/vendors/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
<script>
$(document).ready(function() {
    var currentLangCode = 'en';
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        buttonText: {
            prev: "<span class='fa fa-caret-left'></span>",
            next: "<span class='fa fa-caret-right'></span>",
            today: 'today',
            month: 'M',
            week: 'W',
            day: 'D'
        },
        events: [{
                title: 'Team Out',
                start: new Date(y, m, 10),
                backgroundColor: ('#418bca')
            }, {
                title: 'Long Event',
                start: new Date(y, m, d - 5),
                end: new Date(y, m, d - 2),
                backgroundColor: "#f89a14",
                borderColor: "#f89a14"
            },

            {
                title: 'Team Out',
                start: new Date(y, m, 2),
                backgroundColor: ('#6cc66c')
            }, {
                title: 'Seminar',
                start: new Date(y, m, 12),
                backgroundColor: ('#67c5df')
            }, {
                title: 'Holiday',
                start: new Date(y, m, 22),
                backgroundColor: ('#ef6f6c')
            }, {
                title: 'Client Meeting',
                start: new Date(y, m, 28),
                end: new Date(y, m, 30),
                backgroundColor: "#a9b6b3",
                borderColor: "#a9b6b3"
            }
        ]
    });
});
</script>
<script src="{{ asset('assets/vendors/bootstrap-markdown/js/bootstrap-markdown.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-markdown/locale/bootstrap-markdown.fr.js') }}"></script>
@stop