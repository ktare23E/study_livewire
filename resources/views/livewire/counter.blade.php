<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    Count: {{$count}}
    <div class="space-x-2">
        <button wire:click="increment(2)">+</button>
        <button wire:click="decrement">-</button>
        {{-- <button wire:click='triggerAlert' class="py-1 px-2 bg-blue-500 rounded-sm text-sm text-white">alert</button> --}}
        <button wire:click='swal' class="py-1 px-2 bg-blue-500 rounded-sm text-sm text-white">sweet alert</button>
    </div>
    
    {{-- <script>
        window.addEventListener('alert',event => {
            alert(event.detail.message);
        })
    </script> --}}

    <script>
        window.addEventListener('swal:alert',event => {
            Swal.fire({
                icon : event.detail[0].type,
                title : event.detail[0].message,
                text : event.detail[0].text,
            });
        
            
        })
    </script>
</div>
