@extends('admin.masterAdmin')
@section('maincontent')

<section id="main-content">
      <section class="wrapper">
       <div class="col-sm-9">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case text-center" >
                    Notice Bord
                    
                  </h4>
              </header>
              <div class="panel-body">
                
                <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>{{$notice->noticeSubject }}</th>
     
        </tr>
    </thead>
    <tbody>
       
        <tr> 

            <td>{{ $notice->noticeMassage }}</td>
            
            
        </tr>
 
    </tbody>
</table>
                
              </div>
            </section>
          </div>
      </section>
      <!-- /wrapper -->
    </section>

@endsection()