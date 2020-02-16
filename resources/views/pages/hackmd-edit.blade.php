@extends('simple-layout')

@section('body')

    <div class="container small">

        <div class="my-s">
            @include('partials.breadcrumbs', ['crumbs' => [
                $parent,
                $parent->getUrl('/edit-hackmd') => [
                    'text' => trans('entities.pages_editing_page'),
                    'icon' => 'edit',
                ]
            ]])
        </div>

        <main class="content-wrap card">
            <h1 class="list-heading">{{ trans('entities.pages_editing_page') }}</h1>
            <form action="{{ $parent->getUrl('/edit-hackmd') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                @include('pages.hackmd-form', ['model' => $parent, 'returnLocation' => $parent->getUrl()])
            </form>
        </main>
    </div>
@stop
