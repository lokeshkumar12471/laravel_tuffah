<?php

namespace App\Http\Livewire\Tables\Backend;

use App\Models\Slider;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class SliderTable extends LivewireDatatable
{
    public $model = Slider::class;
    public $exportable = true;

    public function builder()
    {
        return Slider::query();
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

            Column::callback(['image'], function ($image) {
                return view('components.backend.slider-image',['image' => $image]);
            })->label('Image'),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.backend.sliders.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
