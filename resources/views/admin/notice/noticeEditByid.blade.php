@extends('admin.masterAdmin')
@section('maincontent')

<section id="main-content">
      <section class="wrapper">
       <div class="col-sm-9">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case text-center" >
                    Add Notice<br>
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    
                  
                  </h4>
              </header>
              <div class="panel-body">
                
                <div class="compose-mail">
                  <form role="form-horizontal" method="post" action="{{ url('/adminNoticeAdd/update') }}">
                {{ csrf_field() }}
                
                    <div class="form-group">
                      <label  class="">Subject:</label>
                      <input type="text" tabindex="1" name="noticeSubject" placeholder="Enter Notice Subject" class="form-control" value="{{$noticeEditById->noticeSubject }}">
                       <input type="hidden" value="{{$noticeEditById->id}}" class="form-control" name="noticeId">
                    </div>
                    <div class="compose-editor">
                      <textarea class="wysihtml5 form-control" rows="9" placeholder="Write Notice" name="noticeMassage">{{ $noticeEditById->noticeMassage}}</textarea>
                      
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