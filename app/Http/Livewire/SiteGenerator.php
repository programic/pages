<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\Builder;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\Str;
use Livewire\Component;

class SiteGenerator extends Component implements HasForms
{
    use InteractsWithForms;

    public string $page_title = '';
    public string $slug = '';
    public bool $published = false;
    public string $fb_pixel = '';
    public string $gtm_id = '';

    public array $seo = [];
    public array $content = [];

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('page_title')
                ->required()
                ->reactive()
                ->afterStateUpdated(fn ($get, $set) => $set('slug', Str::slug($get('page_title')))),
            TextInput::make('slug')->required(),
            Toggle::make('published'),
            TextInput::make('fb_pixel')->name('Facebook pixel id'),
            TextInput::make('gtm_id')->name('Google Tag manager id'),
            Repeater::make('seo')->schema([
                TextInput::make('key')->name('Meta field key'),
                TextInput::make('value')->name('Meta field value'),
            ]),
            Builder::make('content')->schema([
               Builder\Block::make('bio')->schema([
                   RichEditor::make('bio')->required(),
               ]) ,
                Builder\Block::make('bookings')->schema([
                    Repeater::make('booking')->schema([
                        TextInput::make('name')->required(),
                        DateTimePicker::make('date')->required()->withoutSeconds(),
                    ]),
                ]),
                Builder\Block::make('releases')->schema([
                    Repeater::make('release')->schema([
                        TextInput::make('name')->required(),
                        DatePicker::make('release_date')->required(),
                        TextInput::make('spotify_url')->url()->prefix('https://'),
                    ])
                ]),
                Builder\Block::make('contact')->schema([
                    Repeater::make('contact')->schema([
                        TextInput::make('label')->required(),
                        TextInput::make('email')->required()->email(),
                    ]),
                ]),
                Builder\Block::make('social_media')->schema([
                    Repeater::make('social_media')->schema([
                        TextInput::make('label')->required(),
                        TextInput::make('url')->required()->url(),
                    ]),
                ]),
            ]),
        ];
    }

    public function render()
    {
        return view('livewire.site-generator');
    }
}
