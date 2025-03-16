<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\select;

class TemplateSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Template::create([
            'id' => '01958166-bab4-73e6-97c6-fd35dba2a875',
            'name' => 'dafault',
            'structure' => json_encode([
                "color" => [
                    "type" => "select",
                    "option" => ["blue", "indigo", "violet"]
                ],
                "social_media" => [
                    "name" => "select",
                    "option" => ["instagram", "linkedin", "email", "github"],
                    "username" => "text",
                    "link" => "text",
                ],
                "education" => [
                    "name" => "text",
                    "logo" => "file",
                    "year" => "text",
                    "major" => "text",
                    "description" => "textarea",
                    "link" => "text",
                ],
                "organization" => [
                    "name" => "text",
                    "logo" => "file",
                    "year" => "text",
                    "position" => "text",
                    "description" => "textarea",
                    "link" => "text",
                ],
                "hard_skill" => [
                    "name" => "text",
                    "logo" => "file",
                    "level" => "text",
                    "description" => "textarea",
                ],
                "experience" => [
                    "company" => "text",
                    "name" => "text",
                    "year" => "text",
                    "description" => "text",
                ],
                "data" => [
                    "name" => "text",
                    "date" => "text",
                    "detail" => "textarea",
                    "image" => "file",
                    "link" => "text",
                ],
            ])
        ]);
    }
}