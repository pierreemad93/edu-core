@props(['route', 'isActive', 'icon', 'pageName'])
<li>
    <a href="{{ $route }}" class="{{ $isActive ? 'active' : '' }} ">
        <div class="img">
            <img src="{{ $icon }}" alt="icon" class="img-fluid w-100">
        </div>
        {{ $pageName }}
    </a>
</li>
