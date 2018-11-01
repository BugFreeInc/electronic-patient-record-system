@extends('admin.masterAdmin')
@section('maincontent')

<section id="main-content">
      <section class="wrapper">
       <div class="col-sm-9">
        <header class="panel-heading wht-bg">
                <h4 class="gen-case text-center" >
                    Notice Bord
                    
                  
                  </h4>
                  <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
              </header>  


<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
    
            <th>Notice Subject</th>
            <th>Date</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody>
       @foreach($admin_notices as $notice)
        <tr> 
            <th scope="row">{{ $notice->id }}</th>
            
            <td>{{ $notice->noticeSubject }}</td>
            
            <td> {{ $notice->created_at }}</td>
            
            <td>
                <a href="{{ url('/adminNoticeList/view/'.$notice->id) }}" class="btn btn-info" title="Notice View">

                    <span class="glyphicon glyphicon-eye-open"></span>

                   
                </a>
                <a href="{{ url('/adminNoticeList/edit/'.$notice->id) }}" class="btn btn-success" title="Notice Edit">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="{{ url('/adminNotice/delete/'.$notice->id) }}" title="Notice Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                    <span class="glyphicon glyphicon-trash"></span>
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