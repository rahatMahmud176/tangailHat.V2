
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
    <script>
        $(document).on('keyup','.registerEmail', function(){
            var val = $(this).val();
            $.ajax({
                type: "GET",
                url : "{{ url('exist-email-check') }}",
                data: {email:val},
                dataType: "json",
                success: function(res){
                    if (res=='unavailable') {
                        $('.email_exist').empty();
                        $('.email_exist').append('Already taken this mail');
                         $("#register_submit_btn").prop('disabled', true);
                    }else{
                        $('.email_exist').empty();
                        document.getElementById("register_submit_btn").disabled = false;
                    }
                }

            });
        });
    </script>

    <script !src="">
        $(document).on('change','.ad-page-district', function(){

            var id = $(this).val();
            // alert (id);
            $.ajax({
                type: "GET",
                url : "{{ url('take-upozilla-for-district') }}",
                data: {id:id},
                // dataType: "json",
                success: function(res){
                    //  console.log(res);
                    $('.ad-page-upazilla').empty();
                    $('.ad-page-upazilla').html(res);
                }

            });
        })
    </script>


    <script>
        $(document).on('change','.ad-page-upazilla', function(){

            var id = $(this).val();
            // alert (id);
            $.ajax({
                type: "GET",
                url : "{{ url('take-union-for-upozilla') }}",
                data: {id:id},
                // dataType: "json",
                success: function(res){
                    //  console.log(res);
                    $('.ad-page-union').empty();
                    $('.ad-page-union').html(res);
                }
            });
        })
    </script> 

<script>
    $('.post-ad-btn').on('click',function(){
        event.preventDefault();
        $("#myModal").modal("toggle");
    })
</script>

<script>
    $('#category-name').on('change',function(){
        var cat = $(this).val();
         $.ajax({
            type: "GET",
            url: "{{ url('get-product-info-for-cat') }}",
            data: {cat:cat},
            success: function(res){
                $('.product-info').empty();
                $('.product-info').html(res); 
                $('.my-select2').select2();  
            }
         });
    })
</script>

    <script>
        $(document).on('click','.s', function () {
                 $('.demo').append('you have no coin');
        })
    </script>
