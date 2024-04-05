<div class="col-xxl-4 col-md-6">
    <div {{ $attributes->merge(['class' => 'card info-card']) }}>
        <div class="card-body">
            <h5 class="card-title">{{ $cardtitle }}<span> | {{ $subcardtitle }}</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi {{ $icon }}"></i>
                </div>
                <div class="ps-3">
                    <h6>{{ $tabel }}</h6>
                    <span class="text-muted small pt-2 ps-1">{{ $subcardtitle }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
