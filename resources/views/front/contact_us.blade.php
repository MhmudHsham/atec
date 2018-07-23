@extends("layouts.front")
@section('content')
<!-- ======================= Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Get In Touch</h2>
            <p><a href="#" title="Home">Home</a> <i class="ti-arrow-right"></i> Contact</p>
        </div>
    </div>
</div>
<!-- ======================= End Page Title ===================== -->
<!-- ================ Fill Forms ======================= -->
<section class="padd-top-20">
    <div class="container">
        @if ($errors->any())        
        <ul>
        @foreach($errors->all() as $one)
            <li>{{ $one }}</li>
        @endforeach
        </ul>
        @endif
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <div class="col-md-6 col-sm-6">
            <form action="{{ url('/send_message') }}" method="post">
            {{csrf_field()}}
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" />
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" />
                </div>
                <div class="form-group">
                    <label>Message:</label>
                    <textarea name="message" class="form-control height-120" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn theme-btn" type="submit" name="submit">Send Request</button>
                </div>
            </form>
        </div>
        <div class="col-md-6 col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.566512514854!2d76.8192921147794!3d30.702470481647698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fecca1d6c0001%3A0xe4953728a502a8e2!2sChandigarh!5e0!3m2!1sen!2sin!4v1520136168627" width="100%" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>
<!-- ================ End Fill Forms ======================= -->
<!-- ================ Office Address ======================= -->
<section>
    <div class="container">
        <div class="col-md-10 col-md-offset-1 col-sm-12 translateY-60">
            <div class="col-md-6 col-sm-6">
                <div class="detail-wrapper text-center padd-top-40 mrg-bot-10 padd-bot-40 light-bg">
                    <i class="theme-cl font-30 ti-location-pin"></i>
                    <h4>Contact Info</h4>
                    {{ $settings->site_phone }}<br>
                    {{ $settings->site_email }}
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="detail-wrapper text-center padd-top-40 mrg-bot-10 padd-bot-40 light-bg">
                    <i class="theme-cl font-30 ti-location-pin"></i>
                    <h4>Address</h4>
                    {{ $settings->{$slug->address} }}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ End Office Address ======================= -->
@stop