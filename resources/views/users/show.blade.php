<style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #f6d365;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
    }
</style>
@extends('users.layout')

@section('content')
    <section class="vh-100" style="background-color: #5f59f7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                    alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                <h5>{{ $user->name }}</h5>
                                <p>@<span>{{ $user->username }}</span></p>
                                <i class="far fa-edit mb-5"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                    <h6>More details</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Description</h6>
                                            <p class="text-muted">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vh-100" style="background-color: #5f59f7;">
        <div class="container py-2 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                @foreach ($u as $r)
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <h3 class="mb-3">{{ $r->name }}</h3>
                            <p class="small mb-0">
                                {{ $r->description }}
                            </p>
                            <hr class="my-4">
                            <div class="d-flex justify-content-start align-items-center">
                                <p class="mb-0 text-uppercase"><i class="fas fa-cog me-2"></i> <span
                                        class="text-muted small"><a href="{{ $r->url }}">View more</a></span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
