
@if ($element === "a") 
    <li aria-role="listitem" class={{$itemStyle}} aria-label={{$option['label']}}>
        <a aria-role="link" class={{$linkStyle}} href={{$option['link']}} target={{$option['target']}}>{{$option['text']}}</a>    
    </li>
@elseif ($element === "p")
    <li aria-role="listitem" class={{$itemStyle}} aria-label={{$option['label']}}>
        <p class={{$textStyle}}>{{$option['text']}}</p>
    </li>
@endif
     