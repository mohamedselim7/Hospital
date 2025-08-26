@extends('layouts.master')

@section('content')
    <!-- Hero Header -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Testimonial</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">أراء العملاء</a>
            </div>
        </div>
    </div>

    <!-- Form لإضافة رأي -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h3 class="text-center mb-4">أضف رأيك</h3>
                <form action="/YourOpinion" method="POST" class="bg-light p-4 rounded shadow">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">الاسم</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="اكتب اسمك" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">السن</label>
                        <input type="number" id="YourAge" name="YourAge" class="form-control" placeholder="اكتب سنك" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">رأيك</label>
                        <textarea name="YourOpinion" id="YourOpinion" class="form-control" rows="3" placeholder="اكتب رأيك هنا" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">إرسال</button>
                </form>
            </div>
        </div>
    </div>

    <!-- عرض الآراء -->
    <div class="container-fluid bg-primary bg-testimonial py-5 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                        @foreach ($reviews as $item)
                            <div class="testimonial-item text-center text-white">
                                <h4 class="text-white mb-0">{{ $item->name }}</h4>
                                @if(isset($item->age))
                                    <small>{{ $item->age }} سنة</small>
                                @endif
                                <p class="fs-5 mt-2">{{ $item->message ?? $item->YourOpinion }}</p>
                                <hr class="mx-auto w-25">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection