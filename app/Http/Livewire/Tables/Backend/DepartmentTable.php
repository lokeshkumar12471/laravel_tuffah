<?php

namespace App\Http\Livewire\Tables\Backend;

use App\Models\Department;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class DepartmentTable extends LivewireDatatable
{
    public $model = Department::class;
    public $exportable = true;

    public function builder()
    {
        return Department::query();
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            NumberColumn::name('id')
                ->label('ID')
                ->defaultSort('desc')
                ->filterable(),

            Column::name('name')
                ->searchable()
                ->filterable()
                ->label('Name'),

            Column::name('excerpt')
                ->searchable()
                ->truncate(20)
                ->label('Excerpt'),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.backend.departments.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
