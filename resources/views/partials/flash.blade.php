@if (session('ok') || $errors->any())
<div class="flash-stack" role="status">
@if (session('ok'))<p class="alert alert-ok">{{ session('ok') }}</p>@endif
@foreach ($errors->all() as $e)<p class="alert alert-error">{{ $e }}</p>@endforeach
</div>
@endif
