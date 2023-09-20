@twillBlockTitle('Text')
@twillBlockIcon('text')
@twillBlockGroup('app')
 
<x-twill::input
    name="title"
    label="Title"
    :translated="true"
/>
 
<x-twill::wysiwyg
    name="text"
    label="Text"
    placeholder="Text"
    :toolbar-options="[
        'bold',
        'italic',
        ['list' => 'bullet'],
        ['list' => 'ordered'],
        [ 'script' => 'super' ],
        [ 'script' => 'sub' ],
        'link',
        'clean'
    ]"
    :translated="true"
/>


<div class="prose">
    <h2>{{$block->translatedInput('title')}}</h2>
    {!! $block->translatedInput('text') !!}
</div>

<div class="py-8 mx-auto max-w-2xl flex items-center">
    <img src="{{$block->image('highlight', 'desktop')}}"/>
</div>