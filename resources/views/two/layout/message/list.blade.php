@extends('two.layout.backend1')
@section('content')

<div class="row">

<!--Grid column-->
<div class="col-md-9 mb-md-0 mb-5">
<form action="{{route('messagepass')}}" method='post'>
        @csrf

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <input type="text" id="name" name="name" class="form-control">
                    <label for="name" class="">student name</label>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <input type="text" id="email" name="email" class="form-control">
                    <label for="email" class="">student email</label>
                </div>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <div class="col-md-12">
                <div class="md-form mb-0">
                    <input type="text" id="subject" name="subject" class="form-control">
                    <label for="subject" class="">Subject</label>
                </div>
            </div>
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12">

                <div class="md-form">
                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                    <label for="message">Your message</label>
                </div>

            </div>
        </div>
        <!--Grid row-->
        <div>
        <button type="submit" class="btn btn-primary">send</button>
        </div>

    </form>



@endsection