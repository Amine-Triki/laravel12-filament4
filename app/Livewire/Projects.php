<?php

namespace App\Livewire;

use Livewire\Component;

class Projects extends Component
{
    public $activeCategory = 'all';



public $projects = [
    [
        'category' => 'React',
        'title' => 'Weather Website',
        'description' => 'React + vite + BOOTSTRAP + PWA',
        'link' => 'https://wather-react-pwa.vercel.app/',
        'github' => 'https://github.com/Amine-Triki/wather-react-pwa',
        'imageSrc' => 'assets/wather-react-pwa.webp',
    ],
    [
        'category' => 'JavaScript',
        'title' => 'Weather Website',
        'description' => 'JavaScript + BOOTSTRAP',
        'link' => 'https://amine-triki.github.io/Weather-js/',
        'github' => 'https://github.com/Amine-Triki/Weather-js',
        'imageSrc' => 'assets/8.webp',
    ],
    [
        'category' => 'Wordpress',
        'title' => 'personal website',
        'description' => 'WORDPRESS',
        'link' => 'https://aminetriki.com.tn/',
        'github' => '',
        'imageSrc' => 'assets/wordpress-portfolio.webp',
    ],
    [
        'category' => 'Wordpress',
        'title' => 'M.J.S.E website',
        'description' => 'WORDPRESS',
        'link' => 'https://mjses.com',
        'github' => '',
        'imageSrc' => 'assets/4.webp',
    ],
    [
        'category' => 'JavaScript',
        'title' => 'personal website',
        'description' => 'JavaScript + BOOTSTRAP',
        'link' => 'https://amine-triki.github.io/portfolio/',
        'github' => 'https://github.com/Amine-Triki/portfolio',
        'imageSrc' => 'assets/3.webp',
    ],
    [
        'category' => 'JavaScript',
        'title' => 'personal website',
        'description' => 'JavaScript + BOOTSTRAP',
        'link' => 'https://amine-triki.github.io/',
        'github' => 'https://github.com/Amine-Triki/Amine-Triki.github.io',
        'imageSrc' => 'assets/2.webp',
    ],
    [
        'category' => 'React',
        'title' => 'quran with voice',
        'description' => 'React + vite + BOOTSTRAP + PWA',
        'link' => 'https://quran-with-voice.vercel.app/',
        'github' => 'https://github.com/Amine-Triki/quran-with-voice',
        'imageSrc' => 'assets/quran.webp',
    ],
    [
        'category' => 'React',
        'title' => 'personal website',
        'description' => 'Nextjs + Tailwind css + PWA',
        'link' => 'https://next-js-js-portfolio.vercel.app/',
        'github' => 'https://github.com/Amine-Triki/nextJs-js-portfolio',
        'imageSrc' => 'assets/next  portfolio.webp',
    ],
    [
        'category' => 'React',
        'title' => 'generate qr code Website',
        'description' => 'React + Tailwind css',
        'link' => 'https://generate-qr-code-amine.vercel.app/',
        'github' => 'https://github.com/Amine-Triki/generate-qr-code',
        'imageSrc' => 'assets/generate-qr-code.webp',
    ],
    [
        'category' => 'React',
        'title' => 'Currency Converter Website',
        'description' => 'React + bootstrap',
        'link' => 'https://currency-converter-js-nu.vercel.app/',
        'github' => 'https://github.com/Amine-Triki/CurrencyConverterJs',
        'imageSrc' => 'assets/currencyconverter.webp',
    ],
    [
        'category' => 'React',
        'title' => 'personal website',
        'description' => 'React + Mui',
        'link' => 'https://portfolio-mui-delta.vercel.app/',
        'github' => 'https://github.com/Amine-Triki/portfolio-mui',
        'imageSrc' => 'assets/portfolio-mui.webp',
    ],
];


        public function setCategory($category)
    {
        $this->activeCategory = $category;
    }
    public function render()
    {
        return view('livewire.projects', [
            'filteredProjects' => collect($this->projects)->filter(function ($project) {
                return $this->activeCategory === 'all' || $project['category'] === $this->activeCategory;
            }),
        ]);
    }
}
