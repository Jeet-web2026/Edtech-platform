@props(['type' => '', 'class' => '', 'name' => '', 'labelname' => '', 'mainclass' => ''])
<div class="flex flex-col gap-1.5 @if($mainclass) {{ $mainclass }} @endif">
    @if($labelname)
    <label @if($name) for="{{ $name }}" @endif>{{ $labelname }}</label>
    @endif
    <input
        @if($type) type="{{ $type }}" @endif
        @if($name) name="{{ $name }}" id="{{ $name }}" @endif
        class="border outline-none px-2 py-1 rounded @if($class) {{ $class }} @endif">
</div>