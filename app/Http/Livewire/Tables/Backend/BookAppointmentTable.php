<?php

namespace App\Http\Livewire\Tables\Backend;

use App\Models\BookAppointment;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;

class BookAppointmentTable extends LivewireDatatable
{
    public $model = BookAppointment::class;
    public $exportable = true;

    public function builder()
    {
        return BookAppointment::query()->with('team');
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

            DateColumn::name('appointment_date')
                ->filterable()
                ->label('Appointment Date'),

            TimeColumn::name('appointment_time')
                ->filterable()
                ->label('Appointment Time'),

            NumberColumn::name('phone')
                ->label('Contact Number')
                ->filterable(),

            Column::name('email')
                ->searchable()
                ->filterable()
                ->label('EMail'),

            Column::name('gender')
                ->searchable()
                ->filterable(['Male', 'FeMale']),

            NumberColumn::name('age')
                ->label('Age')
                ->filterable(),

            Column::name('address')
                ->searchable()
                ->truncate(20)
                ->label('Address'),

            Column::name('team.name')
                ->filterable()
                ->label('Team Name'),

            BooleanColumn::name('previous_record')
                ->filterable()
                ->label('Previous Record'),

            Column::name('previous_record_description')
                ->searchable()
                ->truncate(20)
                ->label('Previous Record Description'),

            DateColumn::name('created_at')
                ->filterable()
                ->label('Booked Date'),
        ];
    }
}
