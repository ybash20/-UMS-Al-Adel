@extends('dashboard.admin_template')

@section('content')

    <div style="width:750px;margin:0 auto ">
        @if(UMS::getCurrentMethod() != 'getProfile')
            <p>
                <a href='{{UMS::mainpath()}}'>
                    {{ lang("form_back_to_list",['module'=>UMS::getCurrentModule()->name]) }}
                </a>
            </p>
        @endif

    <!-- Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">{{ lang($page_title) }}</h3>
                <div class="box-tools"></div>
            </div>
            <form method='post' action='{{ (@$row->id)?route("PrivilegesControllerPostEditSave")."/$row->id":route("PrivilegesControllerPostAddSave") }}'>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                    <div class="alert alert-info">
                        <strong>
                            {{ lang('privilege_helper') }}
                        </strong>
                    </div>
                    <div class='form-group'>
                        <label>
                            {{lang('privileges_name')}}
                        </label>
                        <input type='text' class='form-control' name='name' required value='{{ @$row->name }}'/>
                        <div class="text-danger">
                            {{ $errors->first('name') }}
                        </div>
                    </div>

                    <div class='form-group'>
                        <label>
                            {{lang('set_as_manager')}}
                        </label>
                        <div id='set_as_manager' class='radio'>
                            <label>
                                <input required {{ (@$row->is_manager==1)?'checked':'' }} type='radio' name='is_manager' value='1'/>
                                {{lang('confirmation_yes')}}
                            </label>
                            &nbsp;&nbsp;
                            <label>
                                <input {{ (@$row->is_manager==0)?'checked':'' }} type='radio' name='is_manager' value='0'/>
                                {{lang('confirmation_no')}}
                            </label>
                        </div>
                        <div class="text-danger">
                            {{ $errors->first('is_manager') }}
                        </div>
                    </div>

                        @push('bottom')
                            <script type="text/javascript">
                                $(function () {

                                    $('#set_as_manager input').click(function () {
                                        var n = $(this).val();
                                        if (n == '1') {
                                            $('#privileges_configuration').hide();
                                        } else {
                                            $('#privileges_configuration').show();
                                        }
                                    })

                                    $('#set_as_manager input:checked').trigger('click');
                                })
                            </script>
                        @endpush
                    <div id='privileges_configuration' class='form-group'>
                        <label>
                            {{ lang('privileges_configuration') }}
                        </label>
                        @push('bottom')
                            <script>
                                $(function () {
                                    $("#is_visible").click(function () {
                                        var is_ch = $(this).prop('checked');
                                        console.log('is checked create ' + is_ch);
                                        $(".is_visible").prop("checked", is_ch);
                                        console.log('Create all');
                                    })
                                    $("#is_create").click(function () {
                                        var is_ch = $(this).prop('checked');
                                        console.log('is checked create ' + is_ch);
                                        $(".is_create").prop("checked", is_ch);
                                        console.log('Create all');
                                    })
                                    $("#is_read").click(function () {
                                        var is_ch = $(this).is(':checked');
                                        $(".is_read").prop("checked", is_ch);
                                    })
                                    $("#is_edit").click(function () {
                                        var is_ch = $(this).is(':checked');
                                        $(".is_edit").prop("checked", is_ch);
                                    })
                                    $("#is_delete").click(function () {
                                        var is_ch = $(this).is(':checked');
                                        $(".is_delete").prop("checked", is_ch);
                                    })
                                    $(".select_horizontal").click(function () {
                                        var p = $(this).parents('tr');
                                        var is_ch = $(this).is(':checked');
                                        p.find("input[type=checkbox]").prop("checked", is_ch);
                                    })
                                })
                            </script>
                        @endpush
                        <table class='table table-striped table-hover table-bordered'>
                            <thead>
                            <tr class='active'>
                                <th width='3%'>
                                    {{lang('privileges_module_list_no')}}
                                </th>
                                <th width='60%'>
                                    {{lang('privileges_module_list_mod_names')}}
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                                <th>
                                    {{lang('privileges_module_list_view')}}
                                </th>
                                <th>
                                    {{lang('privileges_module_list_create')}}
                                </th>
                                <th>
                                    {{lang('privileges_module_list_read')}}
                                </th>
                                <th>
                                    {{lang('privileges_module_list_update')}}
                                </th>
                                <th>
                                    {{lang('privileges_module_list_delete')}}
                                </th>
                            </tr>
                            <tr class='info'>
                                <th>
                                    &nbsp;
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                                <td align="center">
                                    <input title='Check all vertical' type='checkbox' id='is_visible'/>
                                </td>
                                <td align="center">
                                    <input title='Check all vertical' type='checkbox' id='is_create'/>
                                </td>
                                <td align="center">
                                    <input title='Check all vertical' type='checkbox' id='is_read'/>
                                </td>
                                <td align="center">
                                    <input title='Check all vertical' type='checkbox' id='is_edit'/>
                                </td>
                                <td align="center">
                                    <input title='Check all vertical' type='checkbox' id='is_delete'/>
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1;?>
                            @foreach($moduls as $modul)
                                <?php $roles = DB::table('ums_privileges_roles')->where('id_ums_moduls', $modul->id)->where('id_ums_privileges', $row->id)->first(); ?>
                                <tr>
                                    <td><?php echo $no++;?></td>
                                    <td>{{$modul->name}}</td>
                                    <td class='info' align="center">
                                        <input type='checkbox' title='Check All Horizontal' <?=($roles->is_create && $roles->is_read && $roles->is_edit && $roles->is_delete) ? "checked" : ""?> class='select_horizontal'/>
                                    </td>
                                    <td class='active' align="center">
                                        <input type='checkbox' class='is_visible' name='privileges[<?=$modul->id?>][is_visible]' <?=@$roles->is_visible ? "checked" : ""?> value='1'/>
                                    </td>
                                    <td class='warning' align="center">
                                        <input type='checkbox' class='is_create' name='privileges[<?=$modul->id?>][is_create]' <?=@$roles->is_create ? "checked" : ""?> value='1'/>
                                    </td>
                                    <td class='info' align="center">
                                        <input type='checkbox' class='is_read' name='privileges[<?=$modul->id?>][is_read]' <?=@$roles->is_read ? "checked" : ""?> value='1'/>
                                    </td>
                                    <td class='success' align="center">
                                        <input type='checkbox' class='is_edit' name='privileges[<?=$modul->id?>][is_edit]' <?=@$roles->is_edit ? "checked" : ""?> value='1'/>
                                    </td>
                                    <td class='danger' align="center">
                                        <input type='checkbox' class='is_delete' name='privileges[<?=$modul->id?>][is_delete]' <?=@$roles->is_delete ? "checked" : ""?> value='1'/>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer" align="right">
                    <button type='button' onclick="location.href='{{UMS::mainpath()}}'" class='btn btn-default'>{{lang("button_cancel")}}</button>
                    <button type='submit' class='btn btn-primary'><i class='fa fa-save'></i> {{lang("button_save")}}</button>
                </div><!-- /.box-footer-->
        </div><!-- /.box -->

    </div><!-- /.row -->
@endsection
