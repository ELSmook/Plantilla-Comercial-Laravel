<div>
    {{-- Because she competes with no one, no one can compete with her. class="img-bg" --}}
   <div wire:poll.20s>
    @foreach($fotos as $foto)
        <div class="carousel-item @if($loop->first) active @endif">
            <img src="{{ Storage::url($foto->imagen) }}" width="500px" height="500px" alt="Foto ampliada">
        </div>
    @endforeach
</div>

    

</div>
