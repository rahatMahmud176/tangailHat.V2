
    <!-- jquery-->
    <script src="{{ asset('front-end') }}/js/jquery-2.2.4.min.js "></script>
    <!-- Popper js -->
    <script src="{{ asset('front-end') }}/js/popper.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('front-end') }}/js/bootstrap.min.js "></script>
    <!-- Owl Cauosel JS -->
    <script src="{{ asset('front-end') }}/vendor/OwlCarousel/owl.carousel.min.js "></script>
    <!-- Meanmenu Js -->
    <script src="{{ asset('front-end') }}/js/jquery.meanmenu.min.js "></script>
    <!-- Srollup js -->
    <script src="{{ asset('front-end') }}/js/jquery.scrollUp.min.js "></script>
    <!-- jquery.counterup js -->
    <script src="{{ asset('front-end') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('front-end') }}/js/waypoints.min.js"></script>
    <!-- Select2 Js -->
    <script src="{{ asset('front-end') }}/js/select2.min.js"></script>
    <!-- Isotope js -->
    <script src="{{ asset('front-end') }}/js/isotope.pkgd.min.js "></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('front-end') }}/js/jquery.magnific-popup.min.js"></script>
    <!-- Validator js -->
    <script src="{{ asset('front-end') }}/js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="{{ asset('front-end') }}/js/main.js "></script>
    
    @include('sweetalert::alert') 


    <script>
        $(document).on('change','#district', function(){
            
            var id = $(this).val();
            // alert (id);
            $.ajax({
                type: "GET",
                url : "{{ url('take-upozilla-for-district') }}",
                data: {id:id},
                // dataType: "json",
                success: function(res){
                    //  console.log(res);
                    $('#upozillas').empty();
                    $('#upozillas').html(res);
                }

            });
        })
    </script>
    <script>
        $(document).on('change','#upozillas', function(){
            
            var id = $(this).val();
            // alert (id);
            $.ajax({
                type: "GET",
                url : "{{ url('take-union-for-upozilla') }}",
                data: {id:id},
                // dataType: "json",
                success: function(res){
                    //  console.log(res);
                    $('#union').empty();
                    $('#union').html(res);
                }

            });
        })
    </script>