@extends('layouts.master')

@section('content')
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Dentist</h1>
                <a href="#" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="#" class="h4 text-white">Dentist</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($doctors as $item)
                <div class="col-lg-4 col-md-6 mb-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img src="{{ asset($item->image) }}" class="img-fluid rounded-top w-100"
                                alt="{{ $item->name }}">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">{{ $item->name }}</h4>
                            <p class="text-primary mb-0">{{ $item->description }}</p>
                            <p class="text-primary mb-0"> {{ $item->phone }} </p>
                        </div>
                        <a href="/RemoveDoctor/{{ $item->id }}" class="btn btn-danger mt-2">
                            <i class="fas fa-shopping-cart"></i> حذف الطبيب
                        </a>
                        <a href="/EditDoctor/{{ $item->id }}" class="btn btn-primary mt-2">
                            <i class="fas fa-edit"></i> تعديل بيانات الطبيب</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
