

@extends('doctor.master') 
@section('mainContent')

<div id="HTMLtoPDF">
 <section id="doctorinfo" class="">
        <div class="" >
            <h3><b>{{$presId->DrName }}</b></h3>
            <h4>Reg. No: {{$presId->DrID }}</h4>
            
           
           
            
            
        </div>

            
    </section>
    <br>
    <section id="doctorinfo" class="">
        <div class="" >
           
            <h3><b>NID: {{$presId->nid }}</b></h3>
            
       
            
        </div>
        
            
    </section>
<br>
<section id="slidebar" >
  <div class="container">
    
           
  <div class="row">

<table class="table table-bordered">
  <thead>
 
    <tr>
      <th>Disease Name</th>
      <th>Medicine Info</th>
      <th>Date</th>
      
    </tr>
  </thead>
  <tbody id="myTable">
  
    
 
   
    <tr>
    <td>{{$presId->Diseaseinfo}}</td>
    <td>{!! $presId->Medicine!!}</td>
    <td>{{$presId->Date}}</td>

  </tr>



   
  


    
    
  </tbody>
</table>

    
  </div>
                
        
                  
        
</section>
<br>
<br>

<section id="slidebar" >
  <div class="container">

    <p>.....................</p>
    <p><b>Dr Signeture</b> </p>
    </div>
 </div>
 </div>
 



@endsection()