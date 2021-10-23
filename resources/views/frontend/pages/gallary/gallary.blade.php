@extends('frontend.layouts.app')

@section('title', 'Gallery')
    
@include('frontend.include.header')

@section('content')
@include('frontend.pages.gallary.section.banner')
@include('frontend.pages.gallary.section.gallary-part')

<!------------ JS HERE ------------>
<script src="{{ asset('') }}asset/frontend/js/mixitup.min.js"></script>
<script>
    // TAB 
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

    // MIXITUP 
    var containerEl = document.querySelector('.mix-filter');
    var mixer = mixitup(containerEl);


    // TAB 2
    function Tabs() {
        var bindAll = function() {
            var menuElements = document.querySelectorAll('[data-tab]');
            for (var i = 0; i < menuElements.length; i++) {
                menuElements[i].addEventListener('click', change, false);
            }
        }

        var clear = function() {
            var menuElements = document.querySelectorAll('[data-tab]');
            for (var i = 0; i < menuElements.length; i++) {
                menuElements[i].classList.remove('active');
                var id = menuElements[i].getAttribute('data-tab');
                document.getElementById(id).classList.remove('active');
            }
        }

        var change = function(e) {
            clear();
            e.target.classList.add('active');
            var id = e.currentTarget.getAttribute('data-tab');
            document.getElementById(id).classList.add('active');
        }

        bindAll();
    }

    var connectTabs = new Tabs();

</script>

@endsection