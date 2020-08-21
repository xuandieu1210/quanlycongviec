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
          <li class='active launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="{{ url('pscdonvi') }}">Forms</a>
          </li>
          <li class='launcher'>
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
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-edit icon-large'></i>
            Duyệt công việc
          </div>
          <div class='panel-body'>
            <form method="POST" action="{{ url('/congviecchinh') }}">
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
                  <div id="field0">
                    <div class='form-group row'>
                      <div class='col-lg-6'>
                        
                        <input class='form-control' name="ten_cv_chinh[]" type='text'>
                      </div>
                      <div class='col-lg-2'>
                        
                        <input class='form-control' name='don_vi_tinh[]' type='text'>
                      </div>
                      <div class='col-lg-1'>
                        
                        <input class='form-control' name='trong_so_dk[]' type='text'>
                      </div>
                      <div class='col-lg-2'>
                        
                        <div class='input-group date datetimepicker1' id='datetimepicker1'>
                          <input type='text' class="form-control" name='thoi_gian_hoan_thanh_dk[]' />
                          <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                        </div>
                      </div>
                      <div class='col-lg-1'>
                      
                        <button id="b1" class="btn add-more" type="button">+</button>
                      </div>
                    </div>
                  </div>
                </div>
               
              </fieldset>

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
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
      $('.datetimepicker1').datetimepicker();
      $(document).ready(function(){
        var next = 1;
        $(".add-more").click(function(e){
           var form = $("#field0");
            var newIn = " <div id='field"+ next +"'><div class='form-group row'><div class='col-lg-6'><input class='form-control' name='ten_cv_chinh[]' type='text'></div><div class='col-lg-2'><input class='form-control' name='don_vi_tinh[]' type='text'></div><div class='col-lg-1'><input class='form-control'  name='trong_so_dk[]' type='text'></div><div class='col-lg-2'><div class='input-group date datetimepicker1' id='datetimepicker1'><input type='text' class='form-control' name='thoi_gian_hoan_thanh_dk[]' /><span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span></div> </div><div class='col-lg-1'><button id='remove" + (next - 1) + "' class='btn btn-danger remove-me' >-</button></div></div></div>";
            form.append(newIn);
            $('.remove-me').click(function(e){
                e.preventDefault();
                $(this).parent().parent().remove();
            });
        });
        
       
        
    });

    </script>
  </body>
</html>
