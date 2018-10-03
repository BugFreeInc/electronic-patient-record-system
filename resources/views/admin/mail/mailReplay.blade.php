@extends('admin.masterAdmin')
@section('maincontent')

<section id="main-content">
      <section class="wrapper">
        <!-- page start-->
        <div class="row ">
         
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    Replay Mail
                    
                  </h4>
              </header>
              <div class="panel-body">
                
                <div class="compose-mail">
                  <form role="form-horizontal" method="post" action="{{ url('/adminMail/replay/send') }}">
                  	  {{ csrf_field() }}
                    <div class="form-group">
                      <label for="to" class="">To:</label>
                      <input type="text" tabindex="1" id="to" class="form-control"  value="{{$mailreplay->email }}">
                     <input type="hidden" value="{{$mailreplay->id}}" class="form-control" name="noticeId">
                    </div>
                    
                    <div class="form-group">
                      <label for="subject" class="">Subject:</label>
                      <input type="text" tabindex="1" id="subject" class="form-control" value="{{$mailreplay->subject }}">
                    </div>
                    <div class="compose-editor">
                      <textarea class="wysihtml5 form-control" rows="9">Hello {{$mailreplay->name }},</textarea><br>
                    </div>
                    <div class="compose-btn">
                      <button class="btn btn-theme btn-sm"><i class="fa fa-check"></i> Send</button>
                    
                    
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
@endsection()