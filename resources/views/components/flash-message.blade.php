@if(flash()->message)
    <div class="alert alert-{{flash()->class}}" role="alert">
        @if(flash()->class == 'warning' || flash()->class == 'danger')
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
        @endif

        @if(flash()->class == 'info')
            <i class="bi bi-exclamation-circle-fill me-2"></i>
        @endif

        @if(!flash()->class || flash()->class == 'success')
            <i class="bi bi-check-circle-fill me-2"></i> {{flash()->message}}
        @endif


    </div>
@endif