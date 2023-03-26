<div>
@include('livewire.create')
@include('livewire.update')
@include('livewire.delete')
<section>
<div class="container">
<div class="row">
.@if (session()->has('message'))
<div class="alert alert-success">
{{session('message')}}
</div> @endif
<div class="card bg-success">
<div class="card-header text-white">
<h3>
Productos

</h3>
</div>
<div class="card-body">
<div class="d-flex flex-wrap">
<div class="row">
        
        

@foreach ($studentsms as $student)
<div class="col-md-4 mb-4">
<div class="card">
  <img src="{{$student->lastname}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">{{$student->firstname}}</h3>
    <strong><p class="card-text">${{$student->phone}}</p></strong>
   
  </div>
</div>
</div>
 @endforeach
 </div>
</div>


</div>

</div>

</div>
</div>
</section>
</div>
