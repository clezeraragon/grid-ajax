@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Users List
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Users</h1>
    <ol class="breadcrumb">
        <li>
            <a href="index"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Users</li>
        <li class="active">Users</li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading">
                <h4 class="panel-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Users List
                </h4>
            </div>
            <br />
            <div class="panel-body">
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
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" title="Delete Record"></span>
                                <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                            </td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Markotto</td>
                            <td>Markotto@test.com</td>
                            <td>
                                <span class="apprstatus">Approved</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                            </td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>JacobThornton</td>
                            <td>JacobThornton@test.com</td>
                            <td>
                                <span class="apprstatus">Approved</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:#48BDEA" title="Medium"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="pndngstatus">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:#ca0002" title="Poor"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="apprstatus">Approved</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:#ca0002" title="Poor"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="delstatus">Deleted</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="pndngstatus">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:#48BDEA" title="Medium"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="delstatus">Deleted</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="details-control"></span>
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                            </td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Markotto</td>
                            <td>Markotto@test.com</td>
                            <td>
                                <span class="apprstatus">Approved</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                            </td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>JacobThornton</td>
                            <td>JacobThornton@test.com</td>
                            <td>
                                <span class="apprstatus">Approved</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:#48BDEA" title="Medium"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="pndngstatus">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:#ca0002" title="Poor"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="apprstatus">Approved</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:#ca0002" title="Poor"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="delstatus">Deleted</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="pndngstatus">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:#48BDEA" title="Medium"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="delstatus">Deleted</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="details-control"></span>
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                            </td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Markotto</td>
                            <td>Markotto@test.com</td>
                            <td>
                                <span class="apprstatus">Approved</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                            </td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>JacobThornton</td>
                            <td>JacobThornton@test.com</td>
                            <td>
                                <span class="apprstatus">Approved</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:#48BDEA" title="Medium"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="pndngstatus">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:#ca0002" title="Poor"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="apprstatus">Approved</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:#ca0002" title="Poor"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="delstatus">Deleted</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:green" title="High"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="pndngstatus">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis" />
                                <span class="glyphicon glyphicon-pencil" style="color:#ED9C28; cursor: pointer; cursor: hand;" title="Edit Record"></span>
                                <span class="glyphicon glyphicon-remove" style="color:#F5697C; cursor: pointer; cursor: hand;"></span>
                                <span class="glyphicon glyphicon-star" style="color:#48BDEA" title="Medium"></span>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Larrythe Bird</td>
                            <td>LarrytheBird@test.com</td>
                            <td>
                                <span class="delstatus">Deleted</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            <span class="glyphicon glyphicon-warning-sign"></span>
                            Are you sure you want to delete this Record?
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-warning">
                            <span class="glyphicon glyphicon-ok-sign"></span>
                            Yes
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span>
                            No
                        </button>
                    </div>
                </div>
                <!-- /.modal-content --> </div>
        </div>
        <!-- /.modal-dialog --> </div>
    <!-- row-->
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
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