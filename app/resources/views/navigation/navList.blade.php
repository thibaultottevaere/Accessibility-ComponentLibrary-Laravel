
@if ($element === "a") 
    <li aria-roledescription="listitem" class={{$listStyle}} name={{$name}}>
        <a aria-roledescription="link" class={{$linkStyle}} href={{$link}} target={{$target}}>{{$text}}</a>    
    </li>
@elseif ($element === "button") 
    <li aria-roledescription="listitem" class={{$listStyle}} name={{$name}}>
        <button aria-roledescription="button" class={{$buttonStyle}} id={{$id}} name={{$name}} onClick={{$onClick}}>{{$text}}</button>
    </li>
@endif
