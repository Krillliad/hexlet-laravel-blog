@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::model($information, ['url' => route('information.store')]) }}
    @include('information.form')
    {{ Form::submit('Создать') }}
{{ Form::close() }}
