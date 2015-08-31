<div class="col-md-2 sidegrid">
<div class="panel-group">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
           {{-- <div class="panel-heading">
                <h4 class="panel-title sidemenutitle">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Administration</a>
                </h4>
            </div>--}}

           {{-- <div id="collapseOne" class="panel-collapse collapse in">--}}
                <div class="panel-left-menu">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="{{route('birth_details.index')}}"
                                   class="btnsidebar btn-primary custom-border-color">Birth Registration</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{route('child_vaccines.index')}}"
                                   class="btnsidebar btn-primary custom-border-color">Vaccination</a>
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <a href="{{route('vaccines.index')}}"
                                   class="btnsidebar btn-primary custom-border-color">Vaccine</a>
                                </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"
                                   class="btnsidebar btn-primary custom-border-color">Education</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"
                                   class="btnsidebar btn-primary custom-border-color">Health</a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"
                                   class="btnsidebar btn-primary custom-border-color">Parents</a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"
                                   class="btnsidebar btn-primary custom-border-color">Migration</a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"
                                   class="btnsidebar btn-primary custom-border-color">User Management</a>

                            </td>
                        </tr>
                         <tr>
                             <td>
                                 <a href="{!! route('roles.index') !!}"
                                    class="btnsidebar btn-primary custom-border-color">Roles</a>

                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <a href="{!! route('role_permission.create') !!}"
                                    class="btnsidebar btn-primary custom-border-color">Assign Permissions</a>

                             </td>
                         </tr>
                    </table>
                </div>
          {{--  </div>--}}
        </div>

    </div>
</div><!-- end sidemenu-->
</div><!-- end sidegrid-->