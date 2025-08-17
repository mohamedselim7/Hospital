@extends('layouts.master')

@section('content')
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Appointment</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning Dental Clinic You Can
                            Trust</h1>
                        <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum.
                            Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero
                            eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit.
                            Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">احجز الأن</h1>
                        <form method="post" action="/sufferer">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select id="name_of_services" name="name_of_services"
                                        class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>اختار الخدمه التي تريدها</option>
                                        <option value="1">تبيض الأسنان</option>
                                        <option value="3">زراعة الاسنان</option>
                                        <option value="4">جسور الأسنان</option>
                                        <option value="5">طب الأسنان التجميلي</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select id="name_of_doctor" name="name_of_doctor" class="form-select bg-light border-0"
                                        style="height: 55px;">
                                        <option selected>اختار الدكتور</option>
                                        <option value="1">الشيماء</option>
                                        <option value="2">محمد</option>
                                        <option value="3">احمد</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" id="name" name="name"
                                        class="form-control bg-light border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" id="email" name="email"
                                        class="form-control bg-light border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="date" id="Appointment_date" name="Appointment_date"
                                        class="form-control bg-light border-0" placeholder="Appointment Date"
                                        style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="time" id="Appointment_time" name="Appointment_time"
                                        class="form-control bg-light border-0" placeholder="Appointment Time"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Make Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
@endsection
