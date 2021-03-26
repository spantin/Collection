<div class="previewItem boxShadowHoverable {{ $component->getComponentType()->name }}Item" data-component-id='{{ $component->id }}'>
    <div class="previewTypeLabel textShadow"></div>
    <div class="previewContentContainer">
        <div class="previewDescription">
            {{ $component->name }}
        </div>

        <div class="keywordContainer">
            @foreach ($component->getKeywords() as $keyword)
                <div class="keyword">{{ $keyword->word }}</div>
            @endforeach
        </div>
    </div>
</div>
