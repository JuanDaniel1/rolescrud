<?php

namespace App\Http\Livewire;
use App\Models\Student;
use Livewire\Component;

class Studentsm extends Component
{
    public $ids;
public $firstname; public $lastname; public $phone;

public function resetInputFields()
{

$this->firstname = '';
$this->lastname = '';
$this->phone='';
}

public function store()
{
$validatedData = $this->validate([ 'firstname' => 'required', 'lastname' => 'required', 'phone' => 'required'
]);

Student::create($validatedData);
session()->flash('message','Student Created Successfully!');
$this->resetInputFields();
$this->emit('studentAdded');

}

public function edit($id)
{
$student = Student::where('id',$id)->first();
$this->ids = $student->id;
$this->firstname = $student->firstname;
$this->lastname = $student->lastname;
$this->phone = $student->phone;
}

public function update()
{
$this->validate([ 'firstname' => 'required', 'lastname' => 'required', 'phone' => 'required'
]);

if($this->ids)
{
$student = Student::find($this->ids);
$student->update([
'firstname' => $this->firstname, 'lastname' => $this->lastname,
'phone' => $this->phone
]);

session()->flash('message','Student Updated Successfully');
$this->resetInputFields();
$this->emit('studentUpdated');
}
}
public function destroy($id)
{
    $student = Student::where('id', $id)->first();
    $this->ids = $student->id;
    $this->firstname = $student->firstname;
    $this->lastname = $student->lastname;
    $this->phone = $student->phone;
}
public function delete()
{
    
    if ($this->ids) {
        $student = Student::find($this->ids);
        $student->delete([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phone' => $this->phone
        ]);
        session()->flash('message', 'Student Updated Successfully');
        $this->resetInputFields();
        $this->emit('studentUpdated');
    }
}

public function render()
{
$students = Student::orderBy('id','DESC')->get();
return view('livewire.studentsm',['studentsm'=>$students]);
}
}
