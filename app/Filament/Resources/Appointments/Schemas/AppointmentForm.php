<?php

namespace App\Filament\Resources\Appointments\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class AppointmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name_of_doctor')
                    ->required(),
                TextInput::make('name_of_services')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Textarea::make('email')
                    ->label('Email address')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('Appointment_date')
                    ->required(),
                TimePicker::make('Appointment_time')
                    ->required(),
            ]);
    }
}
