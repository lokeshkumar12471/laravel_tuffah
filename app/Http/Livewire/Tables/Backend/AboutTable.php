<?php

namespace App\Http\Livewire\Tables\Backend;

use App\Models\About;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class AboutTable extends LivewireDatatable
{
    public $model = About::class;
    public $exportable = true;

    public function builder()
    {
        return About::query();
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

            Column::name('excerpt')
                ->searchable()
                ->truncate(20)
                ->label('Excerpt'),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.backend.about.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
