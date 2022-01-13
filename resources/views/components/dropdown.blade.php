@props(['trigger'])

<div x-data="{show: false }" @click.away="show = false">
        {{--trigger--}}    
        <div @click="show = ! show ">
            {{ $trigger }}
        </div>

  {{--links--}}  
    <div x-show="show" class="py-2  bg-gray-100 w-full mt-2 rounded-xl z-50">
      {{ $slot }}
    </div>
</div>