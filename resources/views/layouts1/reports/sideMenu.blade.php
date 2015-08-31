
<div class="sidebar ncdb-content-box "  id="sidebar" style="display: block;overflow: hidden;" tabindex="5000">
    <ul class="nav">
        <!-- Main menu -->

        @foreach($menus as $menu)
            @if($menu->parent_id == 0 && $menu->type == 'reports')
                <li><a href="{!! $menu->url !!}" class="btnsidebar btn-primary custom-border-color">{!!$menu->display_name!!}</a></li>
            @endif
        @endforeach

    </ul>
</div>