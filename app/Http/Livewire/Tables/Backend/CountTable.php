<?php

namespace App\Http\Livewire\Tables\Backend;

use App\Models\Count;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class CountTable extends LivewireDatatable
{
    public $model = Count::class;
    public $exportable = true;

    public function builder()
    {
        return Count::query();
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

            Column::name('value')
                ->searchable()
                ->filterable()
                ->label('Value'),

            Column::name('title')
                ->searchable()
                ->filterable()
                ->label('Title'),

            Column::name('icon')
                ->searchable()
                ->filterable()
                ->label('Icon'),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.backend.counts.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
