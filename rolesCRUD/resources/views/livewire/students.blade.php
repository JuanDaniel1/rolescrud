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
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
  Add Producto
</button>
</h3>
</div>
<div class="card-body">
<div class="d-flex flex-wrap">
<div class="row">
        
        

@foreach ($students as $student)
<div class="col-md-4 mb-4">
<div class="card ">
  <img class="card-img-top rounded img-fluid" src="{{$student->lastname}}" alt="...">
  <div class="card-body">
    <h3 class="card-title">{{$student->firstname}}</h3>
    <strong><p class="card-text">${{$student->phone}}</p></strong>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateStudentModal" wire:click.prevent="edit({{$student->id}})">
  Edit
</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteStudentModal" wire:click.prevent="destroy({{$student->id}})">
  Delete
</button>
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
