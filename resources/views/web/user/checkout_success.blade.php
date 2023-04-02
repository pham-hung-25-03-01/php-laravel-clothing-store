@extends('web.layouts.default')

@section('title', 'Checkout Success')

@section('content')
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Checkout Success</h2>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Checkout Success</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="order_complet_area" class="ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-center order_complete">
                        <i class="fas fa-check-circle"></i>
                        <div class="order_complete_heading">
                            <h2>Your order is completed!</h2>
                        </div>
                        <p>Thank you for your order! Your order is being processed and will be completed within 3-6
                            hours. You will receive an email confirmation when your order is completed.</p>
                        <a href="{{route('products')}}" class="theme-btn-one bg-black btn_sm">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection