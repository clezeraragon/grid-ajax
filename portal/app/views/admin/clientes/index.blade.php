
{{-- Page title --}}
@section('title')
    {{$data['title']}}
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link href="/assets/css/pages/tables.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/assets/vendors/datatables/css/select2.css" />
    <link rel="stylesheet" type="text/css" href="/assets/vendors/datatables/css/dataTables.bootstrap.css" />
    <!--{{ HTML::style('assets/css/jquery.dataTables.css') }}-->
    <!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')

    <!--section ends-->
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <a href="{{ URL::to($data['route'] . '/create') }}" class="btn btn-success navbar-left btn_novo"><span class="glyphicon glyphicon-plus-sign"></span> Novo</a>
                <br><br>
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box primary">
                    <div class="portlet-title" >
                        <div class="caption">
                            {{$data['titles']}}
                        </div>
                        <div class="tools"></div>
                    </div>
                    <div class="portlet-body">



                        <!--                    <table class="table table-striped table-bordered table-hover" id="sample_1">-->

                        <!--                        <thead>-->
                        <!--                        <tr>-->
                        <!--                            <th>Perfil</th>-->
                        <!--                            <th>Descrição</th>-->
                        <!--                            <th>Acesso Admin</th>-->
                        <!--                            <th>Criado</th>-->
                        <!--                            <th>Modificado</th>-->
                        <!--                            <th>Editar</th>-->
                        <!--                            <th>Excluir</th>-->
                        <!--                        </tr>-->
                        <!--                        </thead>-->
                        <!--                        <tbody>-->
                        <!--                        @foreach ($clientes as $cliente)-->
                        <!---->
                        <!--                        <tr>-->
                        <!--                            <td>{{ ($cliente->nm_responsavel) }}</td>-->
                        <!--                            <td>{{ ($cliente->nm_cnpj) }}</td>-->
                        <!--                            <td>{{ Util::formatBoolean($cliente->st_admin) }}</td>-->
                        <!--                            <td>{{ Util::toTimestamps($cliente->created_at) }}</td>-->
                        <!--                            <td>{{ Util::toTimestamps($cliente->updated_at) }}</td>-->
                        <!--                            <td>-->
                        <!--                                {{ link_to($data['route'] . '/' . $cliente->id . '/edit', 'Editar', array('class' => 'btn btn-warning btn-sm', 'title' => 'Editar')) }}-->
                        <!--                            </td>-->
                        <!--                            <td>-->
                        <!--                                {{ Form::open(array('url' => $data['route'] . '/' . $cliente->id, 'method' => 'delete')) }}-->
                        <!--                                {{ Form::button('Excluir', array('type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'title' => 'Excluir')) }}-->
                        <!--                                {{ Form::close() }}-->
                        <!--                            </td>-->
                        <!--                        </tr>-->
                        <!--                        @endforeach-->
<!--                        </tbody>-->
                        <!--                    </table>-->
                        <!--@foreach($clientes as $cliente)-->
                        <!--                    {{$cliente}}-->
                        <!--                    @endforeach -->

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-condensed table-bordered" id="articles">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                                {{--<th>Updated At</th>--}}
                                {{--<th colspan=”2”>Operations</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                {{--<td></td>--}}
                                {{--<td></td>--}}
                                {{--<td></td>--}}
                                {{--<td></td>--}}
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    {{ HTML::script('assets/js/vendors/jquery.dataTables.js') }}
    <!-- begining of page level js -->
    <script type="text/javascript" src="/assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/assets/vendors/datatables/extensions/TableTools/js/dataTables.tableTools.js"></script>
    <script type="text/javascript" src="/assets/vendors/datatables/dataTables.bootstrap.js"></script>
    <script src="/assets/vendors/datatables/table-advanced.js"></script>

    <script type="text/javascript">


        var table = $('#articles');

        /* Table tools samples: https://www.datatables.net/release-datatables/extras/TableTools/ */

        /* Set tabletools buttons and button container */

        $.extend(true, $.fn.DataTable.TableTools.classes, {
            "container": "btn-group tabletools-dropdown-on-portlet",
            "buttons": {
                "normal": "btn btn-sm default",
                "disabled": "btn btn-sm default disabled"
            },
            "collection": {
                "container": "DTTT_dropdown dropdown-menu tabletools-dropdown-menu"
            }
        });

        var oTable = table.dataTable({

            "processing": true,
            "serverSide": true,
            "ajax": "/admin/admin/articlesajax",
            "order": [
                [0, 'asc']
            ],
            "oLanguage": {
                "sProcessing": '<div><i class="livicon" data-name="spinner-four" data-size="50" data-c="#418BCA" data-hc="#ff0000" data-loop="true"></i></div><div>Processando...</div>',
                "sInfo": "Teve um total de _TOTAL_ registros para mostrar (_START_ até _END_)",
                "sInfoEmpty": "Não há registros para mostrar",
                "sInfoFiltered": "",
                "sSearch": "Pesquisar: _INPUT_ ",
                "sLengthMenu": "Páginar por _MENU_  Registros"
//                "sLengthMenu": "_MENU_ rekordów",
//                "oPaginate": {
//                    "sPrevious": "Poprzednia",
//                    "sNext": "Następna"
//                }
            },

            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 10,

            "dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

            "tableTools": {
                "sSwfPath": "/assets/vendors/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                "columnDefs": [ { //this prevents errors if the data is null
                    "targets": "_all",
                    "defaultContent": ""
                } ],
                "aButtons": [{
                    "sExtends": "pdf",
                    "sButtonText": "PDF",
                    "sFileName": "iSonhei-Cliente.pdf",
                    "sPdfMessage": "Your custom message would go here.",
                    "mColumns": [0, 1]
                }, {
                    "sExtends": "csv",
                    "sButtonText": "CSV",
                    "sFileName": "iSonhei-Cliente.csv"
                }, {
                    "sExtends": "xls",
                    "sButtonText": "Excel",
                    "sFileName": "iSonhei-Cliente.xls"
                }, {
                    "sExtends": "print",
                    "sButtonText": "Print",
                    "sInfo": 'Please press "CTR+P" to print or "ESC" to quit',
                    "sMessage": "Generated by DataTables"
                }]
            },

            "columns": [
                //title will auto-generate th columns
                { "data" : "id",              "title" : "Id", "orderable": true, "searchable": false },
                { "data" : "nm_razao_social", "title" : "Name", "orderable": true, "searchable": true },
                { "data": "editar",           "title" : "editar", "orderable": false, "searchable": false },
                { "data": "delete",           "title" : "deletar", "orderable": false, "searchable": false }
//            { "data" : "email",            "title" : "Email", "orderable": true, "searchable": true },
//            { "data" : "created_date",     "title" : "Created", "orderable": true, "searchable": true },
            ]
        });

    </script>

@stop