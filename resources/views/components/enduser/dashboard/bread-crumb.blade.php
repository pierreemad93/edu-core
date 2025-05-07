@props(['pageName'])

<section class="wsus__breadcrumb" style="background: url({{ asset('enduser/assets') }}/images/breadcrumb_bg.jpg);">
    <div class="wsus__breadcrumb_overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <div class="wsus__breadcrumb_text">
                        <h1>{{ $pageName }}</h1>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>{{ $pageName }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
