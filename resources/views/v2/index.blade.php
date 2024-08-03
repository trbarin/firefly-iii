@extends('layout.v2')
@section('content')

    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            @include('partials.dashboard.boxes')

            <!-- row with account, budget and category data -->
            <div class="row mb-2" x-data="accounts">
                <!-- column with 3 charts -->
                <div class="col-xl-8 col-lg-12 col-sm-12 col-xs-12">
                    <!-- row with account chart -->
                    @include('partials.dashboard.account-chart')
                    <!-- row with budget chart -->
                    @include('partials.dashboard.budget-chart')
                    <!-- row with category chart -->
                    @include('partials.dashboard.category-chart')
                </div>
                <div class="col-xl-4 col-lg-12 col-sm-12 col-xs-12">
                    <!-- row with accounts list -->
                    @include('partials.dashboard.account-list')
                </div>

            </div>
            <!-- row with sankey chart -->
            <div class="row mb-2">
                @include('partials.dashboard.sankey')
            </div>
            <!-- row with piggy banks, subscriptions and empty box -->
            <div class="row mb-2">
                <!-- column with subscriptions -->
                @include('partials.dashboard.subscriptions')
                <!-- column with piggy banks -->
                @include('partials.dashboard.piggy-banks')
                <!-- column with to do things -->
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><a href="#" title="Something">recurring? rules? tags?</a></h3>
                        </div>
                        <div class="card-body">
                            <p>
                                TODO
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- TODO this is a repeated piece of code -->
    <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="filterModalLabel">TODO Options dialog</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bla bla bla
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><em
                            class="fa-solid fa-right-from-bracket"></em> Cancel
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><em
                            class="fa-solid fa-magnifying-glass"></em> Search
                    </button>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('scripts')
    @vite(['src/pages/dashboard/dashboard.js'])
@endsection
