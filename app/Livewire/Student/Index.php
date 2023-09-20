<?php

namespace App\Livewire\Student;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public $search = ''; // Added property for search query

     public function render()
    {
        $students = Student::paginate(10);
        return view('livewire.student.index', [
            'students' => $students,
        ]);
    }

    public function delete(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('status', 'Student deleted successfully.');
    }
}
