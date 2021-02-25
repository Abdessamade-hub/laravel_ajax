<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Student management system</title>
  </head>
  <body >


    @include("navbar")

    @include("popups")

    <div class="header text-center">
        <h1>Student Management System</h1>
    </div>



    <div class="container mt-4">
       
        <div class="row" >
           {{--  @if($layout == 'index')
                <div class="col-2"></div>
                    <section class="col-md-8">
                            @include("studentList")
                    </section>
                    <div class="col-2"></div>   
            @elseif($layout == 'create')
                    <section class="col-md-8">
                        @include("studentList")
                </section>
                <section class="col">
                    @include("create_student")
                </section>
            @elseif($layout == 'edit')
                    <section class="col-md-8">
                            @include("studentList")
                    </section>
                    <section class="col-md-4">
                        @include("edit_student")
                    </section>
            @elseif($layout == 'show')
                    <section class="col-md-8">
                            @include("studentList")
                    </section>
                    <section class="col-md-4">
                        
                    </section>
            @endif --}}


            <div id="nav">
                {{-- //Contents ajax --}}
                
                
            </div>
        </div>
    </div>
    


    
    <script>

function hideModal() {
        $("#cancel_modal").click();
}

            //Route to home
                function routeToHome()
                {
                        // event.preventDefault(); 
                        const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                                url:"/home",
                                type:"get",
                                data:{
                                        CSRF_TOKEN
                                },
                                success:function (data){
                                       $('#nav').html(data);
                                }
                        });
                }




                function save_student()
                {
                 event.preventDefault();
                $.ajax({
                        type:'post',
                        url:'/save_student',
                        data: $('#form_save_student').serialize(),
                        success:function(response){
                                hideModal();
                        },
                        error:function(error){
                                console.log(error)
                                alert('data not saved')
                        }
                });
                }




                //save student
                // function save_student()
                // {
                //         // event.preventDefault(); 
                //         const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                //         $.ajax({
                //                 url:"/save_student",
                //                 type:"post",
                //                 data:{
                //                         CSRF_TOKEN
                //                 },
                //                 success:function (data){
                //                        alert('jhg');
                //                 }
                //         });
                // }



                //Route to create student
                // function routeToCreateStudent()
                // {
                //         // event.preventDefault(); 
                //         const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                //         $.ajax({
                //                 url:"/create_student",
                //                 type:"get",
                //                 data:{
                //                         CSRF_TOKEN
                //                 },
                //                 success:function (data){
                //                         $('#nav').html(data);
                //                 }
                //         });
                // }

              
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



<script>

// $(document).ready(function(){
   
// })





</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html> 