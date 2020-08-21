<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Forms</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="{{ asset('/public/stylesheets/application-a07755f5.css')}}" rel="stylesheet" type="text/css" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/public/images/favicon.ico') }}" rel="icon" type="image/ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<style>
.vl {
  border-left: 6px solid green;
  height: 100%;
  position: absolute;
  left: 50%;
  margin-left: -3px;
  top: 0;
}
</style>
  </head>
  <body class='main page'>
    <!-- Navbar -->
    <div class='navbar navbar-default' id='navbar'>
      <a class='navbar-brand' href='#'>
        <i class='icon-beer'></i>
        Quản lý BSC
      </a>
      <ul class='nav navbar-nav pull-right'>
        <li class='dropdown'>
          <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            <i class='icon-envelope'></i>
            Messages
            <span class='badge'>5</span>
            <b class='caret'></b>
          </a>
          <ul class='dropdown-menu'>
            <li>
              <a href='#'>New message</a>
            </li>
            <li>
              <a href='#'>Inbox</a>
            </li>
            <li>
              <a href='#'>Out box</a>
            </li>
            <li>
              <a href='#'>Trash</a>
            </li>
          </ul>
        </li>
        <li>
          <a href='#'>
            <i class='icon-cog'></i>
            Settings
          </a>
        </li>
        <li class='dropdown user'>
          <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            <i class='icon-user'></i>
            <strong>John DOE</strong>
            <img class="img-rounded" src="http://placehold.it/20x20/ccc/777" />
            <b class='caret'></b>
          </a>
          <ul class='dropdown-menu'>
            <li>
              <a href='#'>Edit Profile</a>
            </li>
            <li class='divider'></li>
            <li>
              <a href="/">Sign out</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div id='wrapper'>
      <!-- Sidebar -->
      <section id='sidebar'>
        <i class='icon-align-justify icon-large' id='toggle'></i>
        <ul id='dock'>
          <li class='launcher'>
            <i class='icon-dashboard'></i>
            <a href="dashboard.html">Dashboard</a>
          </li>
          <li class=' launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="forms.html">Forms</a>
          </li>
          <li class=' active launcher'>
            <i class='icon-table'></i>
            <a href="{{ url('congviecchinh') }}">Tables</a>
          </li>
          <li class='launcher dropdown hover'>
            <i class='icon-flag'></i>
            <a href='#'>Reports</a>
            <ul class='dropdown-menu'>
              <li class='dropdown-header'>Launcher description</li>
              <li>
                <a href='#'>Action</a>
              </li>
              <li>
                <a href='#'>Another action</a>
              </li>
              <li>
                <a href='#'>Something else here</a>
              </li>
            </ul>
          </li>
          <li class='launcher'>
            <i class='icon-bookmark'></i>
            <a href='#'>Bookmarks</a>
          </li>
          <li class='launcher'>
            <i class='icon-cloud'></i>
            <a href='#'>Backup</a>
          </li>
          <li class='launcher'>
            <i class='icon-bug'></i>
            <a href='#'>Feedback</a>
          </li>
        </ul>
        <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
      </section>
      <!-- Tools -->
      <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
          <li class='title'>Forms</li>
          <li><a href="#">Lorem</a></li>
          <li class='active'><a href="#">ipsum</a></li>
        </ul>
        <div id='toolbar'>
          
        </div>
      </section>
      <!-- Content -->


      <div id='content'>
      <div class='row text-center'>
        <div class='col-md-6'>

            <h2 class="text-center">Công việc chính</h2>
              @foreach ($listCV as $cv)
              <div class="input-group mb-6 ">
                <input value="{{$cv->ten_cv_chinh}}" disabled="true" type="text" class="form-control">
                <span class="input-group-addon cvparent">
                <input type="hidden" class="cvID" name="custId" value="{{$cv->id}}">
                <span class="glyphicon glyphicon-chevron-right show" ></span>
                </span>
              </div>
              </br>
              @endforeach
              </div>
            <div class="vl"></div>
              <div class='col-md-6'>
                <h2 class="text-center">Công việc phân rã</h2>
                <div class='panel-body'>
                  <form method="POST" action="{{ url('cvchitiet') }}">
                  {{ csrf_field() }}
                  
                  <div class='form-actions'>
                    <div class="text-left">
                      <button id="b1" class="btn add-more float-md-left" type="button">+</button>
                    </div>

                      
                  </div>
                  
                  <div class='form-group row'>
                    <input type="hidden" class="id_cong_viec_chinh" name="id_cong_viec_chinh">
                    <fieldset >
                   
                      
                      <div id="field">

                      </div>
                    
                    </fieldset>
                  </div>
                  <div class="text-right">
                      <button class='btn btn-default' type='submit'>Lưu</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

       

    </div>
    <!-- Footer -->
    <!-- Javascripts -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript">
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>   </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"> -->
    <!-- </script> -->
    <script src="{{ asset('/public/javascripts/application-985b892b.js') }}" type="text/javascript"></script>
    <!-- Google Analytics -->
    <script>

        
        $('.show').on('click', function() {
          query = $(this).parent(".cvparent").find(".cvID").val();
          

          console.log(query);
          if(query != '') 
          {
          var _token = $('input[name="_token"]').val(); 
          $.ajax({
              url:"{{ route('searchcv') }}", 
              method:"POST", 
              data:{query:query, _token:_token},
              success:function(data){ 
              $('#field').html(data); 
              $(".id_cong_viec_chinh").val(query) 

            }
          });
          
        }
        
      });
      $(document).ready(function(){
        var query;
        var form = $("#field");
        $(".add-more").click(function(e){
            var newIn1 = "";
            newIn1 += "<input type='hidden' class='id' name='id[]' value=''><input class='form-control' name='tencvchitiet[]' type='text'></br>";
            console.log(newIn1);
            form.append(newIn1);
        });
    
      })
    </script>
  </body>
</html>
