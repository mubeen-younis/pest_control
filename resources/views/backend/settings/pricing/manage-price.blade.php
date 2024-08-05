@extends('layouts.admin-main')
@section('main-container')
    </aside><!-- End Sidebar-->

    <main id="main" class="main">


        <div class="price-area bg-price py-5">
            <div class="container">

                <div class="row mb-4">
                    <div class="col text-center">
                        <h2 class="h1">Monthly Plan</h2>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4">

                        <div class="card-body text-center card">
                            <h5 class="card-title">Basic Plan</h5>
                            <h2 class="card-price"><sup>$</sup>{{ $monthlyBasic->price }}<sub>/month</sub></h2>
                            <ul class="list-unstyled">
                                @foreach ($monthlyBasicService as $service)
                                    <li>
                                        {{ $service->service }}
                                        <form action="{{ route('delete-monthly-basic', ['id' => $service->id]) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn link-danger">Remove</button>
                                        </form>
                                    </li>
                                @endforeach

                            </ul>
                            <a href="{{ route('monthly-basic') }}">
                                <button type="submit" class="btn btn-primary btn-block">Edit Plan</button>
                            </a>
                        </div>


                    </div>
                    <div class="col-md-4">


                        <div class="card-body text-center card">
                            <h5 class="card-title">Standard Plan</h5>
                            <h2 class="card-price"><sup>$</sup>{{ $monthlyStandard->price }}<sub>/month</sub></h2>
                            <ul class="list-unstyled">

                                @foreach ($monthlyStandardService as $service)
                                    <li>
                                        {{ $service->service }}
                                        <form action="{{ route('delete-monthly-standard', ['id' => $service->id]) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn link-danger">Remove</button>
                                        </form>
                                    </li>
                                @endforeach


                            </ul>
                            <a href="{{ route('monthly-standard') }}">
                                <button type="submit" class="btn btn-primary btn-block">Edit Plan</button>
                            </a>
                        </div>


                    </div>
                    <div class="col-md-4">


                        <div class="card-body text-center card">
                            <h5 class="card-title">Premium Plan</h5>
                            <h2 class="card-price"><sup>$</sup>{{ $monthlyPremium->price }}<sub>/month</sub></h2>
                            <ul class="list-unstyled">

                                @foreach ($monthlyPremiumService as $service)
                                    <li>
                                        {{ $service->service }}
                                        <form action="{{ route('delete-monthly-premium', ['id' => $service->id]) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn link-danger">Remove</button>
                                        </form>
                                    </li>
                                @endforeach

                            </ul>
                            <a href="{{ route('monthly-premium') }}">
                                <button type="submit" class="btn btn-primary btn-block">Edit Plan</button>
                            </a>
                        </div>


                    </div>
                </div>
            </div>

            {{--  Yearly Plan  --}}

            <div class="container">

                <div class="row mb-4">
                    <div class="col text-center">
                        <h2 class="h1">Yearly Plan</h2>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4">


                        <div class="card-body text-center card">
                            <h5 class="card-title">Basic Plan</h5>
                            <h2 class="card-price"><sup>$</sup>{{ $yearlyBasic->price }}<sub>/month</sub></h2>
                            <ul class="list-unstyled">

                                @foreach ($yearlyBasicService as $service)
                                    <li>
                                        {{ $service->service }}
                                        <form action="{{ route('delete-yearly-basic', ['id' => $service->id]) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn link-danger">Remove</button>
                                        </form>
                                    </li>
                                @endforeach

                            </ul>
                            <a href="{{ route('yearly-basic') }}">
                                <button type="submit" class="btn btn-primary btn-block">Edit Plan</button>
                            </a>
                        </div>


                    </div>
                    <div class="col-md-4">


                        <div class="card-body text-center card">
                            <h5 class="card-title">Standard Plan</h5>
                            <h2 class="card-price"><sup>$</sup>{{ $yearlyStandard->price }}<sub>/month</sub></h2>
                            <ul class="list-unstyled">

                                @foreach ($yearlyStandardService as $service)
                                    <li>
                                        {{ $service->service }}
                                        <form action="{{ route('delete-yearly-standard', ['id' => $service->id]) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn link-danger">Remove</button>
                                        </form>
                                    </li>
                                @endforeach

                            </ul>
                            <a href="{{ route('yearly-standard') }}">
                                <button type="submit" class="btn btn-primary btn-block">Edit Plan</button>
                            </a>
                        </div>


                    </div>
                    <div class="col-md-4">


                        <div class="card-body text-center card">
                            <h5 class="card-title">Premium Plan</h5>
                            <h2 class="card-price"><sup>$</sup>{{ $yearlyPremium->price }}<sub>/month</sub></h2>
                            <ul class="list-unstyled">

                                @foreach ($yearlyPremiumService as $service)
                                    <li>
                                        {{ $service->service }}
                                        <form action="{{ route('delete-yearly-premium', ['id' => $service->id]) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn link-danger">Remove</button>
                                        </form>
                                    </li>
                                @endforeach

                            </ul>
                            <a href="{{ route('yearly-premium') }}">
                                <button type="submit" class="btn btn-primary btn-block">Edit Plan</button>
                            </a>
                        </div>


                    </div>
                </div>
            </div>



        </div>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
@endsection()
