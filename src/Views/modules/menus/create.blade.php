@extends('quarx::layouts.dashboard')

@section('content')
    <div class="row">
        <h1 class="page-header">Menus</h1>
    </div>

    @include('quarx::modules.menus.breadcrumbs', ['location' => ['create']])

    {!! Form::open(['route' => 'quarx.menus.store']) !!}

        {!! FormMaker::fromTable('menus', Config::get('quarx.forms.menu')) !!}

        <div class="form-group text-right">
            <a href="{!! URL::to('quarx/menus') !!}" class="btn btn-default raw-left">Cancel</a>
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
@endsection
