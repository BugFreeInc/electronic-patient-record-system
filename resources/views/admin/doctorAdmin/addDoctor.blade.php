@extends('admin.masterAdmin')
@section('maincontent')

<section id="main-content">
      <section class="wrapper">
       <div class="col-sm-9">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case text-center" >
                    Add Doctor
                    
                  </h4>
              </header>
              <div class="panel-body">
                
                <div class="compose-mail">
                  <form role="form-horizontal" method="post">
                    <div class="form-group">
                      <label for="to" class="">Reg. Id:</label>
                      <input type="text" tabindex="1" id="regid" placeholder="Enter Doctor Reg. ID" class="form-control">
                      
                    </div>
                    
                    
                     <div class="form-group">
                      <label  class="">Name:</label>
                      <input type="text" tabindex="1" id="drname" placeholder="Enter Doctor Name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="subject" class="">Email:</label>
                      <input type="Email" tabindex="1" id="emal" placeholder="Enter Doctor Email" class="form-control">
                    </div>
                    
                    <div class="compose-btn">
                      <button class="btn btn-theme btn-sm" type="submit"><i class="fa fa-check"></i> Save</button>
                      
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
      </section>
      <!-- /wrapper -->
    </section>

@endsection()