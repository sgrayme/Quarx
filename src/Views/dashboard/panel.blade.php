<ul class="nav nav-sidebar">
    <li><a href="{!! url('quarx/dashboard') !!}"><span class="fa fa-dashboard"></span> Dashboard</a></li>
    @if (in_array('images', Config::get('quarx.modules', Quarx::defaultModules()))) <li><a href="{!! url('quarx/images') !!}"><span class="fa fa-image"></span> Images</a></li> @endif
    @if (in_array('files', Config::get('quarx.modules', Quarx::defaultModules()))) <li><a href="{!! url('quarx/files') !!}"><span class="fa fa-file"></span> Files</a></li> @endif
    @if (in_array('blog', Config::get('quarx.modules', Quarx::defaultModules()))) <li><a href="{!! url('quarx/blog') !!}"><span class="fa fa-pencil"></span> Blog</a></li> @endif
    @if (in_array('menus', Config::get('quarx.modules', Quarx::defaultModules()))) <li><a href="{!! url('quarx/menus') !!}"><span class="fa fa-link"></span> Menus</a></li> @endif
    @if (in_array('pages', Config::get('quarx.modules', Quarx::defaultModules()))) <li><a href="{!! url('quarx/pages') !!}"><span class="fa fa-file-text-o"></span> Pages</a></li> @endif
    @if (in_array('widgets', Config::get('quarx.modules', Quarx::defaultModules()))) <li><a href="{!! url('quarx/widgets') !!}"><span class="fa fa-gear"></span> Widgets</a></li> @endif
    @if (in_array('faqs', Config::get('quarx.modules', Quarx::defaultModules()))) <li><a href="{!! url('quarx/faqs') !!}"><span class="fa fa-question"></span> FAQs</a></li> @endif
    @if (in_array('events', Config::get('quarx.modules', Quarx::defaultModules()))) <li><a href="{!! url('quarx/events') !!}"><span class="fa fa-calendar"></span> Events</a></li> @endif
    {!! ModuleService::menus() !!}
    {!! Quarx::packageMenus() !!}
    <li><a href="{!! url('quarx/help') !!}"><span class="fa fa-info-circle"></span> Help</a></li>
    <li><a href="{!! url('dashboard') !!}"><span class="fa fa-arrow-left"></span> Site Dashboard</a></li>
</ul>