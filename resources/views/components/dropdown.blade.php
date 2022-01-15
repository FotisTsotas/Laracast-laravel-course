@props(['trigger'])

<div x-data="{show: false }" @click.away="show = false">
        {{--trigger--}}    
        <div @click="show = ! show ">
            {{ $trigger }}
        </div>

  {{--links--}}  
    <div x-show="show" class="py-2 absolute  bg-gray-100 w-auto mt-2 rounded-xl z-50 overflow-auto max-h-52">
      {{ $slot }}
    </div>
</div>