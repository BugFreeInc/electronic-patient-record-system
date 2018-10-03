@extends('admin.masterAdmin')
@section('maincontent')

<section id="main-content">
      <section class="wrapper">
       <div class="col-sm-9">
        <header class="panel-heading wht-bg">
                <h4 class="gen-case text-center" >
                    Mail List View
                    
                  
                  </h4>
              </header>  


<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
    
            <th>Name</th>
            <th>Subject</th>
            <th>Date</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody>
       @foreach($admin_mail as $mail)
        <tr> 
            <th scope="row">{{ $mail->id}}</th>
            
            <td>{{ $mail->name}}</td>
            <td>{{ $mail->subject}}</td>
            
            <td> {{ $mail->created_at }}</td>
            
            <td>
                <a href="{{ url('/adminMail/view/'.$mail->id) }}" class="btn btn-info" title="Mail View">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </a>
                
            </td> 
        </tr>
   @endforeach
    </tbody>
</table>

          </div>
      </section>
      <!-- /wrapper -->
    </section>

@endsection()