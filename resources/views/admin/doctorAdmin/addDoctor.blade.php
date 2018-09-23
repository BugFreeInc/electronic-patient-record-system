@extends('admin.masterAdmin')
@section('maincontent')

<section id="main-content">
      <section class="wrapper">
       <div class="col-sm-9">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case text-center" >
                    Add Doctor
                    @if(session('addDr'))
                      <p class="alert alert-danger">{{session('addDr')}}</p>
                   @endif
                   @if(count($errors)>0)
                   @foreach($errors->all() as $error )
                      <p class="alert alert-danger">{{$error}}</p>
                   @endforeach
                   @endif
                  </h4>
              </header>
              <div class="panel-body">
                
                <div class="compose-mail">
                  <form role="form-horizontal" method="post" action={{url('/addingDr')}}>
                  @csrf
                    <div class="form-group">
                      <label for="to" class="">Reg. Id:</label>
                      <input type="text" tabindex="1"  name="RegID" placeholder="Enter Doctor Reg. ID" class="form-control">
                      
                    </div>
                    
                    
                     <div class="form-group">
                      <label  class="">Name:</label>
                      <input type="text" tabindex="1" name="name" placeholder="Enter Doctor Name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="subject" class="">Email:</label>
                      <input type="Email" tabindex="1" name="email" placeholder="Enter Doctor Email" class="form-control">
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