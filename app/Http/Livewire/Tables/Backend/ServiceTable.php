<?php

namespace App\Http\Livewire\Tables\Backend;

use App\Models\Service;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class ServiceTable extends LivewireDatatable
{
    public $model = Service::class;
    public $exportable = true;

    public function builder()
    {
        return Service::query()->with('department');
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

            Column::name('title')
                ->searchable()
                ->filterable()
                ->label('Title'),

            Column::name('department.name')
                ->filterable()
                ->label('Department Name'),

            NumberColumn::name('clicks')
                ->label('Views')
                ->filterable(),

            Column::name('excerpt')
                ->searchable()
                ->truncate(20)
                ->label('Excerpt'),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.backend.services.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
