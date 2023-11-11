@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Jumbotron -->
                <img src="{{ asset('assets/img/ferrari-logo.png') }}" class="img-overlay" alt="Ferrari Logotipo">
                <div class="p-5 mb-4 bg-body-tertiary rounded-3 position-relative shadow-lg">
                    <div class="container-fluid py-5 d-flex justify-content-between align-items-center">
                        <div class="text-start">
                            <h1 class="display-5 fw-bold">Discover the excitement of driving a Ferrari!</h1>
                            <p class="col-md-8 fs-4">
                                Explore our exclusive collection of Ferrari cars. From classic models to the latest
                                innovations,
                                each Ferrari is a masterpiece of Italian engineering and design. Immerse yourself in the
                                luxury
                                and power of the brand that defines automotive excellence.
                            </p>
                            <button class="btn btn-lg d-flex justify-content-center align-items-center text-white"
                                id="red-bg" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="bi bi-chevron-right me-2" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                                See models
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
