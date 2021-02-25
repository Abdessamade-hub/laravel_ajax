<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Student management system</title>
  </head>
  <body >
    <nav class="navbar navbar-light bg-light ">
      <a class="navbar-brand mb-0 h1" style="margin-left:10px" href="">AbdoDEV</a>
    </nav>
      <div class="container">
        @yield('content')
      </div>





      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <script>

function hideModal() {
   $("#cancel_modal").click();
}

  // modal add
    $(document).on('click','.create-modal', function(){
       
            $('#create').modal('show');
            
            $('.form-horizontal').show();
            
            $('.modal-title').text('Add Post');
            
      });
        // modal edit
        $(document).on('click','.edit-modal', function(){
          
            $('#footer_action_button').text(" Update Post");
            $('#footer_action_button').addClass("glyphicon-check");
            $('#footer_action_button').removeClass("glyphicon-trash");
            $('.actionBtn').addClass("btn-success");
            $('.actionBtn').removeClass("btn-danger");
            $('.actionBtn').addClass("edit");
            $('.modal-title').text("Post edit");
            $('.deletecontent').hide();
            $('.form-horizontal').show();
            $('#fid').val($(this).data('id'));
            $('#t').val($(this).data('title'));
            $('#b').val($(this).data('body'));
            $('#myModal').modal('show');
          
        });



       // modal show
        $(document).on('click','.show-modal', function(){
            $('.modal-title').html($(this).data('id'));
            $('#show-title').text("Title : "+$(this).data('title'));
            $('#show-body').text("Body : "+$(this).data('body'));
            $('#show').modal('show');
        });

         // modal delete
         $(document).on('click','.delete-modal', function(){
          
          $('#footer_action_button').text(" Delete Post");
          $('#footer_action_button').addClass("glyphicon-remove");
          $('#footer_action_button').removeClass("glyphicon-check");
          $('.actionBtn').addClass("btn-danger");
          $('.actionBtn').removeClass("btn-success");
          $('.actionBtn').addClass("delete");
          $('.modal-title').text("Post Delete");
          $('.deletecontent').show();
          $('.form-horizontal').hide();
          $('.title').html($(this).data('title'));
          $('.id').text($(this).data('id'));
          // $('#t').val($(this).data('title'));
          // $('#b').val($(this).data('body'));
          $('#myModal').modal('show');
        
      });

      //function edit
        $('.modal-footer').on('click', '.edit', function(){
                // var token =  $('input[name=_token]').val();
                // var title = $('#t').val();
                // var body =  $('#b').val();
                // var id = $('#fid').val();
                // alert(title)
                // alert(id)
                // alert(body)
            $.ajax({
                type:'post',
                url: 'editPost',
                data:{
                  '_token' : $('input[name=_token]').val(),
                  'title': $('#t').val(),
                  'body':  $('#b').val(),
                  'id' : $('#fid').val()
                },
                success:function(data)
                {
                  if(data)
                {
                  var date_convert=data.created_at.slice(0,19).split("T").join(" ");
                    $('.post'+data.id).replaceWith(" "+
                    "<tr class='post"+data.id+"'><td class='text-center'>"+data.id+"</td>"+
                    "<td class='text-center'>"+data.title+"</td><td class='text-center'>"+data.body+"</td>"+
                    "<td class='text-center'>"+date_convert+"</td>"+
                    "<td class='text-center'>"+
                      "<a href='#' class='show-modal btn btn-info btn-sm ml-1' data-id='"+data.id+"' data-title='"+data.title+"' data-body='"+data.body+"'>"+
                              "<i class='fa fa-eye'></i>"+
                          "</a><a href='#' class='edit-modal btn btn-warning btn-sm ml-1' style='margin-left:4px' data-id='"+data.id+"' data-title='"+data.title+"' data-body='"+data.body+"'>"+
                              "<i class='glyphicon glyphicon-pencil'></i>"+
                          "</a><a href='#' class='delete-modal btn btn-danger btn-sm ' style='margin-left:4px' data-id='"+data.id+"' data-title='"+data.title+"' data-body='"+data.body+"'>"+
                              "<i class='glyphicon glyphicon-trash'></i>"+
                          "</a>"+
                    "</td></tr>");
                  }
                }
            })
        });


         //function delete
         $('.modal-footer').on('click', '.delete', function(){
               
                var id = $('.id').text();
               
            $.ajax({
                type:'post',
                url: 'deletePost',

                data:{
                  '_token' : $('input[name=_token]').val(),
                  'id' : id,
                },
                success:function(data)
                {
                  if(data)
                {
                //  console.log ($('.post' + $('id').text()));
                 $(".post"+id).remove();
                    // $('.post'+$('id').text()).remove();
                }
                }
            })
        });







        
        //function add (save)
        $('#add').click(function(){
            $.ajax({
              type : 'POST',
              url : 'addPost',
              data : {
                '_token': $('input[name=_token]').val(),
                'title': $('input[name=title]').val(),
                'body': $('input[name=body]').val(),   
                'title': $('input[name=title]').val(),
                'body': $('input[name=body]').val(),
              },
              success:function(data)
              {
                if(data)
                {
                  // var data_=data.created_at;
                  // var date_convert = JSON.parse(data_.toString());
                  // console.log(date_convert);

                  var date_convert=data.created_at.slice(0,19).split("T").join(" ");

                  $('#posts_table tr:last').after("<tr class='post"+data.id+"'><td class='text-center'>"+data.id+"</td>"+
                    "<td class='text-center'>"+data.title+"</td><td class='text-center'>"+data.body+"</td>"+
                    "<td class='text-center'>"+date_convert+"</td>"+
                    "<td class='text-center'>"+
                      "<a href='#' class='show-modal btn btn-info btn-sm ml-1' data-id='"+data.id+"' data-title='"+data.title+"' data-body='"+data.body+"'>"+
                              "<i class='fa fa-eye'></i>"+
                          "</a><a href='#' class='edit-modal btn btn-warning btn-sm ml-1' style='margin-left:4px' data-id='"+data.id+"' data-title='"+data.title+"' data-body='"+data.body+"'>"+
                              "<i class='glyphicon glyphicon-pencil'></i>"+
                          "</a><a href='#' class='delete-modal btn btn-danger btn-sm ' style='margin-left:4px' data-id='"+data.id+"' data-title='"+data.title+"' data-body='"+data.body+"'>"+
                              "<i class='glyphicon glyphicon-trash'></i>"+
                          "</a>"+
                    "</td></tr>");  
                   $('#title').val('');
                   $('#body').val('');
                    hideModal();
                    
                }
              }
            });
          });

          $(document).ready(function(){
                  $(document).on('click', '.pagination a', function(event){
                      event.preventDefault();
                      var page = $(this).att('href').split('page=')[1];
                      fetch_data(page); 
                  });
                  
                  function fetch_data(page)
                  {
                    $.ajax({
                      url:"/post/fetch_data?page="+page,
                      success:function(data)
                      {
                        $('#poststable').html(data);
                      }
                    });
                  }
          })
          






          
      
      </script>


{{-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

 --}}



  </body>
</html>