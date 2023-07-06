@foreach ($bureaumembres as $bureaumembre)
    <div class="col-auto mb-2">
        <img src="{{ asset('storage/uploads') . "/". $bureaumembre->image }}"
            alt="{{ $bureaumembre->prenom }} {{ $bureaumembre->statut }} du club" class="illu-bureau">
        <p class="m-0">{{ $bureaumembre->prenom }}</p>
        <small class="fw-bold">{{ $bureaumembre->statut }}</small>
    </div>
@endforeach