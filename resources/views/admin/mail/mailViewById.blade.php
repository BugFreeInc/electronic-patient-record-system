@extends('admin.masterAdmin')
@section('maincontent')

<section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    View Message
                    
                  </h4>
              </header>
              <div class="panel-body ">
                <div class="mail-header row">
                  <div class="col-md-8">
                    <h4 class="pull-left">Subject: {{$mail->subject}}</h4>
                  </div>
                 
                </div>

                <div class="mail-sender">
                  <div class="row">
                    <div class="col-md-8">
                      
                      <strong>{{$mail->name}}</strong>
                      <span>[{{$mail->email}}]</span> to
                      <strong>Admin</strong>
                    </div>
                    <div class="col-md-4">
                      <p class="date">Send Time: {{$mail->created_at}}</p>
                    </div>
                  </div>

                  
                </div>
                <div class="view-mail">
                  <p>{{$mail->massage}} </p>
                  
                </div>
                
                <div class="compose-btn pull-left">
                  <a href="{{ url('/adminMail/replay/'.$mail->id) }}" class="btn btn-sm btn-theme"><i class="fa fa-reply"></i> Reply</a>
                  
                 
                 
                </div>
              </div>
            </section>

@endsection()