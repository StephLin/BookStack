
{!! csrf_field() !!}

<div class="form-group title-input">
    <label for="name">{{ trans('entities.pages_title') }}</label>
    @include('form.text', ['name' => 'name'])
</div>

<div class="form-group title-input">
    <label for="name">{{ trans('entities.pages_hackmd_host') }}</label>
    @include('form.text', ['name' => 'hackmdHost', 'model' => (object) ['hackmdHost' => isset($model->hackmd_host) ? $model->hackmd_host : env('HACKMD_HOST', 'https://hackmd.io')]])
</div>

<div class="form-group title-input">
    <label for="name">{{ trans('entities.pages_hackmd_id') }}</label>
    @include('form.text', ['name' => 'hackmdId', 'model' => (object) ['hackmdId' => isset($model->hackmd_id) ? $model->hackmd_id : '']])
</div>

<div class="form-group text-right">
    <a href="{{ isset($chapter) ? $chapter->getUrl() : $parent->getUrl() }}" class="button outline">{{ trans('common.cancel') }}</a>
    <button type="submit" class="button">{{ trans('entities.pages_save') }}</button>
</div>
