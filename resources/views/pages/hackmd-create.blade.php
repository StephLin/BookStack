@extends('simple-layout')

@section('body')
    <div class="container small">

        <div class="my-s">
            @include('partials.breadcrumbs', ['crumbs' => [
                ($parent->isA('chapter') ? $parent->book : null),
                $parent,
                $parent->getUrl('/create-hackmd-page') => [
                    'text' => trans('entities.pages_hackmd_new'),
                    'icon' => 'add',
                ]
            ]])
        </div>

        <main class="content-wrap card">
            <h1 class="list-heading">{{ trans('entities.books_empty_create_hackmd_page') }}</h1>
            <form action="{{ $parent->getUrl('/create-hackmd-page') }}" method="POST">
                @include('pages.hackmd-form')
            </form>
        </main>

    </div>
@stop
