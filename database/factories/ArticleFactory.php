<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Towards an Identification and Classification of Service
            Quality Attributes in Higher Education 
            International Journal of e-Education, e-Business, e-Management and e-Learning, Vol. 1, No. 2, June, 2011',
            'url' => 'https://google.com'
        ];
    }
}
