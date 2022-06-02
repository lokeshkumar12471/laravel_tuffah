<?php

namespace App\Http\Livewire\Tables\Backend;

use App\Models\Package;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class PackageTable extends LivewireDatatable
{
    public $model = Package::class;
    public $exportable = true;

    public function builder()
    {
        return Package::query();
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

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.backend.packages.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
