<?php

namespace App\Http\Livewire;

use App\Models\Site;
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

    public Site $site;

    public string $name = '';
    public string $slug = '';
    public bool $active = false;
    public string $fb_pixel = '';
    public string $google_tag_manager = '';

    public array $seo = [];
    public array $content = [];

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->name('Page title')
                ->required()
                ->reactive()
                ->afterStateUpdated(fn ($get, $set) => $set('slug', Str::slug($get('name')))),
            TextInput::make('slug')->required(),
            Toggle::make('active'),
            TextInput::make('fb_pixel')->name('Facebook pixel id'),
            TextInput::make('google_tag_manager')->name('Google Tag manager id'),
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
                        TextInput::make('url')->required()->url()->prefix('https://'),
                    ]),
                ]),
            ]),
        ];
    }

    public function mount(Site $site)
    {
        if (! $site) {
            return;
        }

        $this->name = $site->name;
        $this->slug = $site->slug;
        $this->active = $site->active;
        $this->fb_pixel = $site->fb_pixel;
        $this->google_tag_manager = $site->google_tag_manager;
        $this->seo = $site->seo;
        $this->content = $site->content;

        $this->site = $site;
    }

    public function render()
    {
        return view('livewire.site-generator');
    }

    public function submit() {
        $data = [
            'name' => $this->name,
            'slug' => $this->slug,
            'active' => $this->active,
            'fb_pixel' => $this->fb_pixel,
            'google_tag_manager' => $this->google_tag_manager,
            'seo' => $this->seo,
            'content' => $this->content,
        ];


        if ($this->site) {
            $this->site->update($data);
        } else {
            Site::create($data);

            $this->resetForm();
        }
    }

    public function resetForm()
    {
        $this->reset([
            'name',
            'slug',
            'active',
            'fb_pixel',
            'google_tag_manager',
            'seo',
            'content',
        ]);
    }
}
