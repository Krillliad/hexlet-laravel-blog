{{ Form::model($information, ['url' => route('information.update', $information), 'method' => 'PATCH']) }}
    @include('information.form')
    {{ Form::submit('Обновить') }}
{{ Form::close() }}
