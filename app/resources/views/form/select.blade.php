<div>
    <label
        for={{$name}}
        className={{$labelStyle}}
        aria-labelledby={{$name}}>
            {{$label}}
    </label>
    <select 
        className={{$style}} 
        aria-label={{$name}} 
        id={{$id}} 
        name={{$name}}
        title={{$title}}
        aria-roledescription={{$role}} 
        @if ($required === 'true')
            aria-required="true"
        @else
            aria-required="false"
        @endif
    >
        @if ($options) 
            @foreach ($options as $option)
                <option 
                    key={{$option['value']}}
                    value={{$option['value']}}
                    @if ($option['selected'])
                        selected
                    @endif
                >
                    {{$option['text']}}
                </option>
            @endforeach
        @endif
    </select>
</div>