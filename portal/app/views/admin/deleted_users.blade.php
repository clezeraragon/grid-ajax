@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Deleted Users
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link href="{{ asset('assets/vendors/datatables/css/datatable.css') }}" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Deleted users</h1>
    <ol class="breadcrumb">
        <li>
            <a href="index"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Users</li>
        <li class="active">Deleted users</li>
    </ol>
</section>
<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title"> <i class="glyphicon glyphicon-list-alt"></i>
                    Deleted Users List
                </h4>
                <span class="pull-right valign">
                    <a href="adduser">
                        <button type="button" class="btn btn-responsive btn-success btn-xs ">
                            <i class="glyphicon glyphicon-plus"></i>
                            Add New
                        </button>
                    </a>
                </span>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered " id="table">
                        <thead>
                            <tr class="filters">
                                <th style="padding:5px;">
                                    <input type="checkbox" name="check" id="checkall" />
                                    Check/Uncheck
                                </th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>User Name</th>
                                <th>User E-mail</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="details-control"></span>
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                                </td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Markotto</td>
                                <td>Markotto@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                                </td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>JacobThornton</td>
                                <td>JacobThornton@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:#ca0002" title="Poor"></span>
                                </td>
                                <td>Larry</td>
                                <td>Bird</td>
                                <td>Larrythe Bird</td>
                                <td>LarrytheBird@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:#ca0002" title="Poor"></span>
                                </td>
                                <td>Steve</td>
                                <td>Nelson</td>
                                <td>Steve Nelson</td>
                                <td>stevenelson@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:#48BDEA" title="Medium"></span>
                                </td>
                                <td>John</td>
                                <td>Paul</td>
                                <td>John Paul</td>
                                <td>johnpaul@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="details-control"></span>
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                                </td>
                                <td>Peter</td>
                                <td>Norton</td>
                                <td>Norton</td>
                                <td>Norton@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                                </td>
                                <td>Duke</td>
                                <td>Ntini</td>
                                <td>Duke Ntini</td>
                                <td>ntini.duke@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:#ca0002" title="Poor"></span>
                                </td>
                                <td>Paul</td>
                                <td>Anderson</td>
                                <td>Paul Anderson</td>
                                <td>paulanderson@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:#ca0002" title="Poor"></span>
                                </td>
                                <td>Churchil</td>
                                <td>7</td>
                                <td>Churchil 7</td>
                                <td>chirchil7@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:#48BDEA" title="Medium"></span>
                                </td>
                                <td>James</td>
                                <td>Garry</td>
                                <td>James Garry</td>
                                <td>jamesgarry@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="details-control"></span>
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                                </td>
                                <td>Shane</td>
                                <td>Watson</td>
                                <td>Shane Watson</td>
                                <td>shanewatson@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                                </td>
                                <td>Jaqua</td>
                                <td>Kallis</td>
                                <td>Jaqua Kallis</td>
                                <td>Jaquakallis@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:#ca0002" title="Poor"></span>
                                </td>
                                <td>Gibbs</td>
                                <td>H</td>
                                <td>Gibbs H</td>
                                <td>hgibbs@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:#ca0002" title="Poor"></span>
                                </td>
                                <td>Morris</td>
                                <td>Page</td>
                                <td>Morris Page</td>
                                <td>morrispage@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="checkthis" />
                                    <span class="glyphicon glyphicon-pencil" title="Edit Record"></span>
                                    <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                    <span class="glyphicon glyphicon-star" style="color:#48BDEA" title="Medium"></span>
                                </td>
                                <td>Bill</td>
                                <td>Page</td>
                                <td>Bill Page</td>
                                <td>billpage@test.com</td>
                                <td>
                                    <span class="delstatus">Deleted</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section("footer_scripts")
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/dataTables.bootstrap.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#table #checkall").click(function() {
            if ($("#table #checkall").is(':checked')) {
                $("#table input[type=checkbox]").each(function() {
                    $(this).prop("checked", true);
                });
            } else {
                $("#table input[type=checkbox]").each(function() {
                    $(this).prop("checked", false);
                });
            }
        });
        var t = $('#table').DataTable({
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": 0
            }],
            "order": [
                [1, 'asc']
            ]
        });
        t.on('order.dt search.dt', function() {
            t.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, i) {});
        }).draw();

    });
    </script>
@stop