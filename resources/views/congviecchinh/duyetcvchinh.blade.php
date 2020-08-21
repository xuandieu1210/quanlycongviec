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
            <a href="{{ url('congviecchinh') }}">Duyệt BCS Đơn Vị</a>
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
            <a href="{{ url('congviecchitiet') }}">Phân Chia Công Việc</a>
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
      <div class="container">
        <div class="text-center">
          <h2>Chọn đơn vị</h2>
          <select class="text-center selectpicker" data-style="btn-primary">
          <option selected="">Please Select</option>
          @foreach ($donvis as  $item ) 
              <option value="{{$item->id}}">{{ $item->ten_don_vi}}</option>
          @endforeach
            </select>
        </div>
      </div>
      
      </br>
      </br>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-edit icon-large'></i>
            Duyệt công việc cho đơn vị
          </div>
          <div class='panel-body'>
            <form method="POST" action="{{ url('congviecchinh/updatemulti') }}">
            {{ csrf_field() }}
            <div class='form-group row'>
                <div class='col-lg-6'>
                    <label class='control-label'>Tên công việc</label>
                   
                  </div>
                  <div class='col-lg-2'>
                    <label class='control-label'>Đơn vị tính</label>
                    
                  </div>
                  <div class='col-lg-1'>
                    <label class='control-label'>Trọng số</label>
                    
                  </div>
                  <div class='col-lg-2'>
                    <label class='control-label'>Thời gian hoàn thành</label>
                    
                  </div>
                  <div class='col-lg-1'>
                    <label class='control-label'>  Action</label>
                  </div>
                </div>
              <fieldset >

                
                <div id="field">

                </div>
               
              </fieldset>
              <button id="b1" class="btn add-more" type="button">+</button>
              <div class='form-actions'>
                <button class='btn btn-default' type='submit'>Submit</button>
                <a class='btn' href='#'>Cancel</a>
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

        
        $('.selectpicker').on('change', function() {
        //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
          var query = $(this).val(); //lấy gía trị ng dùng gõ
          if(query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
          {
          var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
          $.ajax({
              url:"{{ route('search') }}", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
              method:"POST", // phương thức gửi dữ liệu.
              data:{query:query, _token:_token},
              success:function(data){ //dữ liệu nhận về
              $('#field').fadeIn();  
              $('#field').html(data); 
              $('.remove-me').click(function(e){
              console.log(1);
                      e.preventDefault();
                      $(this).parent().parent().remove();
                  });
              //nhận dữ liệu dạng html và gán vào cặp thẻ có id là countryList
            }
          });
        }
        
      });
      $(document).ready(function(){

      
    
      })
    </script>
  </body>
</html>
