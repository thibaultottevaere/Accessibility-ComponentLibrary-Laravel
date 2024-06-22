
<nav aria-role="navigation" aria-labelledby={{$label}} class={{$navStyle}}>
    <ul aria-role="list" aria-label={{$label}} class={{$listStyle}} tabIndex={0}>
        @if ($element === "a")  
            @foreach (options as $option)
                <li aria-role="listitem" class={{$itemStyle}} aria-label={{$option['label']}}>
                    <a aria-role="link" class={{$linkStyle}} href={{$option['link']}}>{{$option['text']}}</a>    
                </li> 
            @endforeach
        @elseif ($element === "li") 
            @foreach ($options as $option)
                <li aria-role="listitem" class={{$itemStyle}} aria-label={{$option['label']}}>
                    <p class={{$textStyle}}>{{option['text']}}</p>
                </li>
        @endif
    </ul>
</nav>