<?php

namespace App\Http\Livewire\Tables\Backend;

use App\Models\Feedback;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class FeedbackTable extends LivewireDatatable
{
    public $model = Feedback::class;
    public $exportable = true;

    public function builder()
    {
        return Feedback::query();
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

            Column::name('type')
                ->searchable()
                ->filterable(['OP', 'IP']),

            Column::name('name')
                ->searchable()
                ->filterable()
                ->label('Name'),

            NumberColumn::name('admission_number')
                ->label('OP / IP Number')
                ->filterable(),

            Column::name('email')
                ->searchable()
                ->filterable()
                ->label('EMail'),

            NumberColumn::name('phone')
                ->label('Contact Number')
                ->filterable(),

            Column::name('how')
                ->searchable()
                ->truncate(20)
                ->label('How'),

            NumberColumn::name('initial_response_rating')
                ->label('initial_response_rating')
                ->filterable(),

            Column::name('initial_response_text')
                ->searchable()
                ->truncate(20)
                ->label('initial_response_text'),

            NumberColumn::name('explanation_of_treatment_rating')
                ->label('explanation_of_treatment_rating')
                ->filterable(),

            Column::name('explanation_of_treatment_text')
                ->searchable()
                ->truncate(20)
                ->label('explanation_of_treatment_text'),

            NumberColumn::name('cost_of_treatment_rating')
                ->label('cost_of_treatment_rating')
                ->filterable(),

            Column::name('cost_of_treatment_text')
                ->searchable()
                ->truncate(20)
                ->label('cost_of_treatment_text'),

            NumberColumn::name('reception_rating')
                ->label('reception_rating')
                ->filterable(),

            Column::name('reception_text')
                ->searchable()
                ->truncate(20)
                ->label('reception_text'),

            NumberColumn::name('dmo_rating')
                ->label('dmo_rating')
                ->filterable(),

            Column::name('dmo_text')
                ->searchable()
                ->truncate(20)
                ->label('dmo_text'),

            NumberColumn::name('nurse_rating')
                ->label('nurse_rating')
                ->filterable(),

            Column::name('nurse_text')
                ->searchable()
                ->truncate(20)
                ->label('nurse_text'),

            NumberColumn::name('house_keeping_rating')
                ->label('house_keeping_rating')
                ->filterable(),

            Column::name('house_keeping_text')
                ->searchable()
                ->truncate(20)
                ->label('house_keeping_text'),

            NumberColumn::name('satisfaction_of_treatment_rating')
                ->label('satisfaction_of_treatment_rating')
                ->filterable(),

            Column::name('satisfaction_of_treatment_text')
                ->searchable()
                ->truncate(20)
                ->label('satisfaction_of_treatment_text'),

            Column::name('any_other_feedback')
                ->searchable()
                ->truncate(20)
                ->label('any_other_feedback'),

            DateColumn::name('created_at')
                ->filterable(),
        ];
    }
}
