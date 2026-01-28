<?php namespace App\View\Components;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Picture extends Component {
    public string $src;
    public string $alt;
    public ?string $class;
    public ?int $width;
    public ?int $height;
    public bool $lazy;
    
    public function __construct(
        string $src,
        string $alt,
        ?string $class = null,
        ?int $width = null,
        ?int $height = null,
        bool $lazy = true
    ) {
        $this->src = $src;
        $this->alt = $alt;
        $this->class = $class;
        $this->width = $width;
        $this->height = $height;
        $this->lazy = $lazy;
    }
    
    public function render(): View|Closure|string {
        return view('components.picture');
    }
}