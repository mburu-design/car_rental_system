<div class="container text-center" style="padding-top: 100px">
    <div class="card">
        <div class="card-body">
            @if (session('ResultCode') !== null)
            {{-- Display the value of ResultCode --}}
            <p>ResultCode: {{ session('ResultCode') }}</p>
            @endif
            zero
        </div>
    </div>
</div>