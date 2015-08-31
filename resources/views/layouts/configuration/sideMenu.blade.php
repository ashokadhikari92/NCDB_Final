<div class="px-margin-top"></div>
<div class="panel-group">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">

                <div class="panel-left-menu table-responsive">
                    <table class="table">
                    @foreach($menus as $menu)
                       @if($menu->parent_id == 0 && $menu->type == 'setting')
                       <tr>
                            <td>
                                <a href="{!! $menu->url !!}"
                                   class="btnsidebar btn-primary custom-border-color">{!!$menu->display_name!!}</a>
                            </td>
                        </tr>
                       @endif
                    @endforeach
                    </table>
                </div>

        </div>

    </div>
</div><!-- end sidemenu-->