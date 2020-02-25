 @extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <style>
        a.custom-card,
        a.custom-card:hover {
            color: inherit;
        }
    </style>

    <h1 class="h3 mb-4 text-gray-800">{{ __('Request') }}</h1>

    <div class="row justify-content-center">
        <div class="col-lg-8 order-lg-1 card-group row justify-content-between">
            <a href="{{ route('rrf') }}" class="custom-card">
            <div class="card" style="width: 18rem; display: inline-block">
                <div class="card-body">
                    <h1>Repair Request Form</h1>
                </div>
                <div class="card-body">
                <h5 class="card-title" style="color: blue">General Services Unit</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            </a>

            <div class="custom-card">
            <div class="card" style="width: 18rem; display: inline-block">
                <div class="card-body">
                    <h1>Service Request Form</h1>
                </div>
                <div class="card-body">
                <div class="container mb-4">
                    <button onclick="location.href = '{{ route('srf-ict') }}';" type="button" class="btn btn-primary btn-block">ICT Unit</button>
                    <button onclick="location.href = '{{ route('srf-vhc') }}';" type="button" class="btn btn-primary btn-block">for Vehicles</button>
                </div>
                <p class="card-text">Fusce vestibulum risus sit amet sapien pulvinar efficitur dapibus vitae turpis. Cras mollis pellentesque ex, vel mollis leo pellentesque ut. Cras pharetra diam non erat tempor condimentum. Maecenas porttitor varius erat, eget molestie odio faucibus at. Sed malesuada lorem at lorem interdum finibus. Nam id ultrices mauris, a suscipit leo.</p>
                </div>
            </div>
        </div>

            <div href="#" class="custom-card">
            <div class="card" style="width: 18rem; display: inline-block">
                <div class="card-body">
                    <h1>Work Order Form for Equipment</h1>
                </div>
                <div class="card-body">
                <div class="container mb-4">
                    <button onclick="location.href = '{{ route('wfe-pm') }}';" type="button" class="btn btn-primary btn-block">Preventive Maintenance</button>
                    <button onclick="location.href = '{{ route('wfe-lab') }}';" type="button" class="btn btn-primary btn-block">Laboratory</button>
                </div>
                <p class="card-text">Aliquam dictum eros et scelerisque dictum. Aliquam nec consectetur dolor. Ut consequat tristique egestas. Sed pharetra mattis nisl, ut sollicitudin dui dignissim at. Praesent neque nulla, luctus ac risus quis, venenatis eleifend nulla. Etiam id nulla semper, pharetra lorem ut, lobortis augue. Duis pulvinar dolor turpis, ut sagittis turpis pulvinar pretium. Phasellus ac nulla a metus egestas efficitur. Ut ipsum metus, pharetra vel tellus sit amet, porttitor suscipit felis.</p>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection
