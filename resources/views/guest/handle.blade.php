@extends('layouts.app')

@section('content')



  
	@include('layouts.navbar')

	@include('layouts.sidebar')

  @if((Auth::user()->accept)===1)
  @include('guestlayouts.guest_table_siti')
@endif

@if((Auth::user()->accept)===0)
<div>
  <h1>
  <a href  class="typewrite" data-period="200000" data-type='[ "UTENTE NON ANCORA VERIFICATO " ]' style="color: red">
    <span class="wrap"></span>
  </a>
  </h1>
  </div>
<div class="col-md-8 col-md-offset-3">
  <br>
  <a href=""  class="typewrite" data-period="200000" data-type='[ "attenda conferma email" ]'>
    <span class="wrap"></span>
  </a>
</div>
 
@endif


<script type="text/javascript">
//made by vipul mirajkar thevipulm.appspot.com
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
    </script>
@endsection