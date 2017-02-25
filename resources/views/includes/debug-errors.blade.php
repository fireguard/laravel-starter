@if(env('APP_DEBUG', false))
    <br />
    <div>
        {{ var_dump($exception) }}
    </div>

@endif
